<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Illuminate\Http\Request;
use App\Http\Resources\InspectionResource;
use App\Models\InspectionSite;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $result = Inspection::addSelect(['inspection_site_name' => InspectionSite::Select('name')
            ->whereColumn('id', 'inspection_site_id')])
            ->get();

        return InspectionResource::collection($result);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats()
    {

        $interventionCount = Inspection::all()->sum('intervention_count');
        $commendationCount = Inspection::all()->sum('commendation_count');

        return response()->json(['interventionCount' => $interventionCount, 'commendationCount' => $commendationCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inspection = new Inspection;

        $inspection->inspection_site_id = $request->siteId;

        $inspection->intervention_count = $request->interventionCount;

        $inspection->commendation_count = $request->commendationCount;

        $report_file_path = $request->file('reportFile')->storePublicly('public');

        $inspection->report_file = $report_file_path;

        $inspection->save();

        return response()->json('created', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function show(Inspection $inspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        //
    }
}
