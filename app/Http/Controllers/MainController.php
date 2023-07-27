<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class MainController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view("home", compact('projects'));
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view("show",compact('project'));
    }

    public function create(){
        $types = Type::all();
        $technologies = Technology::all();
        return view("create-project", compact('types','technologies'));
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        $project = Project::create($data);

        $project-> technologies()->attach($data['technology_id']);
        // $project-> technologies()->attach($data['technology_id']);
        return redirect()->route("show", $project->id);
    }

    public function delete(Request $request, $id){
        $project = Project::findOrFail($id);
        // $project->delete();s

        // ""Stacco"" la chiave esterna della tecnologia dal project
        $project -> technologies() -> detach();
        $project -> delete();


        return redirect()->route("home");

    }

}
