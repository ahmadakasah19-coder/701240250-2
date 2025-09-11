<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = [];
    
    public function penjualanDetail()
    {
        return $this ->hasMany(
            penjualanDetail::class, 'barang_id', 'id'
        );
    }
    
    public function pembelians()
    {
        return $this ->hasMany(
            pembelian::class, 'barang_id', 'id'
        );
    } 
}
