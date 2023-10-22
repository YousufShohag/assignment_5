<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $profile = File::json(storage_path('data/welcome.json'))['profile'];
        //$result = File::json_decode(file_get_contents(storage_path("data/welcome.json")));
       // dd($avatar);
        return view('welcome', compact('profile'));
        //return view("welcome");
    }
}
