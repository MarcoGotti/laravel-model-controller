<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        //$movies = Movie::all();   compact('movies')
        //dd($movies);
        return view('home', ['movies' => Movie::all()]);
    }
}
