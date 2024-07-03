<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // public function index() {
    //     $barang = Barang::all(); // or whatever query you use to get the data
    //     return view('stok.barang_bangunan', compact('barang'));
    // }
    //stok
    public function create()
    {
        // $satuan = Satuan::all();
        // $jenis = Jenis::all();
        return view('stok.create-stok', compact('satuan', 'jenis'));
        // return view("stok.create-stok");
    }
    // public function store(Request $request )
    // {
    //     //dd($request->input->all());
    //     Barang::create($request->all());
    // }
    
    public function store(Request $request)
    {
    // Validasi datas
    // $validated = $request->validate([
    //     'kode_barang' => 'required|string|max:20',
    //     'nama_barang' => 'required|string|max:255',
    //     'id_satuan' => 'required|exists:satuan,id',
    //     'id_jenis' => 'required|exists:jenis,id',
    //     'stok'=> 'required|integer|max:11',
    //     'harga_barang'=> 'required|integer|max:11',
    //     'harga_beli'=> 'required|integer|max:11',
    // ]);

    // Membuat barang baru
    // Barang::create([
    //     'kode_barang'=> $validated['kode_barang'],
    //     'nama_barang' => $validated['nama_barang'],
    //     'id_satuan' => $validated['id_satuan'],
    //     'id_jenis' => $validated['id_jenis'],
    //     'stok'=> $validated['stok'],
    //     'harga_barang'=> $validated['harga_barang'],
    //     'harga_beli'=> $validated['harga_beli'],
    // ]);

    return redirect('stok.barang-bangunan')->back()->with('success', 'Barang berhasil ditambahkan');
    }
}
