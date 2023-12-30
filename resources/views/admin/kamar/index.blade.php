<!DOCTYPE html>
<html lang="en">

<head>
    <title>SB Admin 2 - Blank</title>
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
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Kamar</h1>

                    <div class="row">

                        <!-- Data Table Column (2/3 width) -->
                        <div class="col-lg-8">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Data Kucing</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Kucing</th>
                                                    <th>Jenis Kucing</th>
                                                    <th>Kondisi</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Kucing</th>
                                                    <th>Jenis Kucing</th>
                                                    <th>Kondisi</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($dataKucing as $key => $kucing)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $kucing->kucing_nama }}</td>
                                                    <td>{{ $kucing->jenis->jenis_nama }}</td>
                                                    <td>{{ $kucing->kondisi->kondisi_kesehatan }}</td>
                                                    <td>
                                                        <!-- Edit Icon - Trigger Modal -->
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUserModal{{ $kucing->id }}" data-kucing-id="{{ $kucing->id }}" data-kucing-name="{{ $kucing->kucing_nama }}" data-kucing-kondisi="{{ optional($kucing->kondisi)->id }}" data-kucing-jenis="{{ optional($kucing->jenis)->id }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>

                                                        <!-- Delete Icon -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $kucing->id }}">
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

                        <!-- Form Column (1/3 width) -->
                        <div class="col-lg-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Tambah Kucing</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form goes here -->
                                    <form action="{{ route('kucing.add') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-kucing @error('nama') is-invalid @enderror" placeholder="Nama Kucing" id="kucing_nama" name="kucing_nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                            @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <select name="id_kondisi" id="id_kondisi" class="form-control form-control-kucing">
                                                <option value="">Kondisi Kucing</option>
                                                @foreach($dataKondisi as $kondisi)
                                                <option value="{{ $kondisi->id }}" {{ old('id_kondisi', isset($kucing) ? $kucing->id_kondisi : null) == $kondisi->id ? 'selected' : '' }}>
                                                    {{ $kondisi->kondisi_kesehatan }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select name="id_jenis" id="id_jenis" class="form-control form-control-kucing">
                                                <option value="">Jenis Kucing</option>
                                                @foreach($dataJenis as $jenis)
                                                <option value="{{ $jenis->id }}" {{ old('id_jenis', isset($kucing) ? $kucing->id_jenis : null) == $jenis->id ? 'selected' : '' }}>
                                                    {{ $jenis->jenis_nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Tambah Kucing</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- /.container-fluid -->

                <!-- Edit User Modals -->
                @foreach($dataKucing as $kucing)
                <div class="modal fade" id="editUserModal{{ $kucing->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('kucing.update', $kucing->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Form fields for editing user data -->
                                    <div class="form-group">
                                        <label for="kucing_nama">Name Kucing</label>
                                        <input type="text" class="form-control" id="kucing_nama" name="kucing_nama" value="{{ $kucing->kucing_nama }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_kondisi">Kondisi:</label>
                                        <select name="id_kondisi" id="id_kondisi" class="form-control form-control-kucing">
                                            <option value="">Kondisi Kucing</option>
                                            @foreach($dataKondisi as $kondisi)
                                            <option value="{{ $kondisi->id }}" {{ old('id_kondisi', isset($kucing) ? $kucing->id_kondisi : null) == $kondisi->id ? 'selected' : '' }}>
                                                {{ $kondisi->kondisi_kesehatan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_jenis">Jenis:</label>
                                        <select name="id_jenis" id="id_jenis" class="form-control form-control-kucing">
                                            <option value="">Pilih Role User</option>
                                            @foreach($dataJenis as $jenis)
                                            <option value="{{ $jenis->id }}" {{ old('id_jenis', isset($kucing) ? $kucing->id_jenis : null) == $jenis->id ? 'selected' : '' }}>
                                                {{ $jenis->jenis_nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Update Kucing</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Delete User Modals -->
                @foreach($dataKucing as $kucing)
                <div class="modal fade" id="deleteUserModal{{ $kucing->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Ingin menghapus data "{{ $kucing->kucing_nama }}" dari table?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('kucing.destroy', $kucing->id) }}" method="POST">
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

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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