<?php

namespace App\Http\Controllers\admin;
use App\Contact2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    function index(){
    	return view('contact/create');
    }

	function create(){
		$data=request()->except('_token');
		$res=Contact2::create($data);
		if($res){
			return redirect('contact/list');
		}
	}

	function list(){
		$data=Contact2::paginate(2);
		return view('contact/list',['data'=>$data]);
	}    

	function delete($contact_id){

		$res=Contact2::where('contact_id',$contact_id)->delete();
		if($res){
			return redirect('contact/list');
		}
	}


}
