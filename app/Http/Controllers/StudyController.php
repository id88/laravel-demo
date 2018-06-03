<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Models\Teacher;


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

    public function dbtest(){
        // $users = DB::table('students') -> get();
        // 这里的students是数据库中的表名，数据库的一些信息在.env文件中配置
        //引入 use Illuminate\Support\Facades\DB;
        // dd($users);

        //使用where带条件获取数据
        // $iduser = DB::table('students') -> where('sid', 2) -> get();
        // dd($iduser);

        //使用模型(先要引入) use App\Http\Model\Teacher;
        $te = Teacher::where('sid', 1) -> get();
        dd($te);
    }
}
