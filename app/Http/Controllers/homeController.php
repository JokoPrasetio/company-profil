<?php

namespace App\Http\Controllers;

use App\Models\timKami;
use App\Models\visiMisi;
use App\Models\kontakKami;
use App\Models\produkKami;
use App\Models\tentangKami;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $tentangKami = tentangKami::latest()->first();
        $visiMisi = visiMisi::latest()->take(4)->get();
        $produkKami = produkKami::latest()->take(3)->get();
        $kontakKami = kontakKami::latest()->first();
        $timKami = timKami::all();
        
        return view('home', compact(
            'tentangKami', 'visiMisi', 'produkKami', 'kontakKami', 'timKami'
        ));
    }
}
