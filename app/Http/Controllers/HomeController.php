<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $venue = Venue::get();
        return view('home')->with('venue', $venue);
    }
}
