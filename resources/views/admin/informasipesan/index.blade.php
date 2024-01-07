<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop </title>
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
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Pesanan</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="col-lg-3 mb-3">
                                <a href="{{ route('pesan.add') }}">
                                    <button type="button" class="btn btn-sm" style="background-color: #FF6701; color: #FFFFFF;">
                                        <i class="fas fa-plus"></i>
                                        <span>Tambah Pesan</span>
                                    </button>
                                </a>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Data Pesanan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Pemilik</th>
                                                    <th>Nama Kucing</th>
                                                    <th>Jenis</th>
                                                    <th>Kondisi</th>
                                                    <th>Berat</th>
                                                    <th>Keterangan</th>
                                                    <th>Layanan</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Pemilik</th>
                                                    <th>Nama Kucing</th>
                                                    <th>Jenis</th>
                                                    <th>Kondisi</th>
                                                    <th>Berat</th>
                                                    <th>Keterangan</th>
                                                    <th>Layanan</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($dataPesan as $key => $pesan)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ optional($pesan->user)->name }}</td>
                                                    <td>{{ $pesan->kucing_nama }}</td>
                                                    <td>{{ optional($pesan->jenis)->jenis_nama }}</td>
                                                    <td>{{ optional($pesan->kondisi)->kondisi_kesehatan }}</td>
                                                    <td>{{ number_format($pesan->kucing_berat) }} Kg</td>
                                                    <td>Kucing {{ optional($pesan->keterangan)->keterangan_nama }}</td>
                                                    <td>{{ optional($pesan->grooming)->grooming_nama }}</td>
                                                    <td>{{ $pesan->status }}</td>
                                                    <td>
                                                        <!-- Edit Icon - Trigger Modal -->
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUserModal{{ $pesan->id }}" data-pesan-id="{{ $pesan->id }}" data-pesan-user="{{ optional($pesan->user)->name }}" data-pesan-jenis="{{ $pesan->jenis }}" data-pesan-kondisi="{{ $pesan->kondisi }}" data-pesan-layanan="{{ optional($pesan->layanan)->layanan_nama }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>

                                                        <!-- Delete Icon -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $pesan->id }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $dataPesan->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- /.container-fluid -->

                        <!-- Edit User Modals -->
                        @foreach($dataPesan as $pesan)
                        <div class="modal fade" id="editUserModal{{ $pesan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('pesan.update', $pesan->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <!-- Form fields for editing user data -->

                                            <!-- Menambahkan hidden input untuk menyimpan id user -->

                                            <div class="form-group">
                                                <label for="id_customer">Customer</label>
                                                <select name="id_customer" id="id_customer" class="form-control form-control-pesan">
                                                    <option value="">Customer</option>
                                                    @foreach($dataUser as $user)
                                                    @if($user->role->name !== 'admin')
                                                    <option value="{{ $user->id }}" {{ old('id_customer', isset($pesan) ? $pesan->id_customer : null) == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="kucing_nama">Nama Kucing</label>
                                                <input type="text" class="form-control" id="kucing_nama" name="kucing_nama" value="{{ $pesan->kucing_nama }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="id_kondisi">Kondisi:</label>
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
                                                <label for="id_jenis">Jenis:</label>
                                                <select name="id_jenis" id="id_jenis" class="form-control form-control-pesan">
                                                    <option value="">Pilih Role User</option>
                                                    @foreach($dataJenis as $jenis)
                                                    <option value="{{ $jenis->id }}" {{ old('id_jenis', isset($pesan) ? $pesan->id_jenis : null) == $jenis->id ? 'selected' : '' }}>
                                                        {{ $jenis->jenis_nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">

                                                <label for="kucing_berat">Berat Kucing (Kg)</label>

                                                <input type="number" class="form-control form-control-pesan" placeholder="Berat Kucing" id="kucing_berat" name="kucing_berat"  value="{{ $pesan->kucing_berat }}" required>

                                                @error('kucing_berat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label for="id_grooming">Layanan:</label>
                                                <select name="id_grooming" id="id_grooming" class="form-control form-control-pesan">
                                                    <option value="">Pilih Layanan</option>
                                                    @foreach($dataGrooming as $grooming)
                                                    <option value="{{ $grooming->id }}" {{ old('id_grooming', isset($pesan) ? $pesan->id_grooming : null) == $grooming->id ? 'selected' : '' }}>
                                                        {{ $grooming->grooming_nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Update Pesan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Delete User Modals -->
                        @foreach($dataPesan as $pesan)
                        <div class="modal fade" id="deleteUserModal{{ $pesan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <p>Ingin menghapus data "{{ optional($pesan->user)->name }}" dari table?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('pesan.destroy', $pesan->id) }}" method="POST">
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
            @include('sweetalert::alert')

</body>

</html>