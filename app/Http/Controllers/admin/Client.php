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
        $client_info=client2::paginate(2);
        return view('client/index',['client_info'=>$client_info]);
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
