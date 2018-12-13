<?php

namespace App\Http\Controllers;

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
    
    
}
