<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremController extends Controller
{
    private $request;

    function __construct() {

    }

    public function showHome() {
        return view('home');
    }
}
