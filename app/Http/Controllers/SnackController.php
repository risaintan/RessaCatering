<?php

namespace App\Http\Controllers;

use App\Snack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SnackController extends Controller
{
    public function index(){
      $foods = \App\Food::all();
     return view('snack_box', compact('foods'));
    }

    public function storeSnack(){
        Snack :: create([
            'nama' => request('nama'),
    		'paket' => request('paket'),
    		'telephone' => request('telephone'),
    		'alamat' => request('alamat'),
            'list_snack' => request('list_snack'),
            'tanggal_pesanan' => request('tanggal_pesanan')
           ]);
           return redirect()->route('snack.index')->with('alert-success', 'Berhasil Memesan Pesanan!'); 
    }
}
