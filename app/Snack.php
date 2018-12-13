<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    protected $fillable = ['nama', 'paket', 'telephone','alamat', 'list_snack',  'tanggal_pesanan'];
}
