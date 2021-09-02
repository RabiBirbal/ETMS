<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_news;

class NewsController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_news;
        $data->title=$req->title;
        $data->content=$req->content;
        
        $data->save();
        return redirect('news_detail');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_news::all();
        return view('admin/news_detail',['news'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_news::find($id);
        $data->delete();
        return redirect('news_detail');
        // echo "Delete Sucessfull";
    }

    function updateData($id){
    	$data= Tbl_news::find($id);
    	return view('edit',['news'=>$data]);
    }

    function editData(Request $req){
    	$data= Tbl_news::find($req->id);
    	$data->title=$req->title;
    	$data->content=$req->content;
    	$data->save();
    	return redirect('news_detail');
    }
}
