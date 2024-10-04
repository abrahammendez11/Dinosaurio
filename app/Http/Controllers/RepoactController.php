<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RepoactController extends Controller
{
    public function create()
    {
    return view("forms.repoact");
    }
}
