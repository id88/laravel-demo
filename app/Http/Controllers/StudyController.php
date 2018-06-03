<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudyController extends Controller
{
    public function study(){
        // echo "study";
        return view('study');//文件resources/views/study.blade.php
    }
    
    public function moban(){
        // echo "moban";
        return view('layout');//文件resources/views/layout.blade.php
    }
}
