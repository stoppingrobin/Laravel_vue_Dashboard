<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $userType = Auth::user()->userType;

        if(isset($userType)){
            if ($userType == "0"){
                return view("admin.home");
            }
            else{
                return view("dashboard");
            }
        }else{
            return view('register');
        }

    }
}
