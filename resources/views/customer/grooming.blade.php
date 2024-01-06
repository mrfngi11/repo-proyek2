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

                    <div class="col-xl-10 col-lg-12 col-md-3">

                        <!-- Product section-->
                        <section class="py-2">

                            <h1 class="fs-1">Grooming</h1>

                            <div class="col-md-12 mt-2">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home-customer') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="">Grooming Detail</a></li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="container">
                                <div class="row d-flex justify-content-around">
                                    @foreach($dataGrooming as $key => $grooming)
                                    <div class="col-md-5 mb-4">
                                        <div class="card shadow border-0" style="width: 20rem;">
                                            <img src="{{ url('grooming-image'.'/'.$grooming->image) }}" class="card-img-top" style="width: 20rem; height: 16rem; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3 py-3">{{$grooming->deskripsi}}</h5>
                                                <a href="{{ url('customer-grooming') }}/{{$grooming->id}}" class="btn" style="background-color: #FF6701; color: #FFFFFF;">Detail</a>
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
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>