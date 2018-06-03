<?php

namespace App\Http\Controllers\User;//这个文件的位置

use App\Http\Controllers\Controller;//因为后面要继承它所以这里要将它引入进来

class UserController extends Controller {
    public function hello(){
        echo "OK";
    }
    public function login(){
        echo "login page";
    }
    public function index(){
        return "user index pages";
    }

    public function showBlog(){
        $name = 'zhong';
        // return view('myBlog');//文件在resources/veiws/myBlog.blade.php
        //使用with来传递参数，第一个name是本函数中的变量，第二各是在视图文件中要使用的变量
        // return view('myBlog') -> with('name', $name);
        //若有多个参数要传递，可到后面在加个with
        //return view('myBlog') -> with('name', $name) -> with('age', $age);

        // 传递多个参数
        $myData = [
            "sid" => "2018",
            "email" => "test@qq.com"
        ];
        // return view('myBlog', $myData);

        $title = "firstblog"; 
        return view('myBlog', compact('myData', 'title'))

    }
}
