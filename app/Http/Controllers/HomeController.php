<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        dump(Movie::all());
        return view('homepage');
    }
}
