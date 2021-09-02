<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_homepage;
use App\Models\Tbl_news;
use App\Models\Tbl_tournament;
use App\Models\Tbl_schedule;

class IndexController extends Controller
{
	function showData(){
        // return Tbl_admin::all();
        $homepage=Tbl_homepage::all();
        $news=Tbl_news::all();
        $tournaments=Tbl_tournament::all();
        $schedules=Tbl_schedule::all();
        return view('index',compact("news","homepage","tournaments","schedules"));

    }
}
