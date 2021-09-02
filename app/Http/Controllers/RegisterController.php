<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_user;

class RegisterController extends Controller
{
    function saveData(Request $req){
        $user=new Tbl_user;
        $user->first_name=$req->fname;
        $user->middle_name=$req->mname;
        $user->last_name=$req->lname;
        $user->username=$req->uname;
        $user->email=$req->email;
        $user->password=md5($req->pswd);
        $user->address=$req->address;
        $user->phone=$req->phone;

        if($req->hasfile('profilePic')){
            $file=$req->file('profilePic');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $user->profile_pic=$filename;
        }
        else{
            return $req;
            $user->profile_pic='';
        }
        $user->save();
        return redirect('register');
        // echo "Successfully user registered";
    }

    function showData(){
        // return tbl_user::all();
        $data=Tbl_user::all();
        return view('admin/users',['users'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_user::find($id);
        $data->delete();
        return redirect('users');
        // echo "Delete Sucessfull";
    }
}
