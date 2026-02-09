<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generateText extends Controller
{
    protected $data;
    protected $error;

    public function __construct() {
        define('DEFAULT_SIZE', 10);
    }

    public function index($type, $size = DEFAULT_SIZE) {
        if ($type == 'para') {
            $data = fake()->paragraph($size);

            if ($size > 1000) {
                $error = "Size Requested exceeds limits of server";
                return [
                    'response' => $error,
                ];
            }
            return [
                'type' => $type,
                'size' => $size,
                'response' => $data
            ];
        }

        if ($type == 'line') {
            $data = fake()->sentence($size);
            return [
                'type' => $type,
                'size' => $size,
                'response' => $data
            ];
        }

        $error = 'No Such Parameters exist';
        return [
            'error' => $error
        ];
    }

    public function provideUsage() {
        return view('api.usage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
