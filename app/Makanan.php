<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = ['nama', 'paket', 'telephone', 'alamat', 'list_makanan', 'kuantitas', 'tanggal_pesanan'];
}