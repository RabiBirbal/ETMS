<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentRegisterController extends Controller
{
    function getData(Request $req){
    	$req->validate([
    		'uname'=>'required',
    		'email'=>'required',
    		'tname'=>'required',
    		'leader'=>'required',
    		'member1'=>'required',
    		'member2'=>'required',
    		'member3'=>'required',
    		'phone'=>'required | max:10 | min:10'
    	]);
    	return $req->input();
    }
}
