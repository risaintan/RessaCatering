<?php

namespace App\Http\Controllers;

use App\Makanan; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakananController extends Controller
{
    //Nampilin halaman makanan_box
    public function index(){
        $foods = \App\Food::all();
     return view('makanan_box', compact('foods'));
    }

    public function storeMakanan(){
        Makanan :: create([
            'nama' => request('nama'),
    		'paket' => request('paket'),
    		'telephone' => request('telephone'),
    		'alamat' => request('alamat'),
            'list_makanan' => request('list_makanan'),
            'kuantitas' => request('kuantitas'),
            'tanggal_pesanan' => request('tanggal_pesanan')
           ]);
           return redirect()->route('makanan.index')->with('alert-success', 'Berhasil Memesan Pesanan!');   
    }

    

}
