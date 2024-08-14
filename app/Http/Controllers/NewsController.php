<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('apps.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
            'image' => 'Field :attribute harus berupa gambar',
            'mimes' => 'Field :attribute harus berupa gambar',
            'max' => 'Field :attribute maksimal 2MB',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/news', $image->hashName());
        News::create([
            'title' => $request->title,
            'content' => $request->description,
            'user_id' => auth()->user()->id,
            'slug' => \Str::slug($request->title),
            'image' => $image->hashName(),
        ]);

        toast('Berita Berhasil Ditambahkan','success')->position('top-end')->autoclose(5000);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $news = News::find($news->id);
        return view('apps.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
            'image' => 'Field :attribute harus berupa gambar',
            'mimes' => 'Field :attribute harus berupa gambar',
            'max' => 'Field :attribute maksimal 2MB',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/news', $image->hashName());
            $news->update([
                'title' => $request->title,
                'content' => $request->description,
                'user_id' => auth()->user()->id,
                'slug' => \Str::slug($request->title),
                'image' => $image->hashName(),
            ]);
        } else {
            $news->update([
                'title' => $request->title,
                'content' => $request->description,
                'user_id' => auth()->user()->id,
                'slug' => \Str::slug($request->title),
            ]);
        }

        toast('Berita Berhasil Diupdate','success')->position('top-end')->autoclose(5000);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news = News::find($news->id);
        if ($news->image) {
            $image_path = public_path('storage/news/' . $news->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $news->delete();

        toast('Berita Berhasil Dihapus','success')->position('top-end')->autoclose(5000);

        return redirect()->route('news.index');
    }
}
