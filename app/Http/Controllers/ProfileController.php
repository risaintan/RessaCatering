<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit(){
    	
    	$user = User::find(Auth::id());
    	
    	return view('profile', compact('user'));
    }
}
