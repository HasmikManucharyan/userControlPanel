<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public function locations (){
    	$locations = DB::table('locations')->get();    	
    	return $locations;
    }
    public function ages (){
    	$ages = DB::table('agegroups')->get();   	
    	return $ages;
    }
}
