<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        return view('apps.profile.index', compact('profile'));
    }

    public function updateName(Request $request)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error');
            return redirect()->back();
        }

        $profile = Profile::first();
        $profile->update([
            'title' => $request->title,
        ]);
        Alert::toast('Data Nama Kampus Berhasil Diubah', 'success');
        return redirect()->back();
    }

    public function updateMotto(Request $request)
    {
        $messages  = [
            'required' => 'Field :attribute harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'motto' => 'required',
        ]);
        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error');
            return redirect()->back();
        }

        $profile = Profile::first();
        $profile->update([
            'motto' => $request->motto,
        ]);
        Alert::toast('Data Motto Kampus Berubah', 'success');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
