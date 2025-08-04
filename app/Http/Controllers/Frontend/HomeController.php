<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Models\Hero; // Hero modelini ekle
use App\Models\Services;


class HomeController extends Controller
{
    public function index()
    {
       


    $hero = Hero::first();
    $services = Services::first(); 
    $career = Career::first(); 

    return view('frontend.home', compact('hero', 'services', 'career'));


    }
}
