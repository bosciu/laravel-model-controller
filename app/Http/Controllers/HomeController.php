<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        //Per poter fare una query e filtrare i dati si può fare anche una variabile a parte
        /* $query = Movie::where('title', 'LIKE', 'I%');
        @dump($query->toSql());
        @dump($query->getBindings());
        $movies = $query->get(); */
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }
}
