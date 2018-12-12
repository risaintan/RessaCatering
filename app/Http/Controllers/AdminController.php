<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\putFileAs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Food;
use App\Makanan;
use App\Snack;

class AdminController extends Controller
{
    public function index(){
        $makanans = \App\Makanan::all();
        $snacks = \App\Snack::all();

        return view('admin.admin_home', compact('makanans','snacks'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanans = \App\Makanan::where('id',$id)->first();
        $makanans->delete();
    	return redirect()->route('admin.index')->with('alert-success','Data berhasil dihapus!');
    }


    public function showmenu(){
        return view('admin.admin_input');
    }

    //store food data
   
    public function storeFood(){
    Food :: create([
        'nama' => request('nama'),
        'category' => request('category')
       ]);
       return view('admin.admin_input');   
    }
}
