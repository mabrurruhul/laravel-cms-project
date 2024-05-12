<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $data = News::all();
        return view('home',compact('data'));
    }
}
