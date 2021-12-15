<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user_type=Auth::user()->user_type;

            if($user_type == 'ADMIN'){
                return view('admin.dashboard');
            }
            else{
                return view('visitor.myaccount');
            }
        }






}
