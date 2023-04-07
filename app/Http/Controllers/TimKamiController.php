<?php

namespace App\Http\Controllers;

use App\Models\timKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatetimKamiRequest;

class TimKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.timKami.index', [
            'timKami' => timKami::all(),
            'timKami' => timKami::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.timKami.create');
    }

    /**
     * Store a newly created resource in storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:30',
            'jabatan' => 'required|max:30',
            'image' => 'image|file|max:2024'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('timKami-image');
        }
        timKami::create($validatedData);
        return redirect('/dashboard/timKami')->with('success', 'berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\timKami  $timKami
     * @return \Illuminate\Http\Response
     */
    public function show(timKami $timKami)
    {
        return view('dashboard.timKami.show', [
            'timKami' => $timKami
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\timKami  $timKami
     * @return \Illuminate\Http\Response
     */
    public function edit(timKami $timKami)
    {
        return view('dashboard.timKami.edit', compact('timKami'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\timKami  $timKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, timKami $timKami)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:30',
            'jabatan' => 'required|max:30',
            'image' => 'image|file|max:2024'
        ]);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('timKami-image');
        }
        
        $timKami->update($validatedData);
        
        return redirect('/dashboard/timKami')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\timKami  $timKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(timKami $timKami)
    {
        if($timKami->image){
            Storage::delete($timKami->image);
        }
        
        timKami::where('uuid', $timKami->uuid)->delete();
        return redirect('/dashboard/timKami')->with('success', 'data berhasil dihapus');
    } 
}

