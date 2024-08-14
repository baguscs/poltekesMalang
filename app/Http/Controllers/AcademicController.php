<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic = Academic::all();
        return view('apps.academic.index', compact('academic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps.academic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'attachment' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $academic = Academic::create([
            'title' => $request->title,
            'attachment' => $request->attachment
        ]);

        toast('Data Akademik Berhasil Ditambahkan','success')->position('top-end')->autoclose(5000);
        return redirect()->route('academic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Academic $academic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Academic $academic)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'attachment' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $academic->update([
            'title' => $request->title,
            'attachment' => $request->attachment
        ]);

        toast('Data Akademik Berhasil Diubah','success')->position('top-end')->autoclose(5000);
        return redirect()->route('academic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Academic $academic)
    {
        $academic->delete();
        toast('Data Akademik Berhasil Dihapus','success')->position('top-end')->autoclose(5000);
        return redirect()->route('academic.index');
    }
}
