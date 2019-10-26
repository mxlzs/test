<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client2 extends Model
{
    public $primaryKey ='client_id';
        /**
    * 表明模型是否应该被打上时间戳
    ** @var bool
    */
    public $timestamps = false;

        /**
    * 可以被批量赋值的属性. ** @var array
    */
    protected $fillable = ['admin_name','is_share','client_name','client_coding','client_short','tel','email','region','address','client_source','cource_type','sales','remark'];
    
    protected $table='client';
}
