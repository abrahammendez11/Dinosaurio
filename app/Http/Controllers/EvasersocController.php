<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EvasersocController extends Controller
{
    public function create()
    {
    return view("forms.evasersoc");
    }
}
