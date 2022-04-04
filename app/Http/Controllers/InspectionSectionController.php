<?php

namespace App\Http\Controllers;

use App\Models\InspectionSection;
use Illuminate\Http\Request;

class InspectionSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InspectionSection::with('subsections')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InspectionSection  $inspectionSection
     * @return \Illuminate\Http\Response
     */
    public function show(InspectionSection $inspectionSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InspectionSection  $inspectionSection
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectionSection $inspectionSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InspectionSection  $inspectionSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectionSection $inspectionSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InspectionSection  $inspectionSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectionSection $inspectionSection)
    {
        //
    }
}
