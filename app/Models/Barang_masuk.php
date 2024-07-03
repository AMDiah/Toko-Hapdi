<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang_masuk',
        'kode_barang',
        'id_user',
        'id_supplier',
        'jumlah_masuk',
        'tanggal_masuk',
        'harga_beli_m',
        'harga_barang_m',
        
    ];

//     public function satuan()
// {
//     return $this->belongsTo(Satuan::class, 'id_satuan','id_satuan');
// }

// public function jenis()
// {
//     return $this->belongsTo(Jenis::class,'id_jenis','id_jenis');
// }
    
}
