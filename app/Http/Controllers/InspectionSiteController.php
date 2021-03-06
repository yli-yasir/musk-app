<?php

namespace App\Http\Controllers;

use App\Models\InspectionSite;
use Illuminate\Http\Request;
use App\Http\Resources\InspectionSiteResource;
use App\Models\Inspection;


class InspectionSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = InspectionSite::select('*')
            ->withCount('inspections')
            ->withSum('inspections', 'intervention_count')
            ->withSum('inspections', 'commendation_count')
            ->get();

        return InspectionSiteResource::collection($result);
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
        $inspectionSite = new InspectionSite;

        $inspectionSite->name = $request->name;

        // $inspectionSite->icon = $request->file('icon')->storePublicly('public');
        $inspectionSite->icon = 'b';
        $inspectionSite->save();

        return response()->json('created', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $result = InspectionSite::where('id', '=', $id)->withCount('inspections')
            ->withSum('inspections', 'intervention_count')
            ->withSum('inspections', 'commendation_count')
            ->get();

        return new InspectionSiteResource($result[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InspectionSite  $inspectionSite
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionSite $inspectionSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InspectionSite  $inspectionSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectionSite $inspectionSite)
    {
        $inspectionSite->update($request->all());
        return $inspectionSite;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InspectionSite  $inspectionSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionSite $inspectionSite)
    {
        $inspectionSite->delete();
        return response()->noContent();
    }
}
