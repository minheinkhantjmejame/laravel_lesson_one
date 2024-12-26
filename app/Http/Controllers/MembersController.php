<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        $header = "This is my first template with data passing";

        $students = [
            "honey nway oo",
            "mandalay",
            "091212121212"
        ];

        $hay = "Hay Hay";

        return view('members/index',compact('header','students','hay'));
    }
}
