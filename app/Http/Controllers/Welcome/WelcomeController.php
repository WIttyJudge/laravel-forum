<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $threadCount = Thread::count();

        return view('welcome', compact('threadCount'));
    }
}
