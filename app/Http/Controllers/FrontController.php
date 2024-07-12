<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function prueba()
    {
        return view('vistaprueba');
    }
}

