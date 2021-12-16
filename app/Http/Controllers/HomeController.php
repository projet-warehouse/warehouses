<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
>>>>>>> rod90
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $user_type=Auth::user()->user_type;

            if($user_type == 'ADMIN'){
                return view('admin.dashboard');
            }
            else{
                return view('visitor.myaccount');
            }
        }






=======
    public function index()
    {
        $role=Auth::user()->role;

        if ($role == '1') {
           return View('admin/dashboard');
        }

        else{
            return View('visitor/myaccount');
        }
    }
>>>>>>> rod90
}
