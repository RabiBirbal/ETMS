<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_aboutu;

class AboutusController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_aboutu;
        $data->first_paragraph=$req->para1;
        $data->second_paragraph=$req->para2;
        $data->esewa_id=$req->eSewa;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->secondary_email=$req->semail;
        
        $data->save();
        return redirect('aboutus_page');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_aboutu::all();
        return view('admin/aboutus_page',['aboutus'=>$data]);
    }

    function updateData(){
    	$data= Tbl_aboutu::find(1);
    	return view('admin/aboutus_page',['aboutus'=>$data]);
    }

    function editData(Request $req){
    	$data= Tbl_aboutu::find(1);
    	$data->first_paragraph=$req->para1;
        $data->second_paragraph=$req->para2;
        $data->esewa_id=$req->eSewa;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->secondary_email=$req->semail;
    	$data->save();
    	return redirect('aboutus_page');
    }
}
