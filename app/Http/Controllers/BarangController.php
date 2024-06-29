<?php

namespace App\Http\Controllers;


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
        return view("barang-masuk");
    }
    public function stokbarang()
    {
        return view("barang-bangunan");
    }
    public function blank()
    {
        return view("blank");
    }

}
