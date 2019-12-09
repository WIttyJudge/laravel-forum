<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Returns the about us page.
     *
     */
    public function index()
    {
        return view('about.index');
    }
}
