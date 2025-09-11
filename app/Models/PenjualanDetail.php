<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanDetail extends Model
{
    
    protected $guarded = [];
    
    public function penjualans()
    {
        return $this->belongsTo(
            penjualan::class, 'penjualan_id', 'id'
        );
    }
    
    public function barangs()
    {
        return $this->belongsTo(
            barang::class, 'barang_id', 'id'
        );
    }//
}
