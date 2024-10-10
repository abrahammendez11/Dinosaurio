<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Http\Controls\diahoy; 

class TimeController extends Controller
{
    public Function create(diahoy $diahoy)
    {
        $now = Carbon::now();
    }
}
