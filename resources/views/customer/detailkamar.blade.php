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

                                    <h2 class="fs-1">Detail Kamar</h2>

                                    <div class="col-md-12 mt-2">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ route('home-customer') }}">Home</a></li>
                                                <li class="breadcrumb-item"><a href="{{ route('pethotel-customer') }}">Pet Hotel</a></li>
                                                <li class="breadcrumb-item"><a href="">Detail Kamar</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <!-- Setengah layar pertama untuk tabel -->
                                    <div class="col-md-6 mb-3" style="height: 100%;">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="fs-4">Informasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fs-5">{{ $detail->no_kamar }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-5">Deskripsi</td>
                                                    <td class="fs-5">:</td>
                                                    <td class="fs-5">{{ $detail->deskripsi }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-5">Harga</td>
                                                    <td class="fs-5">:</td>
                                                    <td class="fs-5">Rp. {{ number_format($detail->harga) }}</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="py-5">
                                                        <button type="button" class="btn mx-2" style="background-color: #FF6701; color: #FFFFFF;" data-toggle="modal" data-target="#exampleModal">Reservasi</button>
                                                        <a href="{{ route('pethotel-customer') }}">
                                                            <button type="button" class="btn btn-secondary text-white">Kembali</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <!-- Setengah layar kedua untuk gambar -->
                                    @if($detail->image)
                                    <div class="col-md-6 mb-3" style="height: 100%;">
                                        <img class="card-img-top mb-5 mb-md-0" src="{{ url('kamar-image'.'/'.$detail->image) }}" alt="..." style="width: 25rem;" />
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </section>

        <section class="py-5" style="background-color: #FCECDD;">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Pelayanan Lain:</h2>
                            <p class="lead fw-normal text-muted mb-5">Coba pelayanan kami yang lain! Kapan lagi memanjakan hewan kesayanganmu kalau bukan di sini</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('template/img/galeri-kucing.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Hotel Pet</h5>
                                </a>
                                <p class="card-text mb-0">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-info">p</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                        <form action="{{ route('reservasi.store') }}" method="POST">
                            @csrf

                            <input type="text" class="form-control" id="id_customer" name="id_customer" value="{{ auth()->id() }}" hidden>

                            <div class="form-group">
                                <label for="id_kamar">Kamar</label>
                                <select name="id_kamar" id="id_kamar" class="form-control form-control-reservasi">
                                    <!-- <option value="">Pilih Kamar</option> -->
                                    <option value="{{ $detail->id }}">
                                        {{ $detail->no_kamar }}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_kucing">Jumlah Kucing</label>
                                <input type="number" class="form-control" id="jumlah_kucing" name="jumlah_kucing" required>
                            </div>

                            <div class="form-group">
                                <label for="check_in">Check In</label>
                                <input type="date" class="form-control" id="check_in" name="check_in" required>
                            </div>

                            <div class="form-group">
                                <label for="check_out">Check Out</label>
                                <input type="date" class="form-control" id="check_out" name="check_out" required>
                            </div>
                            <br>

                            <button type="submit" class="btn mb-3" style="background-color: #FF6701; color: #FFFFFF;">Reservasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>