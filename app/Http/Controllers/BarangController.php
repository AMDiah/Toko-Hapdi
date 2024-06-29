<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function dashboard()
    {
        return view("dashboard");
    }
    public function login()
    {
        return view("Auth.login");
    }
    public function barangmsk()
    {
        return view("barang-masuk.barang-masuk");
    }
    public function stokbarang()
    {
        return view("stok.barang-bangunan");
    }
    public function supplier()
    {
        return view("supplier.supplier");
    }
    public function transaksijual()
    {
        return view("transaksi.transaksi-penjualan");
    }
    public function kelolauser()
    {
        return view("user.kelola-user");
    }
    public function cetak()
    {
        return view("cetak");
    }
    public function blank()
    {
        return view("blank");
    }

    //stok
    public function create()
    {
        return view("stok.create-stok");
    }
    public function store(Request $request )
    {
        dd($request->all());
    }
}
