<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $guarded = [];
    
    public function barang()
    {
        return $this->belongsTo(
            barang::class, 'barang_id', 'id'
        );
    }//
}
