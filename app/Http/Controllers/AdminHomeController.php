<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Doctor;

use function Ramsey\Uuid\v1;

class AdminHomeController extends Controller
{
    public function add_view(){
        return view('admin.add_doctor');
    }
    public function upload(Request $req){
        // $req->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'room' => 'required|email',
        //     'doctor_image' => 'required',
           


        // ]);

        // $image=$req['doctor_image'];
        // $Doctor_image=time().'.'.$image->getClientorginalExtention();
        // $name=$req['name'];
        // $phone=$req
        // ];
        // $speciality=$req->speciality;
        // $room=$req->room;
        $doctor=new Doctor();
        $doctor->name=$req['name'];
        $doctor->phone=$req['phone'];
        $doctor->speciality=$req['speciality'];
        $doctor->room=$req['room'];
        $doc_Image=time().'.'.$req['doctor_image']->getClientoriginalExtension();
        $doc=$req['doctor_image']->move('doctorImage',$doc_Image);
        $doctor->image=$doc;
        $doctor->save();
        // $message="Doctor Added successfully...!";
        // $data=compact('message');
        // print_r($data);
        // die;
       return redirect()->back()->with('message',"Doctor Added Successfully..!");

        

    }
    public function show_appointments(){
        return view('admin.appointments');
    }
    
}
