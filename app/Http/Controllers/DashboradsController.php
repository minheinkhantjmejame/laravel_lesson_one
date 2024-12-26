<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradsController extends Controller
{
    public function index(){
        $hay = "hay hay";
        $getyear = 2024;
        return view('layouts/index',compact('hay',"getyear"));
    }
}
