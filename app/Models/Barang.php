<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    public $timestamps = false;

    protected $primaryKey = 'kode_barang';  // Specify the primary key

    public $incrementing = false;  // Since the primary key is not auto-incrementing

    protected $keyType = 'string';  // Specify the primary key type


    protected $fillable = [
        'kode_barang',
        'id_satuan',
        'id_jenis',
        'nama_barang',
        'stok',
        'harga_barang',
        'harga_beli',
        
    ];

    public function satuan()
{
    return $this->belongsTo(satuan::class, 'id_satuan','id_satuan');
}

public function jenis()
{
    return $this->belongsTo(jenis::class,'id_jenis','id_jenis');
}


public function barangMasuk()
{
    return $this->hasMany(Barang_masuk::class, 'kode_barang');
}

// Relationship with Penjualan
public function penjualan()
{
    return $this->hasMany(Penjualan::class, 'kode_barang');
}

    // public function barang()
}

