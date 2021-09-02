<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_tournament;

class CreateTournamentController extends Controller
{
    function saveData(Request $req){
        $data=new Tbl_tournament;
        $data->name=$req->name;
        $data->first_paragraph=$req->first_Para;
        $data->second_paragraph=$req->second_Para;
        $data->start_date=$req->sDate;
        $data->reg_end_date=$req->reDate;
        $data->end_date=$req->eDate;
        $data->pool_prize=$req->poolPrize;
        $data->first_prize=$req->first_prize;
        $data->second_prize=$req->second_prize;
        $data->third_prize=$req->third_prize;
        $data->highest_killer_prize=$req->killerPrize;
        $data->status=$req->status;

        
        if($req->hasfile('banner')){
            $file=$req->file('banner');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename=time().'.'.$extension;
            $file->move('upload/images/',$filename);
            $data->banner=$filename;
        }
        else{
            return $req;
            $data->banner='';
        }
        $data->save();
        return redirect('tournament_detail');
        // echo "Successfully user registered";
    }

    function showData(){
        // return Tbl_admin::all();
        $data=Tbl_tournament::all();
        return view('admin/tournament_detail',['tournaments'=>$data]);
    }

    function deleteData($id){
        $data=Tbl_tournament::find($id);
        $data->delete();
        return redirect('tournament_detail');
        // echo "Delete Sucessfull";
    }

    function updateData($id){
    	$data= Tbl_tournament::find($id);
    	return view('admin/tournament_edit',['tournaments'=>$data]);
    }
}
