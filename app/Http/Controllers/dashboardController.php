<?php

namespace App\Http\Controllers;
use App\Models\tentangKami;
use App\Models\visiMisi;
use App\Models\produkKami;
use App\Models\kontakKami;
use App\Models\timKami;

class dashboardController extends Controller{
    public function index(){
    $tentangKami = tentangKami::latest()->first();
    $visiMisi = visiMisi::latest()->take(3)->get();
    $produkKami = produkKami::latest()->take(5)->get();
    $kontakKami = kontakKami::latest()->first();
    $timKami = timKami::all();

    return view('dashboard.index', compact('tentangKami', 'visiMisi', 'produkKami', 'kontakKami', 'timKami'));
    // return view('dashboard.index', [
    //     'tentangKami' => $tentangKami,
    //     'visiMisi' => $visiMisi,
    //     'produkKami' => $produkKami, 
    //     'kontakKami' => $kontakKami,
    //     'timKami' => $timKami 
    // ]);
    }
}
