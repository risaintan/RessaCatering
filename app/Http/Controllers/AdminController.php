<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\putFileAs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_home');
       }

    public function showmenu(){
        return view('admin.admin_dashboard');
    }
}
