<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_result;

class ResultController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_result;
        $data->matchday=$req->matchday;
        $data->team_name=$req->teamName;
        $data->rank=$req->rank;
        $data->place_points=$req->placePoints;
        $data->kills=$req->kills;
        $data->kills_points=$req->killsPoints;
        $data->total_points=$req->totalPoints;

        $data->save();
        return redirect('result_detail');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_result::all();
        return view('admin/result_detail',['results'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_result::find($id);
        $data->delete();
        return redirect('result_detail');
        // echo "Delete Sucessfull";
    }

    function updateData($id){
    	$data= Tbl_result::find($id);
    	return view('edit',['results'=>$data]);
    }

    function editData(Request $req){
    	$data= Tbl_result::find($req->id);
    	$data->matchday=$req->matchday;
    	$data->team_name=$req->teamName;
    	$data->rank=$req->rank;
    	$data->place_points=$req->placePoints;
    	$data->kills=$req->kills;
    	$data->kills_points=$req->killsPoints;
    	$data->total_points=$req->totalPoints;
    	$data->save();
    	return redirect('result_detail');
    }
}
