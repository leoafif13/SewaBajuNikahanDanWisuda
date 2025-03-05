<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController50 extends Controller
{
    public function index()
    {
    //    return view('home');
    //}

    $nama="dino";
    $pekerjaan="programer";
    return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
