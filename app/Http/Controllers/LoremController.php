<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremController extends Controller
{
    private $request;
    private $output;
    private $DEFAULT_SIZE;

    function __construct() {
        $this->DEFAULT_SIZE = 5;
    }

    public function showHome() {
        $output = fake()->sentence();


        return view('home', [
            'output' => $output
        ]);
    }

    public function withJS() {
        return view('withJs', [
            'size' => $this->DEFAULT_SIZE
        ]);
    }
}
