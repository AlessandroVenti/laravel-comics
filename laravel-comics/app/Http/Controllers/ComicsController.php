<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function comicsFunction() {
        return view('pages.comics');
    }
};
