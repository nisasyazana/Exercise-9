<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class WelcomeController extends Controller
{
    public function list()
    {
        $count = Students::count();
        $last = Students::latest()->first();
        return view('welcome', compact('count','last'));
    }

}
