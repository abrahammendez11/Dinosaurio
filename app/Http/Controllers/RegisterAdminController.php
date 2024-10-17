<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{
    public function create()
    {
    return view("authadmin.registeradmin");
    }
}
