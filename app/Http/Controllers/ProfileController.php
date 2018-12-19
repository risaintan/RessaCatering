<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Snack;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class ProfileController extends Controller
{
    public function index(){
    	
    	return view('profile');
    }

    public function show(Request $users)
    {   
        $users = Auth::user();
        return view('profile', compact('users'));
        
        // dd($users);
        
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Auth::user();
        $data->update([
            'name' => request('name'),
            'no_telp' => request('no_telp'),
            'email' => request('email')
        ]);
        return redirect()->route('profile')->with('alert-success','Data berhasil diubah!');
    }
    
    public function pesanan()
    {
        $data = Auth::user();
        $makanans = \App\Makanan::all();
        $snacks = \App\Snack::all();
        $foods = \App\Food::all();

        return view('pesananprofile', compact('makanans','snacks','foods', 'data'));
    }
    public function destroy($id)
    {
        $makanans = \App\Makanan::where('id',$id)->first();
        $makanans->delete();
    	return redirect()->route('profile.pesanan')->with('alert-success','Data berhasil dihapus!');
    }
    public function destroy2($id)
    {
        $snacks = \App\Snack::where('id',$id)->first();
        $snacks->delete();
    	return redirect()->route('profile.pesanan')->with('alert-success','Data berhasil dihapus!');
    }

    public function showpesanan(Request $makanans, $id)
    {   
        $makanans = \App\Makanan::where('id',$id)->first();
        return view('updatemakanan', compact('makanans'));
        
    }

    public function updatefood(Request $makanans, $id)
    {
        $makanans = \App\Makanan::where('id',$id)->first();
        $makanans->update([
            'nama' => request('nama'),
            'paket' => request('paket'),
            'alamat' => request('alamat'),
            'telephone' => request('telephone'),
            'list_makanan' => request('list_makanan'),
            'tanggal_pesanan' => request('tanggal_pesanan')
        ]);
        return redirect()->route('profile.pesanan')->with('alert-success','Data berhasil diubah!');
    }

    public function showsnack(Request $snacks, $id)
    {   
        $snacks = \App\Snack::where('id',$id)->first();
        return view('updatesnack', compact('snacks'));
        
    }

    public function updatesnack(Request $snacks, $id)
    {
        $snacks = \App\Snack::where('id',$id)->first();
        $snacks->update([
            'nama' => request('nama'),
            'paket' => request('paket'),
            'alamat' => request('alamat'),
            'telephone' => request('telephone'),
            'list_snack' => request('list_snack'),
            'tanggal_pesanan' => request('tanggal_pesanan')
        ]);
        return redirect()->route('profile.pesanan')->with('alert-success','Data berhasil diubah!');
    }

    
}
