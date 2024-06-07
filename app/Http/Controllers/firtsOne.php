<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firtsOne extends Controller
{
    //
    public function index(){
        $name = 'JOE';
        return view('index', compact('name'));
    }
}
