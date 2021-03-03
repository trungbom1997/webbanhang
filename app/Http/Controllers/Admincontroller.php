<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use session;
use Illuminate\Support\Facades\Redirect;
session_start();


class Admincontroller extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(){
        return view('admin.login');
    }


    public function loginadmin(Request $request){
        $ad_email = $request->email;
        $ad_pass = md5($request->password);

        $result = DB::table('tbl_admin')->where('admin_email',$ad_email)->where('admin_password',$ad_pass)->first();
        

        if($result->role === '1'){
             return redirect::to('/admin');
        }else{
            return redirect::to('/');
        }

       
    }

    public function add_category(){
        return view('admin.category');
    }

    public function SaveCategory(Request $request){
        $data = array();
        $data['category_name'] = $request->name;
        $data['category_desc'] = $request->desc;
        $data['category_status'] = $request->status;
        $result = DB::table('tbl_category')->insert($data);
        if($result){
            return redirect::to('/admin');
        }else{

        }

    }
}
