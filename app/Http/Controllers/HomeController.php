<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('welcome')->with(compact('about'));
    }
}
