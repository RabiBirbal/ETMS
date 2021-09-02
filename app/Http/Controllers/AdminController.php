<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_admin;

class AdminController extends Controller
{
    function saveData(Request $req){
        $admin=new Tbl_admin;
        $admin->username=$req->uname;
        $admin->password=md5($req->pswd);
        $admin->email=$req->email;
        
        if($req->hasfile('profilePic')){
            $file=$req->file('profilePic');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $admin->profile_pic=$filename;
        }
        else{
            return $req;
            $admin->profile_pic='';
        }
        $admin->save();
        return redirect('admin_detail');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_admin::all();
        return view('admin/adminDetail',['admins'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_admin::find($id);
        $data->delete();
        return redirect('admin_detail');
        // echo "Delete Sucessfull";
    }

    function updateData($id){
    	$data= Tbl_admin::find($id);
    	return view('edit',['admins'=>$data]);
    }
    function editData(Request $req){
    	$data= Tbl_admin::find($req->id);
    	$data->username=$req->uname;
    	$data->password=md5($req->pswd);
    	$data->email=$req->email;
    	$data->save();
    	return redirect('admin_detail');
    }
}
