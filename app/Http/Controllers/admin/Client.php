<?php

namespace App\Http\Controllers\admin;
use App\area;
use App\Client2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Client extends Controller
{
    //客户添加
    function create(){
        $city=area::where('pid',0)->get();
        return view('client.create',['city'=>$city]);
    }

    //客户添加执行
    function create_do(){
        $validatedData = request()->validate([
            'admin_name'   => 'required|min:2|max:8|alpha_dash',
            'client_name'  => 'required|min:2|max:8|alpha_dash',
            'client_short' => 'required|min:2|max:6|alpha_dash',
            'client_coding'=> 'required|numeric',
            'tel'          => 'digits:11',
            'email'        => 'email'
        ],[
            'admin_name.required'=>'销售员不能为空',
            'admin_name.min'=>'销售员格式为:2~8位中文,数字,字母,下划线',
            'admin_name.max'=>'销售员格式为:2~8位中文,数字,字母,下划线',
            'admin_name.alpha_dash'=>'销售员格式为:2~8位中文,数字,字母,下划线',
            'client_name.required'=>'客户不能为空',
            'client_name.min'=>'客户格式为:2~8位中文,数字,字母,下划线',
            'client_name.max'=>'客户格式为:2~8位中文,数字,字母,下划线',
            'client_name.alpha_dash'=>'客户格式为:2~8位中文,数字,字母,下划线',
            'client_short.required'=>'客户简称不能为空',
            'client_short.min'=>'客户简称格式为:2~6位中文,数字,字母,下划线',
            'client_short.max'=>'客户简称格式为:2~6位中文,数字,字母,下划线',
            'client_short.alpha_dash'=>'客户简称格式为:2~6位中文,数字,字母,下划线',
            'client_coding.required'=>'客户编号不能为空',
            'client_coding.numeric'=>'客户编号必须为数字',
            'email.email'=>'邮箱格式不正确',
            'tel.digits'=>'手机号不正确'
        ]);
        $data=request()->except('_token');
        $res=client2::create($data);
        if($res){
            return redirect('client/index');
        }else{
            echo '添加失败';
        }
    }

    //列表
    function index(){
        $client_coding=request()->client_coding;
        $where=[];
        if($client_coding){
            $where['client_coding']=['client_coding'=>$client_coding];
        }
        $client_info=client2::where($where)->paginate(2);
        $query=request()->all();
        return view('client/index',['client_info'=>$client_info,'query'=>$query]);
    }

    function del($client_id){
        $res=client2::where('client_id',$client_id)->delete();
        if($res){
            return redirect('client/index');
        }else{
            echo '删除失败';
        }
    }
}
