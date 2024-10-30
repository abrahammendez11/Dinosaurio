<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class informacioncompController extends Controller
{
    public function create()
    {
    return view("forms.informacioncomp");
    }
}
