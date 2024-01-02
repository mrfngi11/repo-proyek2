<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column" style="background-color: #FFC288;">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-3">

                        <!-- Product section-->
                        <section class="py-2">
                            <h2 class="mb-3">PetHotel</h2>

                            <div class="col-md-12 mt-2">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home-customer') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="">Pet Hotel</a></li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="container">
                                <div class="row">
                                    @foreach($dataKamar as $key => $kamar)
                                    <div class="col-md-4 mb-4">
                                        <div class="card shadow border-0" style="width: 20rem;">
                                            <img src="{{ url('kamar-image'.'/'.$kamar->image) }}" class="card-img-top" style="width: 20rem; height: 16rem; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3 py-3">{{$kamar->no_kamar}}</h5>
                                                <a href="{{ url('customer-pethotel') }}/{{$kamar->id}}" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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

                <div class="row">
                    <div class="col-md-4 col-md-3 mb-5">
                        @foreach($dataKamar as $key => $kamar)
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ url('kamar-image'.'/'.$kamar->image) }}" />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">{{$kamar->no_kamar}}</h5>
                                </a>
                                <p class="card-text mb-0">{{ $kamar->deskripsi }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-info">p</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
                        <form action="{{ route('reservasi.store') }}" method="POST">
                            @csrf

                            <input type="text" class="form-control" id="id_customer" name="id_customer" value="{{ auth()->id() }}" hidden>

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