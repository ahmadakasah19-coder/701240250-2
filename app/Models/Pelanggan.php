<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    
    protected $guarded = [];

    public function penjualans()
    {
        return $this ->hasMany(
            penjualan::class, 'pelanggan_id', 'id'
        );
    }
}
