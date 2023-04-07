<?php

namespace App\Http\Controllers;

use App\Models\visiMisi;
use Illuminate\Http\Request;


class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('dashboard.visiMisi.index',[
            'visiMisi' => visiMisi::all(),
            'visiMisi' => visiMisi::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.visiMisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevisiMisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);
        visiMisi::create($validatedData);
        return redirect('/dashboard/visiMisi')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function show(visiMisi $visiMisi)
    {
        return view('dashboard.visiMisi.show', [
            'visiMisi' => $visiMisi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function edit(visiMisi $visiMisi)
    {
        return view('dashboard.visiMisi.edit', compact('visiMisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevisiMisiRequest  $request
     * @param  \App\Models\visiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visiMisi $visiMisi)
    {
       $validatedData =  $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);
        $visiMisi->update($validatedData);
        return redirect('/dashboard/visiMisi')->with('success', 'berhasil diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(visiMisi $visiMisi)
    {
        visiMisi::destroy($visiMisi->uuid);
        return redirect('/dashboard/visiMisi')->with('success', 'berhasil dihapus');
    }
}
