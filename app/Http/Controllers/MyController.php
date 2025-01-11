<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MyController extends Controller
{
    public function index(Request $event){
        return Inertia::render("Home");
    }
}
