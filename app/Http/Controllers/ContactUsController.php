<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_contactu;

class ContactUsController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_contactu;
        $data->first_name=$req->fname;
        $data->last_name=$req->lname;
        $data->email=$req->email;
        $data->feedback=$req->feedback;
        
        $data->save();
        return redirect('contactus');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_contactu::all();
        return view('admin/contact_us',['contactus'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_contactu::find($id);
        $data->delete();
        return redirect('contact_us');
        // echo "Delete Sucessfull";
    }
}
