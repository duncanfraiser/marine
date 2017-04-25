<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Fleet;
use App\Grocery;
use App\Parts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::latest()->take(3)->get();
        $fleet = Fleet::latest()->first();
        $grocery = Grocery::latest()->first();
        $parts = Parts::latest()->first();


        return view('home.index', compact('news', 'fleet', 'grocery', 'parts'));
    }
}
