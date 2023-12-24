<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modern Business - Start Bootstrap Template</title>
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
                            <p class="lead fw-normal text-dark-50 mb-4">Tempat pelayanan terbaik untuk peliharaan kesayangan Anda. Disinilah keahlian, kehangatan, dan kepedulian bertemu, menciptakan lingkungan yang aman dan nyaman bagi mereka.</p>
                            <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="#scroll-target" href="#scroll-target">Grooming</a>
                            <a class="btn btn-lg" style="background-color: #FF6701; color: #FFFFFF;" href="#scroll-target" href="#scroll-target">Pet Hotel</a>
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
                        <h2 class="fw-bolder mb-0">Berikut pelayanan pelayanan yang tersedia</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="bi bi-droplet-fill"></i></div>
                                <h2 class="h5">Grooming</h2>
                                <p class="mb-0">Grooming atau memberikan perawatan secara menyeluruh merupakan sebuah kegiatan yang perlu dilakukan terhadap kucing peliharaan. Aktivitas grooming pada kucing peliharaan biasanya meliputi memandikan, menyikat dan menyisir bulu, memotong kuku, serta membersihkan area mata dan telinga.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="bi bi-calendar-week"></i></div>
                                <h2 class="h5">Pet Hotel</h2>
                                <p class="mb-0">Secara fisik pet hotel merupakan suatu tempat yang menyediakan berbagai fasilitas yang diperlukan oleh hewanhewan peliharaan. Berbagai macam fasilitas yang disediakan mulai dari perlengkapan-perlengkapan yang dibutuhkan seperti makanan hewan, kandang, dll.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="bi bi-palette-fill"></i></div>
                                <h2 class="h5">Snack and Food</h2>
                                <p class="mb-0">Snack hewan dengan beragam bentuk, mulai dari biskuit, makanan ringan, hingga jajanan lezat yang dibuat khusus untuk hewan. Terdapat makanan kering (kibble), makanan basah, dan makanan segar yang dapat disesuaikan dengan kebutuhan nutrisi spesifik hewan.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-gradient text-white rounded-3 mb-3" style="background-color: #FF6701;"><i class="bi bi-gift-fill"></i></div>
                                <h2 class="h5">Pet Toys</h2>
                                <p class="mb-0">Pet toys hadir dalam berbagai bentuk dan jenis untuk memenuhi kebutuhan bermain hewan peliharaan yang berbeda. Ada mainan kunyah untuk hewan yang senang mengunyah, mainan lempar tangkap untuk hewan yang aktif, mainan teka-teki untuk merangsang otak, dan mainan interaktif untuk bermain bersama pemilik.</p>
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
                    <img class="rounded-circle me-3" src="{{ asset('template/img/logo.png') }}" alt="..." />
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
                        <div class="text-center">
                            <h2 class="fw-bolder">From our blog</h2>
                            <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
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
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
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
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
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
                <!-- Call to action-->
                <aside class="bg-gradient rounded-3 p-4 p-sm-5 mt-5" style="background-color: #FF6701;">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                            <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                            </div>
                            <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
    @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>