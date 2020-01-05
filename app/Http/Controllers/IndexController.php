<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class IndexController extends Controller
{
    public function index()
    {
        $places = Place::get();
        return view('index', compact('places'));
    }

    public function detail($id)
    {
        $places = Place::find($id);
        return view('detail', compact('places'));
    }
}
