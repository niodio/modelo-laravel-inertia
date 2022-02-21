<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = 'Adelson Inácio';
        return Inertia::render('Home', ['user' => $user]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function register()
    {
        return Inertia::render('Register');
    }

    public function store(Request $request)
    {
        $user = $request->name;

        // redirect


        return redirect()->route('home', ['user' => $user]);
        // return Inertia::render('Home', ['user' => $user]);
    }
}
