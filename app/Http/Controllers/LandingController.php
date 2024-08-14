<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Testimoni;

class LandingController extends Controller
{
    public function index()
    {
        $gallery = Gallery::latest()->limit(3)->get();
        $news = News::latest()->limit(3)->get();
        $testimoni = Testimoni::latest()->limit(3)->get();
        return view('index', compact('gallery', 'news', 'testimoni'));
    }

    public function visi()
    {
        return view('landing.visi_misi');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function news()
    {
        $news = News::latest()->paginate(6);
        return view('landing.news', compact('news'));
    }

    public function news_search(Request $request)
    {
        $news = News::where('title', 'like', '%' . $request->search . '%')->paginate(6);
        return view('landing.news', compact('news'));
    }

    public function detail_news($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('landing.detail_news', compact('news'));
    }

    public function history()
    {
        return view('landing.history');
    }

    public function gallery()
    {
        $gallery = Gallery::latest()->paginate(4);
        return view('landing.gallery', compact('gallery'));
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function online()
    {
        return view('landing.online');
    }

    public function public()
    {
        return view('landing.public');
    }

    public function legalisir()
    {
        return view('landing.legalisir');
    }

    public function akreeditasi()
    {
        return view('landing.akreditasi');
    }

    public function academic()
    {
        return view('landing.academic');
    }
}
