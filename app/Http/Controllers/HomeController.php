<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tours = Tour::with('location')->latest()->take(6)->get(); // Muestra los 6 tours más recientes
        return view('home', compact('tours'));
    }
}
