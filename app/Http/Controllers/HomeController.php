<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use PhpParser\Node\Expr\FuncCall;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function view()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = new Doctor();
                $doctors = $doctor::all();
                return view('user.home', compact('doctors'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function redirectPage()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            return view('user.home', compact('doctors'));
        }
    }
    public function appointment(Request $req)
    {
        $appoint = new Appointment();
        $appoint->name = $req['name'];
        $appoint->email = $req['email'];
        $appoint->date = $req['date'];
        $appoint->doctor = $req['doctor'];
        $appoint->phone = $req['number'];
        $appoint->message = $req['message'];
        $appoint->status = 'In Progress';
        if (Auth::id()) {
            $appoint->user_id = Auth::user()->id;
        }
        $appoint->save();
        return redirect()->back()->with('msg','Your appointment is successfully send, we contact you soon...!');
    }
    public function myappoitment(){
        $id=Auth::id();
        $appointments=Appointment::where('user_id',$id)->get();
     return view('user.myappointment',compact('appointments'));   
    }
}
