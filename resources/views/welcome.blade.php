<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modern Business - Start Bootstrap Template</title>
    @include('template/landing/head')
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('template/landing/navlink')
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
                                <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="https://www.google.com/maps/dir//Jl.+Tanjungpura+Ruko+Grand+Royal+2,+Ruko+No.2,+Karanganyar,+Kec.+Indramayu,+Kabupaten+Indramayu,+Jawa+Barat+45213/@-6.3384888,108.2505989,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e6ebead55d613ed:0x8416f3c9bb3ed086!2m2!1d108.3330008!2d-6.3384953?entry=ttu" target="_blank">view detail</a>
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
                        <div class="text-center">
                            <h2 class="fw-bolder">From our blog</h2>
                            <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('template/img/galeri-kucing.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Blog post title</h5>
                                </a>
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2023 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('template/img/galeri-kucing.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Blog post title</h5>
                                </a>
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2023 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('template/img/galeri-kucing.png') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Blog post title</h5>
                                </a>
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2023 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
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