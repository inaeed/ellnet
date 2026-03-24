<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = 'Della Desriani';
        $pekerjaan = 'Pembisnis';
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}