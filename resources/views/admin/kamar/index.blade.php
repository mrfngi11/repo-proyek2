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
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Data Kamar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No Kamar</th>
                                                    <th>Image</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No Kamar</th>
                                                    <th>Image</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($dataKamar as $key => $kamar)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $kamar->no_kamar }}</td>
                                                    <td> @if ($kamar->image)
                                                        <img style="max-width: 150px; max-height: 150px;" src="{{ url('kamar-image'.'/'.$kamar->image) }}">
                                                        @endif
                                                    </td>
                                                    <td>{{ $kamar->deskripsi }}</td>
                                                    <td>{{ $kamar->harga }}</td>
                                                    <td>
                                                        <!-- Edit Icon - Trigger Modal -->
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUserModal{{ $kamar->id }}" data-kamar-id="{{ $kamar->id }}" data-kamar-number="{{ $kamar->no_kamar }}" data-kamar-image="{{ $kamar->image }}" data-kamar-harga="{{ $kamar->harga }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>

                                                        <!-- Delete Icon -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $kamar->id }}">
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
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Tambah Kamar</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form goes here -->
                                    <form action="{{ route('kamar.add') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-kamar @error('no_kamar') is-invalid @enderror" placeholder="Nomor Kamar" id="no_kamar" name="no_kamar" value="{{ old('no_kamar') }}" required autocomplete="no_kamar" autofocus>

                                            @error('no_kamar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-kamar @error('image') is-invalid @enderror" id="image" name="image">

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-kamar @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" autofocus>

                                            @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-kamar @error('harga') is-invalid @enderror" placeholder="Harga" id="harga" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>

                                            @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>


                                        <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Tambah Kamar</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- /.container-fluid -->

                <!-- Edit User Modals -->
                @foreach($dataKamar as $kamar)
                <div class="modal fade" id="editUserModal{{ $kamar->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Form fields for editing user data -->
                                    <div class="form-group">
                                        <label for="no_kamar">Nomor Kamar</label>
                                        <input type="text" class="form-control" id="no_kamar" name="no_kamar" value="{{ $kamar->no_kamar }}" required>
                                    </div>

                                    @if($kamar->image)
                                    <div class="form-group">
                                        <img class="text-center" style="max-width: 150px; max-height: 150px;" src="{{ url('kamar-image'). '/' . $kamar->image }}" alt="Current Image">
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" value="{{ $kamar->image }}" required="true">

                                        <!-- Menampilkan nama file yang sudah diunggah (jika ada) -->
                                        @if($kamar->image)
                                        <p class="text-muted mt-2">Current Image: {{ $kamar->image }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kamar->deskripsi }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $kamar->harga }}" required>
                                    </div>

                                    <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Update Kamar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Delete User Modals -->
                @foreach($dataKamar as $kamar)
                <div class="modal fade" id="deleteUserModal{{ $kamar->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Ingin menghapus data "{{ $kamar->no_kamar }}" dari table?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('kamar.destroy', $kamar->id) }}" method="POST">
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