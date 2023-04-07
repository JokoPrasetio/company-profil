<?php

namespace App\Http\Controllers;

use App\Models\kontakKami;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatekontakKamiRequest;

class KontakKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kontakKami.index', [
            'kontakKami' => kontakKami::all(),
            'kontakKami' => kontakKami::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kontakKami.create');
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
            'email' => 'required|email',
            'alamat' => 'required|max:1000',
        ]);
        kontakKami::create($validatedData);
        return redirect('/dashboard/kontakKami')->with('success', 'berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kontakKami  $kontakKami
     * @return \Illuminate\Http\Response
     */
    public function show(kontakKami $kontakKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kontakKami  $kontakKami
     * @return \Illuminate\Http\Response
     */
    public function edit(kontakKami $kontakKami)
    {
        return view('dashboard.kontakKami.edit', compact('kontakKami'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\kontakKami  $kontakKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kontakKami $kontakKami)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:30',
            'email' => 'required|email',
            'alamat' => 'required|max:1000',
        ]);
        $kontakKami->update($validatedData);
        return redirect('/dashboard/kontakKami')->with('success', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kontakKami  $kontakKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(kontakKami $kontakKami)
    {
        kontakKami::destroy($kontakKami->uuid);
        return redirect('/dashboard/kontakKami')->with('success', 'berhasil dihapus');
    }
}
