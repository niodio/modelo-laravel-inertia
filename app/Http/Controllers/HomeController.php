<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = 'Adelson Inácio';
        return Inertia::render('Home', ['user' => $user]);
    }
}
