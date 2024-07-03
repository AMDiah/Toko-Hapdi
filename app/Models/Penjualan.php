<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'id_transaksi',
        'kode_barang',
        'jumlah_beli',
        'total harga',
       
        
    ];
}
