<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
        public function index(){

            // dd("hello sir");// dump and die ko a paw mar call yin out ka har twae a lote ma lote tot bu
            
            $data['employeedatas'] =[
            "name"=>"Aung Ko Ko",
            "email"=>"aungkoko@gmail.com",
            "phone"=>"09123455"];

            // dd($employeedatas);// data ko phaw pya pay del dd(dump and die) ka
        

            return view('employees/index',$data);
        }

    

        public function passingdataone(){
            $greeting = "Have a nice day";
            $hifi = "Thanks sir";

            $employees = [
                'Honey Nway Oo',
                'Mandalay',
                '09222222'
            ];

            return view("employees/dataone",['greet'=>$greeting,'hi'=>$hifi,'staffs'=>$employees]);
        }

        public function passingdatatwo(){
            $greeting = "Have a good day";
            $hifi = "Regards sir";

            $employees = [
                'Honey Nway Oo',
                'Mandalay',
                '09222222'
            ];

            return view("employees/datatwo")->with('greet',$greeting)->with('hi',$hifi)->with('staffs',$employees);
        }


        public function passingdatathree(){
            $greeting = "Have a good day";
            $hifi = "Regards sir";

            $employees = [
                'Honey Nway Oo',
                'Mandalay',
                '09222222'
            ];
            // compact thone pe data call ll ya tel 
            // return view("employees/datathree",compact("greeting","hifi","employees"));
            return view("employees/datathree")->with(compact("greeting","hifi","employees"));
        }

        public function show(){
            $data['employees'] = [
                'Min Nway Oo',
                'Mandalay',
                '09111111'
            ];

            return view('employees/show',$data);
        }

        public function edit(){
            $data['employees'] = [
                'Honey Nway Oo',
                'Mandalay',
                '09111111'
            ];

            return view('employees/edit',compact('data'));

        }
        
        public function update(){

            $data['employees'] = [
                'Honey Nway Oo',
                'Mandalay',
                '091111111'
            ];
            
            // return view('employees/update',compact('data'));

            return view('employees/update',['employees'=>$data['employees']]);

        }
        


}
