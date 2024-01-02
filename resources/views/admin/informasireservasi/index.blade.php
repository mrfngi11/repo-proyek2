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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Reservasi</h1>

                    <div class="row">

                        <!-- Data Table Column (2/3 width) -->
                        <div class="col-lg-12">

                            <div class="col-lg-3 mb-3">
                                <a href="{{ route('reservasi.add') }}">
                                    <button type="button" class="btn btn-sm" style="background-color: #FF6701; color: #FFFFFF;">
                                        <i class="fas fa-plus"></i>
                                        <span>Tambah Reservasi</span>
                                    </button>
                                </a>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Data Reservasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Customer</th>
                                                    <th>No Kamar</th>
                                                    <th>Jumlah Kucing</th>
                                                    <th>Check In</th>
                                                    <th>Check Out</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Customer</th>
                                                    <th>No Kamar</th>
                                                    <th>Jumlah Kucing</th>
                                                    <th>Check In</th>
                                                    <th>Check Out</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($dataReservasi as $key => $reservasi)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ optional($reservasi->user)->name }}</td>
                                                    <td>{{ optional($reservasi->kamar)->no_kamar }}</td>
                                                    <td>{{ $reservasi->jumlah_kucing }}</td>
                                                    <td>{{ $reservasi->check_in }}</td>
                                                    <td>{{ $reservasi->check_out }}</td>
                                                    <td>
                                                        <!-- Edit Icon - Trigger Modal -->
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUserModal{{ $reservasi->id }}" data-reservasi-id="{{ $reservasi->id }}" data-reservasi-customer="{{ optional($reservasi->user)->name }}" data-reservasi-no-kamar="{{ optional($reservasi->kamar)->no_kamar }}" data-reservasi-jumlah="{{ $reservasi->jumlah_kucing }}" data-reservasi-check-in="{{ $reservasi->check_in }}" data-reservasi-check-out="{{ $reservasi->check_out }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>

                                                        <!-- Delete Icon -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $reservasi->id }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Edit User Modals -->
                        @foreach($dataReservasi as $reservasi)
                        <div class="modal fade" id="editUserModal{{ $reservasi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="id_customer">Customer</label>
                                                <select name="id_customer" id="id_customer" class="form-control form-control-reservasi">
                                                    <option value="">Customer</option>
                                                    @foreach($dataUser as $user)
                                                    @if($user->role->name !== 'admin')
                                                    <option value="{{ $user->id }}" {{ old('id_customer', isset($reservasi) ? $reservasi->id_customer : null) == $user->id ? 'selected' : '' }}>
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
                                                    <option value="{{ $kamar->id }}" {{ old('id_kamar', isset($reservasi) ? $reservasi->id_kamar : null) == $kamar->id ? 'selected' : '' }}>
                                                        {{ $kamar->no_kamar }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="jumlah_kucing">Jumlah Kucing</label>
                                                <input type="number" class="form-control" id="jumlah_kucing" name="jumlah_kucing" value="{{ $reservasi->jumlah_kucing }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="check_in">Check In</label>
                                                <input type="date" class="form-control" id="check_in" name="check_in" value="{{ $reservasi->check_in }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="check_out">Check Out</label>
                                                <input type="date" class="form-control" id="check_out" name="check_out" value="{{ $reservasi->check_out }}" required>
                                            </div>

                                            <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Update Reservasi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Delete User Modals -->
                        @foreach($dataReservasi as $reservasi)
                        <div class="modal fade" id="deleteUserModal{{ $reservasi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Ingin menghapus data "{{ optional($reservasi->user)->name }}" dari table?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('reservasi.destroy', $reservasi->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-info">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- End of Main Content -->

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