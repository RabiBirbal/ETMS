<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_sponsor;

class SponsorController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_sponsor;
        $data->full_name=$req->fname;
        $data->email=$req->email;
        $data->url=$req->url;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->sponsorship_type=$req->type;
        $data->fee=$req->fee;
        $data->eSewa=$req->esewa;

        if($req->hasfile('banner') && $req->hasfile('payment')){
            $file=$req->file('banner');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $data->banner=$filename;

            $file1=$req->file('payment');
            $extension=$file1->getClientOriginalExtension(); //getting image extension
            $filename1=time().'1.'.$extension;
            $file1->move('upload/images/',$filename1);
            $data->payment_ss=$filename1;
        }
        else{
            return $req;
            $data->banner='';
            $data->payment_ss='';
        }

        // if($req->hasfile('banner')){
        //     $file=$req->file('banner');
        //     $extension=$file->getClientOriginalExtension(); //getting image extension
        //     $filename=time().'.'.$extension;
        //     $file->move('upload/images/',$filename);
        //     $data->banner=$filename;
        // }
        // else{
        //     return $req;
        //     $data->banner='';
        // }

        // if($req->hasfile('payment')){
        //     $file=$req->file('payment');
        //     $extension=$file->getClientOriginalExtension(); //getting image extension
        //     $filename=time().'1.'.$extension;
        //     $file->move('upload/images/',$filename);
        //     $data->payment_ss=$filename;
        // }
        // else{
        //     return $req;
        //     $data->payment_ss='';
        // }
        $data->save();
        return redirect('sponsor');
        echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_sponsor::all();
        return view('admin/sponsors_detail',['sponsors'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_sponsor::find($id);
        $data->delete();
        return redirect('sponsors_details');
        // echo "Delete Sucessfull";
    }
}
