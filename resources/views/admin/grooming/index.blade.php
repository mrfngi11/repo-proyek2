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
                    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Grooming</h1>

                    <div class="row">

                        <!-- Data Table Column (2/3 width) -->
                        <div class="col-lg-8">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Data Grooming</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($dataGrooming as $key => $grooming)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td> @if ($grooming->image)
                                                        <img style="max-width: 150px; max-height: 150px;" src="{{ url('grooming-image'.'/'.$grooming->image) }}">
                                                        @endif
                                                    </td>
                                                    <td>{{ $grooming->deskripsi }}</td>
                                                    <td>{{ $grooming->harga }}</td>
                                                    <td>
                                                        <!-- Edit Icon - Trigger Modal -->
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUserModal{{ $grooming->id }}" data-grooming-id="{{ $grooming->id }}" data-grooming-image="{{ $grooming->image }}" data-grooming-harga="{{ $grooming->harga }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button>

                                                        <!-- Delete Icon -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $grooming->id }}">
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
                                    <h6 class="m-0 font-weight-bold" style="color: #FF6701;">Tambah Grooming</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Your form goes here -->
                                    <form action="{{ route('grooming.add') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-grooming @error('image') is-invalid @enderror" id="image" name="image">

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                        <textarea class="form-control form-control-grooming @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" id="deskripsi" name="deskripsi" required autocomplete="deskripsi" autofocus>{{ old('deskripsi') }}</textarea>


                                            @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-grooming @error('harga') is-invalid @enderror" placeholder="Harga" id="harga" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>

                                            @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>


                                        <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Tambah grooming</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- /.container-fluid -->

                <!-- Edit User Modals -->
                @foreach($dataGrooming as $grooming)
                <div class="modal fade" id="editUserModal{{ $grooming->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('grooming.update', $grooming->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if($grooming->image)
                                    <div class="form-group">
                                        <img class="text-center" style="max-width: 150px; max-height: 150px;" src="{{ url('grooming-image'). '/' . $grooming->image }}">
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" value="{{ $grooming->image }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $grooming->deskripsi }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $grooming->harga }}" required>
                                    </div>

                                    <button type="submit" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Update grooming</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Delete User Modals -->
                @foreach($dataGrooming as $grooming)
                <div class="modal fade" id="deleteUserModal{{ $grooming->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Ingin menghapus data dari table?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('grooming.destroy', $grooming->id) }}" method="POST">
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