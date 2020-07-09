<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallangeController extends Controller
{
    //
    
    public function index() {
        $lessons = [
            "title" => 'Gravity',
            'chapter' => "Chapter 2",
            'duration' => 2,
        ];
        return view('challanges.index', $lessons);
    } 
    public function create() {
     return view('challanges.create');   
    }
}
