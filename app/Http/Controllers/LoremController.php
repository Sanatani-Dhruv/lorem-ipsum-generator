<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremController extends Controller
{
    private $request;
    private $output;

    function __construct() {

    }

    public function showHome() {
        $output = fake()->sentence();


        return view('home', [
            'output' => $output
        ]);
    }
}
