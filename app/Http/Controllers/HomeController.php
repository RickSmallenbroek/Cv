<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     * @author Rick Smallenbroek <rick.smallenbroek@nugtr.nl>
     */
    public function index()
    {
        $about = About::all();
        return view('welcome')->with(compact('about'));
    }
}
