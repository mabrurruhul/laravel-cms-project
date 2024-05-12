<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');
    }
    public function fashion(){
        return view('fashion');
    }
    public function politics(){
        return view('politics');
    }
    public function lifestyle(){
        return view('lifestyle');
    }
    
}
