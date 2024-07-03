<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $table = "satuan";
    public $timestamps = false;
    protected $fillable = [
        
        'id_satuan',
        'nama_satuan',
        
    ];

    public function barang()
{
    return $this->hasMany(Barang::class, 'id_satuan');
}
}
