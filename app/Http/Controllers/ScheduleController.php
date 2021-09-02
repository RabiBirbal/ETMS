<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_schedule;
use App\Models\Tbl_tournament;

class ScheduleController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_schedule;
        $data->matchday=$req->matchday;
        $data->date=$req->date;
        $data->time=$req->time;
        $data->map=$req->map;
        
        $data->save();
        return redirect('schedule_detail');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_schedule::all();
        return view('admin/schedule_detail',['schedules'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_schedule::find($id);
        $data->delete();
        return redirect('schedule_detail');
        // echo "Delete Sucessfull";
    }

    function updateData($id){
    	$data= Tbl_schedule::find($id);
    	return view('edit',['schedules'=>$data]);
    }

    function editData(Request $req){
    	$data= Tbl_schedule::find($req->id);
    	$data->matchday=$req->matchday;
    	$data->date=$req->date;
    	$data->time=$req->time;
    	$data->map=$req->map;
    	$data->save();
    	return redirect('schedule_detail');
    }
}
