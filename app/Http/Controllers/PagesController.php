<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome friends to Laravel APP";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title="About Us";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        //must replace with API data
        $data = array(
            'title' => 'Services',
            'services' => [
                ['name'=>'Graphic design', 'score'=> 5],
                ['name'=>'Web design', 'score'=> 5],
                ['name'=>'Programming', 'score'=> 5],
                ['name'=>'Mobile development', 'score'=> 3],
                ['name'=>'Web development', 'score'=> 5],
                ['name'=>'Desktop development', 'score'=> 3],
                ['name'=>'API programming', 'score'=> 5],
                ['name'=>'Cross platform development', 'score'=> 3],
                ['name'=>'Consultancy', 'score'=> 4]
                ]
        );
        return view('pages.services')->with($data);
    }
}
