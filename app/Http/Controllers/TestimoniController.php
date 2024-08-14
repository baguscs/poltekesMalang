<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('apps.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Field :attribute harus diisi',
            'image' => 'Field :attribute harus berupa gambar',
            'mimes' => 'Field :attribute harus berupa gambar',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'testimoni' => 'required',
            'year_in' => 'required|numeric',
            'job' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error');
            return redirect()->back()->withInput();
        } else {
            $image = $request->file('image');
            $image->storeAs('public/testimoni', $image->hashName());
            Testimoni::create([
                'name' => $request->name,
                'content' => $request->testimoni,
                'year_entered' => $request->year_in,
                'company' => $request->job,
                'image' => $image->hashName(),
            ]);
            Alert::toast('Testimoni Berhasil Ditambahkan', 'success');
            return redirect()->route('testimoni.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        $item = Testimoni::find($testimoni->id);
        return view('apps.testimoni.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $messages = [
            'required' => 'Field :attribute harus diisi',
            'image' => 'Field :attribute harus berupa gambar',
            'mimes' => 'Field :attribute harus berupa gambar',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'testimoni' => 'required',
            'year_in' => 'required|numeric',
            'job' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ], $messages);

        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error');
            return redirect()->back()->withInput();
        } else {
            $item = Testimoni::find($testimoni->id);
            if ($request->image) {
                $image = $request->file('image');
                $image->storeAs('public/testimoni', $image->hashName());
                $item->image = $image->hashName();
            }
            $item->name = $request->name;
            $item->content = $request->testimoni;
            $item->year_entered = $request->year_in;
            $item->company = $request->job;
            $item->save();
            Alert::toast('Testimoni Berhasil Diubah', 'success');
            return redirect()->route('testimoni.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        $item = Testimoni::find($testimoni->id);
        if ($item->image) {
            $image = public_path('storage/testimoni/' . $item->image);
            if (file_exists($image)) {
                unlink($image);
            }
        }
        $item->delete();
        Alert::toast('Testimoni Berhasil Dihapus', 'success');
        return redirect()->route('testimoni.index');
    }
}
