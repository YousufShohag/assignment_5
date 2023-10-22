<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function showProjects(){
        $projects = File::json(storage_path('data/projects.json'))['projects'];
        $projectsHeader = File::json(storage_path('data/projects.json'))['projectsHeader'];
    //$result = File::json_decode(file_get_contents(storage_path("data/welcome.json")));
   //dd($projects);
    // dd($result);projects
    return view('projects', compact('projects' , 'projectsHeader'));
    }

    public function projectDetails(int $id){
        $project = null;
        $projects = File::json(storage_path('data/projects.json'))['projects'];
        $projectsHeaderDetails = File::json(storage_path('data/projects.json'))['projectsHeaderDetails'];
       // dd($projectsHeaderDetails);
        foreach($projects as $item){
            if($item['id'] == $id){
                $project = $item;
            }
        }
        return view('projectDetails', compact('project' , 'projectsHeaderDetails'));
    }


}