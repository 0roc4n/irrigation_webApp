<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DripController extends Controller
{
    public function index(){
        return view('dripsystem');
    }
}
