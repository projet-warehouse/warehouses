<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index() {
        return View('admin/pages/newcontroller');
    }
}
