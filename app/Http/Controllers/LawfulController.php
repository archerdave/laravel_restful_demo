<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawfulController extends Controller
{
    /**
     * GET /lawful/create
     */
    public function create()
    {
        return view('law/create');
    }


    /**
     * PUT /lawful/update
     */
    public function update()
    {
        return view('law/update');
    }
}