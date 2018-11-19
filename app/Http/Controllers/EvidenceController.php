<?php

namespace App\Http\Controllers;

use App\Evidence;
use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests\Evidence\NewRequest;
use App\Http\Requests\Evidence\UpdateRequest;
use App\Http\Requests\Evidence\DelRequest;
use App\Http\Resources\EvidenceResource;

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($reportId) {
        $report = Report::findOrFail($reportId);

        return EvidenceResource::collection($report->evidence);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request) {
        $evidence = new Evidence();

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
        $path = $request->file('file')->storeAs(
            'public/report/evidence', 
            $filenameToStore
        );
        
        $evidence->report_id = $request->input('report_id');
        $evidence->file_format = $extension;
        $evidence->url = "report/evidence/".$filenameToStore;

        if($evidence->save()) {
            return response()->json([
                'success' => '1',
                'message' => 'Evidence has been added'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $evidence = Evidence::findOrFail($id);

        return new EvidenceResource($evidence);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Evidence $evidence) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evidence $evidence) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(DelRequest $request) {
        $evidence = Evidence::findOrFail($request->input('id'));

        if($evidence->destroy()) {
            return response()->json([
                'success' => 1,
                'message' => 'Evidence has been destroyed'
            ]);
        }
    }
}
