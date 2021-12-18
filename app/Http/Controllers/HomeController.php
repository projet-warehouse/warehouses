<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if ($role == '1') {
           return View('admin/dashboard');
        }

        else{
            return View('visitor/customer/index_myaccount');
        }
    }
}
