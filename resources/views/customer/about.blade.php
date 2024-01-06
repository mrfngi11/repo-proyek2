<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Header-->
        <header class="py-5" style="background-color: #FFC288;">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">
                                <span style="color: #000000;">About </span>
                                <span style="color: #FF6701;">Hachi</span>
                            </h1>
                            <p class="lead fw-normal mb-4" style="text-align: justify;">Toko pet shop yang ternama di wilayah indramayu berdiri sejak 2015. Kami menyediakan berbagai makanan hewan peliharaan untuk kucing dan anjing. Disini juga kami menyediakan kandang kucing dan anjing. Berbagai jenis pakan yang bermerk dan mainan hewan peliharaan tersedia. Kami juga menerima jasa titip hewan peliharaan, jasa mandiin hewan peliharaan.Ayo kunjungi toko pet shop kami.</p>
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
                        <h5>0818-0463-0496</h5>
                        </li>
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