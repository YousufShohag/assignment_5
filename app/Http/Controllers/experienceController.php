<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class experienceController extends Controller
{
    public function workexperiences(){
        $workexperiences = File::json(storage_path('data/workexpriences.json'))['workexperiences'];
        $workexperienesHeader = File::json(storage_path('data/workexpriences.json'))['workexperienesHeader'];
        //dd($workexperienesHeader);
        return view('workexperiences',compact('workexperiences','workexperienesHeader'));
    }

    public function workexperiencesdetails($id){
       // return $id;
        $workexperience = null;
        $workexperiencesdetails = File::json(storage_path('data/workexpriences.json'))['workexperiences'];
        $workexperienesHeaderDetails = File::json(storage_path('data/workexpriences.json'))['workexperienesHeaderDetails'];
       // dd($workexperiencesdetails);

       foreach ($workexperiencesdetails as $item) {
        if ($item['id'] == $id) {
            //dd($item);
            $workexperience = $item;
        }
       }

        return view('workexperiencedetail' , compact('workexperience','workexperienesHeaderDetails'));
    }
}