<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Satuan;
use Illuminate\Support\Facades\Redirect;


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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // Mengambil semua barang beserta satuan dan jenis yang berelasi
    //     $barang = Barang::with(['satuan', 'jenis'])->get();
    //     return view('barang.index', compact('barang'));
    // }

    public function index()
    {
        $barang = Barang::with(['satuan', 'jenis'])->get();
        return view('stok.barang-bangunan', compact('barang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuan = Satuan::all();
        $jenis = Jenis::all();

        
        return view('stok.create-stok', compact('satuan', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barang',
            'id_satuan' => 'required',
            'id_jenis' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga_barang' => 'required|integer',
            'harga_beli' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang created successfully.');
    }

    
        public function destroy($kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->firstOrFail();
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully.');
    }

    
    // public function index() {
    //     $barang = Barang::all(); // or whatever query you use to get the data
    //     return view('stok.barang_bangunan', compact('barang'));
    // }
    // //stok
    // public function create()
    // {
    //     $satuan = Satuan::all();
    //     $jenis = Jenis::all();
    //     return view('stok.create-stok', compact('satuan', 'jenis'));
    //     // return view("stok.create-stok");
    // }
    // // public function store(Request $request )
    // // {
    // //     //dd($request->input->all());
    // //     Barang::create($request->all());
    // // }
    
    // public function store(Request $request)
    // {
    // // Validasi datas
    // $validated = $request->validate([
    //     'kode_barang' => 'required|string|max:20',
    //     'nama_barang' => 'required|string|max:255',
    //     'id_satuan' => 'required|exists:satuan,id',
    //     'id_jenis' => 'required|exists:jenis,id',
    //     'stok'=> 'required|integer|max:11',
    //     'harga_barang'=> 'required|integer|max:11',
    //     'harga_beli'=> 'required|integer|max:11',
    // ]);

    // // Membuat barang baru
    // // Barang::create([
    // //     'kode_barang'=> $validated['kode_barang'],
    // //     'nama_barang' => $validated['nama_barang'],
    // //     'id_satuan' => $validated['id_satuan'],
    // //     'id_jenis' => $validated['id_jenis'],
    // //     'stok'=> $validated['stok'],
    // //     'harga_barang'=> $validated['harga_barang'],
    // //     'harga_beli'=> $validated['harga_beli'],
    // // ]);

    // return redirect('stok.barang-bangunan')->back()->with('success', 'Barang berhasil ditambahkan');
    // }


//     // barangg
//      /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $barang = Barang::with(['satuan', 'jenis'])->get();
//         dd($barang);
//         return view('barang.index', compact('barang'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $satuan = Satuan::all();
//         $jenis = Jenis::all();
//         return view('stok.create-stok', compact('satuan', 'jenis'));
//     }
// /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'kode_barang' => 'required|unique:barang',
//             'id_satuan' => 'required',
//             'id_jenis' => 'required',
//             'nama_barang' => 'required',
//             'stok' => 'required|integer',
//             'harga_barang' => 'required|integer',
//             'harga_beli' => 'required|integer',
//         ]);

//         $barang = new Barang();
//         $barang->kode_barang = $request->kode_barang;
//         $barang->id_satuan = $request->id_satuan;
//         $barang->id_jenis = $request->id_jenis;
//         $barang->nama_barang = $request->nama_barang;
//         $barang->stok = $request->stok;
//         $barang->harga_barang = $request->harga_barang;
//         $barang->harga_beli = $request->harga_beli;
//         $res = $barang->save();
        
//         // Barang::create($request->all());
//         if ($res) {
//             return Redirect::to('stok.barang-bangunan')->with('success', 'Barang created successfully.');
//         }else
//         return back()->with('fail', 'something wrong.');
//     }

//     public function getData()
// {
//     $barang = Barang::latest()->value('kode_barang');
//     // Ambil ID terbaru
//     $newestLoketId = Loket::where('kode_loket', 'like', 'A%')->latest()->value('id');

//     // Hitung jumlah antrian yang belum diambil
//     $remainingQueues = max(0, $jumlahAntrian - $newestLoketId);

//     // Hitung jumlah antrian yang telah disimpan dengan status "waiting"
//     $waitingQueues = Loket::where('kode_loket', 'like', 'A%')->where('status', 'waiting')->count();

//     // Sisa antrian berasal dari antrian yang telah disimpan dengan status "waiting"
//     $remainingQueues += max(0, $waitingQueues);

//     // Ambil data kode loket terbaru dari database
//     $dataDisimpan = Loket::where('kode_loket', 'like', 'A%')->latest()->first();

//     // Ambil data pengguna yang disimpan
//     $userData = User::find($dataDisimpan->id);

//     // Hitung total antrian yang sedang menunggu
//     $totalWaitingQueues = $remainingQueues + ($newestLoketId > 0 ? 1 : 0);

//     return view('user.data', compact('dataDisimpan', 'userData', 'totalWaitingQueues'));
// }

}
