<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0" style="background-color: #FFC288;">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <!-- Product section-->
                        <section class="py-2" style="background-color: #FFFFFF;">
                            <div class="container px-4 px-lg-5">

                                <div class="row gx-4 gx-lg-5 align-items-top row-cols-2">

                                    <h1 class="fs-1">Grooming</h1>

                                    <div class="col-md-12 mt-2">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ route('home-customer') }}">Home</a></li>
                                                <li class="breadcrumb-item"><a href="{{ route('grooming-customer') }}">Grooming</a></li>
                                                <li class="breadcrumb-item"><a href="">Grooming Detail</a></li>
                                            </ol>
                                        </nav>
                                    </div>

                                    <!-- Setengah layar pertama untuk tabel -->
                                    <div class="col-md-6 mb-3" style="height: 100%;">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="fs-4">{{ $detail->grooming_nama }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fs-6">Deskripsi :</td>
                                                    <td class="fs-6">:</td>
                                                    <td class="fs-6" style="text-align: justify;">{{ $detail->deskripsi }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-6">Harga</td>
                                                    <td class="fs-6">:</td>
                                                    <td class="fs-6">Rp. 70.000 - 120.000</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="py-3">
                                                        <div class="d-flex">
                                                            <button type="button" class="btn mx-2" style="background-color: #FF6701; color: #FFFFFF;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pesan Sekarang!" data-toggle="modal" data-target="#exampleModal">Pesan</button>
                                                            <a href="{{ route('grooming-customer') }}">
                                                                <button type="button" class="btn btn-secondary text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="Gamau Pesan?">Kembali</button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <!-- Setengah layar kedua untuk gambar -->
                                    @if($detail->image)
                                    <div class="col-md-6 mb-3 d-flex justify-content-center" style="height: 100%;">
                                        <img class="card-img-top mb-5 mb-md-0" src="{{ url('grooming-image'.'/'.$detail->image) }}" alt="..." style="width: 25rem;" />
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </section>

        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pesan.store') }}" method="POST">
                            @csrf

                            <input type="text" class="form-control" id="id_customer" name="id_customer" value="{{ auth()->id() }}" hidden>

                            <div class="form-group">
                                <label for="kucing_nama">Nama Kucing</label>
                                <input type="text" class="form-control" id="kucing_nama" name="kucing_nama">
                            </div>

                            <div class="form-group">
                                <label for="id_kondisi">Kondisi:</label>
                                <select name="id_kondisi" id="id_kondisi" class="form-control form-control-pesan">
                                    <option value="">Kondisi Kucing</option>
                                    @foreach($dataKondisi as $kondisi)
                                    <option value="{{ $kondisi->id }}">
                                        {{ $kondisi->kondisi_kesehatan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_jenis">Jenis:</label>
                                <select name="id_jenis" id="id_jenis" class="form-control form-control-pesan">
                                    <option value="">Jenis Kucing</option>
                                    @foreach($dataJenis as $jenis)
                                    <option value="{{ $jenis->id }}">
                                        {{ $jenis->jenis_nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">

                                <label for="id_jenis">Berat:</label>

                                <input type="number" class="form-control form-control-pesan @error('kucing_berat') is-invalid @enderror" placeholder="Berat Kucing (kg)" id="kucing_berat" name="kucing_berat" value="{{ old('kucing_berat') }}" required autocomplete="kucing_berat" autofocus>

                                @error('kucing_berat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="id_grooming">Layanan:</label>
                                <select name="id_grooming" id="id_grooming" class="form-control form-control-pesan">
                                    <option value="{{ $detail->id }}">
                                        {{ $detail->grooming_nama }}
                                    </option>
                                </select>
                            </div>
                            <br>

                            <button type="submit" class="btn mb-3" style="background-color: #FF6701; color: #FFFFFF;">Pesan Grooming</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>