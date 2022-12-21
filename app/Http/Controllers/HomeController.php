<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){

        $courses =  Course::where('status','3')->get()->take(8);
        //->latest('id')

        //return Course::find(2)->rating;
        return view('welcome',compact('courses'));
    }
}

