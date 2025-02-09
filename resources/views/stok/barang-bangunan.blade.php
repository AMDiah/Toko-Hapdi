<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Hapdi - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Toko Hapdi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Supplier -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('supplier') }}">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>Supplier</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Barang Bangunan -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('stokbarang') }}">
                    <i class="fas fa-fw fa-solid fa-folder"></i>
                    <span>Barang Bangunan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Barang Masuk -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('barangmsk') }}">
                    <i class="fas fa-fw fa-solid fa-box-open"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Transaksi Penjualan -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('transaksijual') }}">
                    <i class="fas fa-fw fa-solid fa-briefcase"></i>
                    <span>Transaksi Penjualan</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Cetak Laporan -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('cetak') }}">
                    <i class="fas fa-fw fa-solid fa-print"></i>
                    <span>Cetak Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - User Management -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('kelolauser') }}">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>User Management</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-black-400"></i>
                                    Admin
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-black-400"></i>
                                    Dashboard
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 align-text-center text-black-800">BARANG</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-solid fa-plus fa-sm text-white-50"></i> Tambah Barang</a> --}}
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="container-fluid">

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h6 class="m-0 font-weight-bold text-black">Data Barang</h6>
                                        <a href="{{ route('createstok') }}"
                                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-solid fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>ID Satuan</th>
                                                    <th>ID Jenis</th>
                                                    <th>Nama Barang</th>
                                                    <th>Stok</th>
                                                    <th>Harga Barang</th>
                                                    <th>Harga Beli</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($barang as $item)
                                                    <tr>
                                                        <td>{{ $item->kode_barang }}</td>
                                                        {{-- <p>Satuan: {{ $item->satuan->satuan }}</p>
                                                    <p>Jenis: {{ $item->jenis->jenis }}</p> --}}
                                                        <td>{{ $item->satuan->nama_satuan }}</td>
                                                        <td>{{ $item->jenis->nama_jenis }}</td>
                                                        <td>{{ $item->nama_barang }}</td>
                                                        <td>{{ $item->stok }}</td>
                                                        <td>{{ $item->harga_barang }}</td>
                                                        <td>{{ $item->harga_beli }}</td>
                                                        <td>
                                                            <form {{-- action="{{ route('barang.destroy', $barang->kode_barang) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE') <button type="submit" --}} class="btn btn-danger">
                                                                Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{-- @foreach ($barang as $b)
                                                    <tr>
                                                        <td>{{ $b->kode_barang }}</td>
                                                        <td>{{ $b->nama_barang }}</td>
                                                        <td>{{ $b->satuan->nama_satuan }}</td>
                                                        <td>{{ $b->jenis->nama_jenis }}</td>
                                                        <td>{{ $b->stok }}</td>
                                                        <td>{{ $b->harga_barang }}</td>
                                                        <td>{{ $b->harga_beli }}</td>
                                                        {{-- <td>
                                                            <a href="{{ route('barang.edit', $b->kode_barang) }}"
                                                                class="btn btn-warning">Edit</a>
                                                            <form
                                                                action="{{ route('barang.destroy', $b->kode_barang) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td> --}}
                                                {{-- </tr>
                                                @endforeach --}}

                                                {{-- @foreach ($barang as $brg)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $brg->kode_barang }}</td>


                                                        <td>{{ $brg->id_satuan }}</td>
                                                        <td>{{ $brg->id_jenis }}</td>
                                                        <td>{{ $brg->nama_barang }}</td>
                                                        <td>{{ $brg->stok }}</td>
                                                        <td>{{ $brg->harga_barang }}</td>
                                                        <td>{{ $brg->harga_beli }}</td>

                                                        
                                                    </tr>
                                                @endforeach --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Content Row -->
                        <div class="row">
                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">
                            </div>
                            <div class="col-lg-6 mb-4">
                            </div>
                        </div>


                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current
                            session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
