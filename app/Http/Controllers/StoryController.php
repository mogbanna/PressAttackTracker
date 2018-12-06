<?php

namespace App\Http\Controllers;

use App\Story;
use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests\Story\NewRequest;
use App\Http\Requests\Story\UpdateRequest;
use App\Http\Requests\Story\DelRequest;
use App\Http\Requests\Story\UpdateThumbRequest;
use App\Http\Requests\Story\UpdateStatusRequest;
use App\Http\Resources\StoryResource;

class StoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $stories = Story::orderBy('created_at', 'desc')->paginate();

        return StoryResource::collection($stories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($reportId) {
        $report = Report::findOrFail($reportId);

        return view('admin.post.add', ['report' => $report]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request) {
        $story = new Story();

        //Get filename with the extension
        $filenameWithExt = $request->file('file')->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just ext
        $extension = $request->file('file')->getClientOriginalExtension();
        //filename to store
        $uuid = Str::uuid();
        $filenameToStore = $uuid.'.'.$extension;
        // upload image
        $path = $request->file('file')->storeAs('public/story/thumbs', $filenameToStore);

        $story->author = $request->input('author');
        $story->title = $request->input('title');
        $story->story = $request->input('story');
        $story->tags = $request->input('tags');
        $story->thumbnail = 'story/thumbs/'.$filenameToStore;
        $story->report_id = $request->input('report_id');
        $story->user_id = $request->input('user_id');
        $story->status_id = 1;

        if($story->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Story has been saved'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request) {
        $story = Story::findOrFail($request->input('id'));

        $story->author = $request->input('author');
        $story->title = $request->input('title');
        $story->story = $request->input('story');
        $story->tags = $request->input('tags');
        $story->status_id = $request->input('status_id');

        if($story->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Story has been updated'
            ]);
        }
    }

    public function updateThumbnail(UpdateThumbRequest $request) {

        //Get filename with the extension
        $filenameWithExt = $request->file('file')->getClientOriginalName();

        //get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //get just ext
        $extension = $request->file('file')->getClientOriginalExtension();

        //filename to store
        $uuid = Str::uuid();
        $filenameToStore = $uuid.'.'.$extension;

        // upload image
        $path = $request->file('file')->storeAs('public/story/thumbs', $filenameToStore);
        $story = Story::find($request->input('id'));

        //delete the previous file
        unlink(public_path("storage/".$story->thumbnail));

        $story->thumbnail = "story/thumbs/".$filenameToStore;

        if($story->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'thumbnail has been updated successfully'
            ]);
        }
    }

    public function updateStatus(UpdateStatus $request) {
        $story = Story::findOrFail($request->input('id'));

        $story->status_id = $request->input('status_id');

        if($story->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Story has been updated successfully'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(DelRequest $request) {
        $story = Story::findOrFail($request->input('id'));

        //delete thumbnail
        unlink(public_path("storage/".$story->thumbnail));

        if($story->destroy()) {
            return response()->json([
                'success' => 1,
                'message' => 'Story has been deleted'
            ]);
        }
    }
}
