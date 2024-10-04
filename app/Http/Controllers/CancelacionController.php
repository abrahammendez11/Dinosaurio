<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CancelacionController extends Controller
{
    public function create()
    {
    return view("forms.cancelacion");
    }
}
