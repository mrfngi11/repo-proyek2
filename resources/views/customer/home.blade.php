<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Header-->
        <header class="py-5" style="background-color: #FFC288;">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-dark mb-2">Hachi Petshop Indramayu</h1>
                            <p class="lead fw-normal text-dark-50 mb-4" style="text-align: justify;">Tempat pelayanan terbaik untuk peliharaan kesayangan Anda. Disinilah keahlian, kehangatan, dan kepedulian bertemu, menciptakan lingkungan yang aman dan nyaman bagi mereka.</p>
                            <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="#scroll-target" href="#scroll-target">
                                <i class="fas fa-paw"></i>
                                <span>Grooming</span>
                            </a>
                            <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="#scroll-target" href="#scroll-target">
                                <i class="fas fa-paw"></i>
                                <span>Pet Hotel</span>
                            </a>
                            <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('template/img/cat.jpg') }}" alt="cat" /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" style="background-color: #FCECDD;" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">Berikut Pelayanan yang Tersedia</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="fas fa-shower"></i></div>
                                <h2 class="h5">Grooming</h2>
                                <p class="mb-0" style="text-align: justify;">Grooming atau memberikan perawatan secara menyeluruh merupakan sebuah kegiatan yang perlu dilakukan terhadap kucing peliharaan. Aktivitas grooming pada kucing peliharaan biasanya meliputi memandikan, menyikat dan menyisir bulu, memotong kuku, serta membersihkan area mata dan telinga.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="fas fa-hotel"></i></div>
                                <h2 class="h5">Pet Hotel</h2>
                                <p class="mb-0" style="text-align: justify;">Secara fisik pet hotel merupakan suatu tempat yang menyediakan berbagai fasilitas yang diperlukan oleh hewanhewan peliharaan. Berbagai macam fasilitas yang disediakan mulai dari perlengkapan-perlengkapan yang dibutuhkan seperti makanan hewan, kandang, dll.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="fas fa-cookie"></i></div>
                                <h2 class="h5">Snack and Food</h2>
                                <p class="mb-0" style="text-align: justify;">Snack hewan dengan beragam bentuk, mulai dari biskuit, makanan ringan, hingga jajanan lezat yang dibuat khusus untuk hewan. Terdapat makanan kering (kibble), makanan basah, dan makanan segar yang dapat disesuaikan dengan kebutuhan nutrisi spesifik hewan.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="bi bi-gift-fill"></i></div>
                                <h2 class="h5">Pet Toys</h2>
                                <p class="mb-0" style="text-align: justify;">Pet toys hadir dalam berbagai bentuk dan jenis untuk memenuhi kebutuhan bermain hewan peliharaan yang berbeda. Ada mainan kunyah untuk hewan yang senang mengunyah, mainan lempar tangkap untuk hewan yang aktif, mainan teka-teki untuk merangsang otak, dan mainan interaktif untuk bermain bersama pemilik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5" style="background-color: #FFC288;">
            <div class="container px-2 my-2">
                <div class="row gx-5">
                    <div class="col-lg-3 mb-3 mb-lg-0 justify-content-center">
                        <img class="rounded-circle me-3" src="{{ asset('template/img/logo.png') }}"  alt="..."   />
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <h2 class="fw-bolder mb-0">Hachi Pet Shop</h2>
                                <p class="mb-0">mari mencoba pengalaman baru anda dalam perawatan kucing</p></br>
                                <p class="mb-0">kalian juga bisa datang ke offline store kami di bawah ini</p></br>
                                <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="#scroll-target">view detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5" style="background-color: #FCECDD;">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="row">
                            <div class="card h-100 d-flex justify-content-center">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4285767392903!2d108.3330008!3d-6.3384953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebead55d613ed%3A0x8416f3c9bb3ed086!2sHachi%20Petshop!5e0!3m2!1sid!2sid!4v1704214300538!5m2!1sid!2sid" width="600" height="550" style="border: 5px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="card-body">
                                </div>
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