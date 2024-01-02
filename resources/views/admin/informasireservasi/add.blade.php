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
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Reservasi</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="col-lg-3 mb-3">
                                <a href="{{ route('reservasi') }}">
                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-arrow-left"></i>
                                        <span>Kembali</span>
                                    </button>
                                </a>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Tambah Reservasi</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form goes here -->
                                    <form action="{{ route('reservasi.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="id_customer">Customer</label>
                                            <select name="id_customer" id="id_customer" class="form-control form-control-reservasi">
                                                <option value="">Customer</option>
                                                @foreach($dataUser as $user)
                                                @if($user->role->name !== 'admin')
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Form fields for editing user data -->
                                        <div class="form-group">
                                            <label for="id_kamar">Kamar</label>
                                            <select name="id_kamar" id="id_kamar" class="form-control form-control-reservasi">
                                                <option value="">Pilih Kamar</option>
                                                @foreach($dataKamar as $kamar)
                                                <option value="{{ $kamar->id }}">
                                                    {{ $kamar->no_kamar }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="jumlah_kucing">Jumlah Kucing</label>
                                            <input type="number" class="form-control form-control-reservasi @error('jumlah_kucing') is-invalid @enderror" placeholder="Jumlah Kucing" id="jumlah_kucing" name="jumlah_kucing" value="{{ old('jumlah_kucing') }}" required autocomplete="jumlah_kucing" autofocus>

                                            @error('jumlah_kucing')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <label for="check_in">Check In</label>

                                            <input type="date" class="form-control form-control-reservasi @error('check_in') is-invalid @enderror" id="check_in" name="check_in" value="{{ old('check_in') }}" required autocomplete="check_in" autofocus>

                                            @error('check_in')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">

                                            <label for="check_out">Check Out</label>

                                            <input type="date" class="form-control form-control-reservasi @error('check_out') is-invalid @enderror" id="check_out" name="check_out" value="{{ old('check_out') }}" required autocomplete="check_out" autofocus>

                                            @error('check_out')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Tambah Reservasi</button>
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

</body>

</html>