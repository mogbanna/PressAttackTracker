<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests\Report\NewRequest;
use App\Http\Requests\Report\UpdateRequest;
use App\Http\Requests\Report\DelRequest;
use App\Http\Requests\Report\UpdateStatusRequest;
use App\Http\Resources\ReportResource;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $reports = Report::paginage();

        return ReportResource::collection($reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        if(!Gate::allows('isAdmin')){
            abort(404,"Youre not authorized for this page, sorry...");
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request) {
        $report = new Report();

        $report->report_type_id = $request->input('report_type_id');
        $report->user_id = $request->input('user_id');
        $report->title = $request->input('title');
        $report->description = $request->input('description');
        $report->victim = $request->input('victim');
        $report->assailant = $request->input('assailant');
        $report->status_id = $request->input('status_id');
        $report->date = $request->input('date');

        if($report->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Report has been saved'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $report = Report::findOrFail($id);

        return new ReportResource($report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request) {
        $report = Report::findOrFail($request->input('id'));

        $report->report_type_id = $request->input('report_type_id');
        $report->title = $request->input('title');
        $report->description = $request->input('description');
        $report->victim = $request->input('victim');
        $report->assailant = $request->input('assailant');
        $report->status_id = $request->input('status_id');
        $report->date = $request->input('date');

        if($report->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Report has been updated'
            ]);
        }
    }

    public function updateStatus(UpdateStatusRequest $request) {
        $report = Report::findOrFail($request->input('id'));

        $report->status_id = $request->input('status_id');

        if($report->save()) {
            return response()->json([
                'success' => 1,
                'message' => 'Status has been updated'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(DelRequest $request) {
        $report = Report::findOrFail($request->input('id'));
        
        if($report->destroy()) {
            return response()->json([
                'success' => 1,
                'message' => 'Report has been deleted'
            ]);
        }
    }
}
