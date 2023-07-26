<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;

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
        return view("create-project", compact('types'));
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        $project = Project::create([
            "name"=>$data["name"],
            "agency"=>$data["agency"],
            "decription"=>$data["decription"],
            "publish_date"=>$data["publish_date"],
            "completed"=>$data["completed"],
            "type_id"=>$data["type_id"]
        ]);
        return redirect()->route("show", $project->id);
    }
}
