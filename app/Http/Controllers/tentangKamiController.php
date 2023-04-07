<?php

namespace App\Http\Controllers;

use App\Models\tentangKami;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class tentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tentangKami.index', [
            'tentangKami' => tentangKami::all(),
            'tentangKami' => tentangKami::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tentangKami.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('tentangKami-image');
        }
        tentangKami::create($validatedData);
        return redirect('/dashboard/tentangKami')->with('success', 'berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function show(tentangKami $tentangKami)
    {
        return view('dashboard.tentangKami.show',[
            'tentangKami' => $tentangKami
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function edit(tentangKami $tentangKami)
    {
        return view('dashboard.tentangKami.edit', compact('tentangKami'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tentangKami $tentangKami)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);
    
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tentangKami-image');
        }
    
        $tentangKami->update($validatedData);
    
        return redirect('/dashboard/tentangKami')->with('success', 'Berhasil diubah');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(tentangKami $tentangKami)
    {
        if($tentangKami->image){
            Storage::delete($tentangKami->image);
        }
        tentangKami::destroy($tentangKami->uuid);
        return redirect('/dashboard/tentangKami')->with('success', 'data berhasil dihapus');
    }

}
 
