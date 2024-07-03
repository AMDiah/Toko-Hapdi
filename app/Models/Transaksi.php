<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'kode_transaksi',
        'id_user',
        'tanggal_transaksi',
        'sub_total',
        'nama_pembeli',
        'jenis_pembayaran',
        
    ];

}
