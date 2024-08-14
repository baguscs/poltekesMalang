<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('apps.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.gallery.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/gallery', $image->hashName());
        Gallery::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'slug' => \Str::slug($request->title),
            'description' => $request->description,
            'image' => $image->hashName(),
        ]);

        toast('Galeri Berhasil Ditambahkan','success')->position('top-end')->autoclose(5000);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $gallery = Gallery::find($gallery->id);
        return view('apps.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
            'image' => 'Field :attribute harus berupa gambar',
            'mimes' => 'Field :attribute harus berupa gambar',
            'max' => 'Field :attribute maksimal 2MB',
        ];
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/gallery', $image->hashName());
            $gallery->update([
                'title' => $request->title,
                'user_id' => auth()->user()->id,
                'slug' => \Str::slug($request->title),
                'description' => $request->description,
                'image' => $image->hashName(),
            ]);
        } else {
            $gallery->update([
                'title' => $request->title,
                'user_id' => auth()->user()->id,
                'slug' => \Str::slug($request->title),
                'description' => $request->description,
            ]);
        }

        toast('Galeri Berhasil Diupdate','success')->position('top-end')->autoclose(5000);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery = Gallery::find($gallery->id);
        if ($gallery->image) {
            $image_path = public_path('storage/gallery/' . $gallery->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        $gallery->delete();
        toast('Galeri Berhasil Dihapus','success')->position('top-end')->autoclose(5000);
        return redirect()->route('gallery.index');
    }
}
