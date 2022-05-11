<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaoticController extends Controller
{
    /**
     * PUT /chaotic/create
     */
    public function create()
    {
        return view('chaos/create');
    }


    /**
     * GET /chaotic/update
     */
    public function update()
    {
        return view('chaos/update');
    }
}