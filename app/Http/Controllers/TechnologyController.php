<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function show($id){
        $technology = Technology::findOrFail($id);
        return view('technology-show', compact('technology'));
    }
}
