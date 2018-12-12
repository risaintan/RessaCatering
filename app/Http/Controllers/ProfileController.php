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

    public function show(User $user)
    {   
        $users = Auth::user();
        $id = $users->id;
        $name = $users->name;
        $email = $users->email;
        $no_telp = $users->no_telp;
       
        return view('profile', compact('users'));
        
        // dd($users);
        
    }

    public function update(User $use){

        $users=Auth::user();

        $users->update([
            'name' => request('name'),
            'email' => request('email'),
            'no_telp'=> request('no_telp'),
        ]);
        
        return redirect()->route('profile');
    }
}
