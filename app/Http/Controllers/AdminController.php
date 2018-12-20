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
        if(Auth::user()->id != 1){
            return redirect('home');
        }
        $makanans = \App\Makanan::all();
        $snacks = \App\Snack::all();
        $foods = \App\Food::all();

        return view('admin.admin_home', compact('makanans','snacks','foods'));
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
    public function destroy2($id)
    {
        $snacks = \App\Snack::where('id',$id)->first();
        $snacks->delete();
    	return redirect()->route('admin.index')->with('alert-success','Data berhasil dihapus!');
    }


    public function showmenu(){
        if(Auth::user()->id != 1){
            return redirect('home');
        }
        return view('admin.admin_input');
    }
    public function delete($id)
    {
        $makanans = \App\Food::where('id',$id)->first();
        $makanans->delete();
    	return redirect()->route('admin.index')->with('alert-success','Data berhasil dihapus!');
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
