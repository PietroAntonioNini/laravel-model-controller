<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        //preleviamo i film dalla tabella movie
        $movies = Movie::all();

        // dd($movies);

        return view("home");
    }
}
