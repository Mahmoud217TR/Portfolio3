<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
