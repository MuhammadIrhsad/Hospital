<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminHomeController extends Controller
{
    public function add_view(){
        return view('admin.add_doctor');
    }
    public function upload(Request $req){
        $image=$req->doctor_image;
        $name=$req->name;
        $phone=$req->phone;
        $speciality=$req->speciality;
        $room=$req->room;

        print_r($req->all());
        die;

    }
}
