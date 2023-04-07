<?php

namespace App\Http\Controllers;

use App\Models\produkKami;
use App\Http\Requests\UpdateprodukKamiRequest;
use Illuminate\Http\Request;
use Storage;

class ProdukKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.produkKami.index', [
            'produkKami' => produkKami::all(),
            'produkKami' => produkKami::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produkKami.create');
    }

    /**
     * Store a newly created resource in storage.

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaProduk' => 'required|max:60',
            'image' => 'image|file|max:2024|required'
        
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('produkKami-image');
        }
        produkKami::create($validatedData);
        return redirect('/dashboard/produkKami')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produkKami  $produkKami
     * @return \Illuminate\Http\Response
     */
    public function show(produkKami $produkKami)
    {
        return view('dashboard.produkKami.show', [
            'produkKami' => $produkKami
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produkKami  $produkKami
     * @return \Illuminate\Http\Response
     */
    public function edit(produkKami $produkKami)
    {
        return view('dashboard.produkKami.edit', compact('produkKami'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\produkKami  $produkKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produkKami $produkKami)
    {
        $validatedData = $request->validate([
            'namaProduk' => 'required|max:60',
            'image' => 'image|file|max:2024|'
            
        ]);
    
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tentangKami-image');
        }
    
        $produkKami->update($validatedData);
    
        return redirect('/dashboard/produkKami')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produkKami  $produkKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(produkKami $produkKami)
    {
        if($produkKami->image){
            Storage::delete($produkKami->image);
        }
        produkKami::destroy($produkKami->uuid);
        return redirect('/dashboard/produkKami')->with('success', 'data berhasil dihapus');
    }
}
