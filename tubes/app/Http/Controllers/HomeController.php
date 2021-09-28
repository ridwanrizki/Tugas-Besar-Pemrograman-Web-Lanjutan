<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Blog;
use App\Models\Celebrity;

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
        $movies = Movie::orderBy('release_date','desc')->get();
        $movies_rat = Movie::orderBy('rating','desc')->get();
        $blogs = Blog::paginate(4);
        $celebs = Celebrity::paginate(4);
        return view("home", compact('movies', 'movies_rat', 'blogs','celebs'));
    }
}
