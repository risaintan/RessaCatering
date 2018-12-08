<?php

namespace App\Http\Controllers;

use App\Snack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SnackController extends Controller
{
    public function index(){

        Snack :: create([
            'nama' => request('nama'),
    		'paket' => request('paket'),
    		'telephone' => request('telephone'),
    		'alamat' => request('alamat'),
            'list_snack' => request('list_snack')
           ]);
     return view('snack_box');
    }
}
