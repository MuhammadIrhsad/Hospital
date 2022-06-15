<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function view(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function redirectPage(){
        return view('user.home');
    }
}
