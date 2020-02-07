<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    protected $primaryKey="id";

    // 关联到模型的数据表
    protected $table = 'user';

    // 可以被批量赋值的属性
    protected $guarded = [];//黑名单

    // 表明模型是否应该被打上时间戳
    public $timestamps =false;
}
