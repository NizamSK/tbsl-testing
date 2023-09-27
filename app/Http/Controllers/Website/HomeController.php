<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function lysaght() {

        return view('website.lysaght');

    }

    function durashine() {

        return view('website.durashine');

    }
}
