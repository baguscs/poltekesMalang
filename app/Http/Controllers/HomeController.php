<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Testimoni;
use App\Models\Academic;

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
        $news = News::all()->count();
        $gallery = Gallery::all()->count();
        $testimoni = Testimoni::all()->count();
        $academic = Academic::all()->count();
        return view('apps.home', compact('news', 'gallery', 'testimoni', 'academic'));
    }
}
