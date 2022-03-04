<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class InspectionController extends Controller
{
    static function getAll()
    {
        return Inspection::all();
    }
    static function add()
    {
        $inspection = new Inspection();
        $inspection->save();
        return 'created';
    }
}
