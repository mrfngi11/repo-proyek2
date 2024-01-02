<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('template/landing/head')
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
                    @include('template/landing/navlink')
        <!-- Header-->
        <header class="py-5" style="background-color: #FFC288;">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">
                        <span style="color: #000000;">About </span>
                        <span style="color: #FF6701;">Hachi</span></h1>
                            <p class="lead fw-normal mb-4" style="text-align: justify;">Toko pet shop yang ternama di wilayah indramayu berdiri sejak 2015. Kami menyediakan berbagai makanan hewan peliharaan untuk kucing dan anjing. Disini juga kami menyediakan kandang kucing dan anjing. Berbagai jenis pakan yang bermerk dan mainan hewan peliharaan tersedia. Kami juga menerima jasa titip hewan peliharaan, jasa mandiin hewan peliharaan.Ayo kunjungi toko pet shop kami.</p>
                            <a class="btn btn-lg" href="#scroll-target" style="background-color: #FF6701; color: #FFFFFF;">Read our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5" style="background-color: #FCECDD;" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('template/img/kucing-about.jpg') }}" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Offline Store</h2>
                        <p class="lead fw-normal mb-0">Jl. Tanjungpura Ruko Grand Royal 2 Ruko No. 19 Karanganyar Kecamatan Indramayu Kabupaten Indramayu Jawa Barat 45213 Indonesia</p>
                        <a class="btn btn-lg my-3" style="background-color: #FF6701; color: #FFFFFF;" href="https://www.google.com/maps/dir//Jl.+Tanjungpura+Ruko+Grand+Royal+2,+Ruko+No.2,+Karanganyar,+Kec.+Indramayu,+Kabupaten+Indramayu,+Jawa+Barat+45213/@-6.3384888,108.2505989,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e6ebead55d613ed:0x8416f3c9bb3ed086!2m2!1d108.3330008!2d-6.3384953?entry=ttu" target="_blank">view detail</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5" style="background-color: #FFC288;">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('template/img/kucing-abt2.jpg') }}" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Contact Us</h2>
                        <p class="lead fw-normal mb-2">Anda bisa menghubungi nomor berikut jika ada kesulitan ataupun pertanyaan terhadap Hachi Petshop </p>
                        <a class="nav-link" href="{{ route('welcome') }}">0818-0463-0496</a></li>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5" style="background-color: #FCECDD;">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder">Our team</h2>
                    <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Ibbie Eckart</h5>
                            <div class="fst-italic text-muted">Founder &amp; CEO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Arden Vasek</h5>
                            <div class="fst-italic text-muted">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Toribio Nerthus</h5>
                            <div class="fst-italic text-muted">Operations Manager</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Malvina Cilla</h5>
                            <div class="fst-italic text-muted">CTO</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
    @include('template/landing/footer')
    </footer>
    @include('template/landing/script')
</body>

</html>