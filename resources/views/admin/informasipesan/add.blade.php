<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('admin/template/head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin/template/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #FCECDD;">

                <!-- Topbar -->
                @include('admin/template/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-5">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Pesan</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="col-lg-3 mb-3">
                                <a href="{{ route('pesan') }}">
                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-arrow-left"></i>
                                        <span>Kembali</span>
                                    </button>
                                </a>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Tambah Pesan</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form goes here -->
                                    <form action="{{ route('pesan.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group">

                                            <select name="id_customer" id="id_customer" class="form-control form-control-user">
                                                <option value="">Customer</option>
                                                @foreach($dataUser as $user)
                                                @if($user->role->name !== 'admin')
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                                @endif
                                                @endforeach
                                            </select>

                                            @error('id_customer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <input type="text" class="form-control form-control-pesan @error('kucing_nama') is-invalid @enderror" placeholder="Nama Kucing" id="kucing_nama" name="kucing_nama" value="{{ old('kucing_nama') }}" required autocomplete="kucing_nama" autofocus>

                                            @error('kucing_nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <select name="id_kondisi" id="id_kondisi" class="form-control form-control-pesan">
                                                <option value="">Kondisi Kucing</option>
                                                @foreach($dataKondisi as $kondisi)
                                                <option value="{{ $kondisi->id }}" {{ old('id_kondisi', isset($pesan) ? $pesan->id_kondisi : null) == $kondisi->id ? 'selected' : '' }}>
                                                    {{ $kondisi->kondisi_kesehatan }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <select name="id_jenis" id="id_jenis" class="form-control form-control-pesan">
                                                <option value="">Jenis Kucing</option>
                                                @foreach($dataJenis as $jenis)
                                                <option value="{{ $jenis->id }}" {{ old('id_jenis', isset($pesan) ? $pesan->id_jenis : null) == $jenis->id ? 'selected' : '' }}>
                                                    {{ $jenis->jenis_nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <input type="number" class="form-control form-control-pesan @error('kucing_berat') is-invalid @enderror" placeholder="Berat Kucing (kg)" id="kucing_berat" name="kucing_berat" value="{{ old('kucing_berat') }}" required autocomplete="kucing_berat" autofocus>

                                            @error('kucing_berat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <select name="id_grooming" id="id_grooming" class="form-control form-control-pesan">
                                                <option value="">Pilih Layanan</option>
                                                @foreach($dataGrooming as $grooming)
                                                <option value="{{ $grooming->id }}" {{ old('id_grooming', isset($pesan) ? $pesan->id_grooming : null) == $grooming->id ? 'selected' : '' }}>
                                                    {{ $grooming->grooming_nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button id="tambah" type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Tambah Pesan</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('welcome') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        @include('admin/template/script')
        @include('sweetalert::alert')
</body>

</html>