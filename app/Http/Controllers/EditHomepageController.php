<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_homepage;

class EditHomepageController extends Controller
{
    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_homepage::all();
        return view('index',['homepage'=>$data]);
    }

    function showData1(){
        // return Tbl_admin::all();
        $data=Tbl_homepage::all();
        return view('admin/homepage',['homepage'=>$data]);
    }

    function editBg(Request $req){
    	$data= Tbl_homepage::find(1);
    	if($req->hasfile('bg_img')){
            $file=$req->file('bg_img');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $data->background_img=$filename;
        }
        else{
            return $req;
            $data->background_img='';
        }
    	$data->save();
    	return redirect('edit_homepage');
    }

    function editPara(Request $req){
    	$data= Tbl_homepage::find(1);
        if($req->hasfile('para_img')){
            $file=$req->file('para_img');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $data->parallax_img=$filename;
        }
        else{
            return $req;
            $data->parallax_img='';
        }
    	$data->save();
    	return redirect('edit_homepage');
    }
}
