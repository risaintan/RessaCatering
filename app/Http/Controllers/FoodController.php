<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index(){
        return view('admin/admin_home');
       }
   
       public function storeFood(){
           Food :: create([
               'nama' => request('nama'),
               'category' => request('category'),
               
              ]);
              return view('admin/admin_home');   
       }
}
