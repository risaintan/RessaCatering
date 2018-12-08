<?php

namespace App\Http\Controllers;

use App\Makanan; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakananController extends Controller
{
    //Nampilin halaman makanan_box
    public function index(){

        Makanan :: create([
            'nama' => request('nama'),
    		'paket' => request('paket'),
    		'telephone' => request('telephone'),
    		'alamat' => request('alamat'),
            'list_makanan' => request('list_makanan')
           ]);
           return view('makanan_box');
    }

}
