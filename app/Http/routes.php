<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', 'IndexController@index');
Route::get('/test', ['as' => 'porfile', function(){
    echo route('porfile');//输出结果：http://localhost:1024/test
    //使用路由重命名是为了方便获取地址，如 $a = route('porfile'); 将这个路由地址赋值给变量a
    return 'route rename ok';
}]);

// Route::get('/user', 'User\UserController@hello');
Route::get('/user', ['as' => 'abc', 'uses' => 'User\UserController@hello']);//这里的as和uses是固定的关键字
//或者
Route::get('/user', 'User\UserController@hello') -> name('abc');


// Route::get('/user/login', 'User\UserController@login');
// Route::get('/user/index', 'User\UserController@index');

//使用路由群组的方式
// Route::group(['prefix' => 'user'], function(){
//     Route::get('login', 'User\UserController@login');
//     Route::get('index', 'User\UserController@index');
// });

//进一步简化
Route::group(['prefix' => 'user', 'namespace' => 'User'], function(){
    Route::get('login', 'UserController@login');
    Route::get('index', 'UserController@index');
});


// 资源路由（只需说明用哪个控制器，不需要写出具体使用哪个函数）
Route::resource('article', 'ArticleController');


// session的简单使用
// Route::get('aaa', function(){
//     echo session(['pwd' => 'hello']);
//     return 'heihei';
// });
// 先访问/aaa，将‘hello’写入到session中的pwd中
// 然后访问/bbb，输出pwd的值
// 可以使用 session(['pwd' => null]); 清除session中的pwd
// Route::get('bbb', function(){
//     echo session('pwd');
//     return '1234';
// });

// 中间件
// 顾名思义，一般用于需要登入才能访问的页面，比如要访问B页面，必须先访问A页面(写入session等)，
// 使用中间件需要在 app/Http/Kernel.php 中编写 routeMiddleware 中的内容
// 使用命令创建一个叫AdminLogin的中间件 php artisan make:middleware AdminLogin
// 此时会在Http/Minddleware 目录下生成一个AdminLogin.php文件
// 下面的 admin.login 是在 Kernel.php 中自定义的名字
Route::group(['Minddleware' => ['web', 'admin.login']], function(){
    Route::get('aaa', function(){
        echo session(['pwd' => 'hello']);
        return 'heihei';
    });
    Route::get('bbb', function(){
        // $pwd => session('pwd');//竟然不能这样赋值的！！！？？？？
        $pwd = session('pwd');//正确赋值
        if($pwd){//如果存在pwd，也就是先访问过aaa，已经将hello写入到session中的pwd中
            return view('welcome');
        }else{
            return 'you not view aaa';
            // return rediret('/login.php');//跳转到登录界面
        };
    });
});

// 使用自己写的视图
// Route::get('myblog', function () {
//     return view('myBlog');//文件在resources/veiws/myBlog.blade.php
// });
// 当然，最好写成控制器的形式
Route::get('myblog', 'User\UserController@showBlog');




Route::get('study', 'StudyController@study');

Route::get('moban', 'StudyController@moban');

