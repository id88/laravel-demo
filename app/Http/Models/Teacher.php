<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //强制使用Students表
    protected $table = "Students";

    //禁用时间戳（更新数据时，laravel画蛇添足加了个update_at属性）
    public $timestamps = false;
}
