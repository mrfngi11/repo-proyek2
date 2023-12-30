<nav class="navbar navbar-expand-lg navbar-danger sticky-top" style="background-color: #FCECDD;">
    <div class="container px-5">
        <div class="d-flex flex-wrap align-items-end">
            <h2 class="navbar-brand display-5 fw-bolder text-dark mb-2" href="{{ route('welcome') }}">
                <span style="color: #000000;">Hachi</span>
                <span style="color: #FF6701;">Petshop</span>
            </h2>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home-customer') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('grooming-customer') }}">Grooming</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pethotel-customer') }}">Pet Hotel</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about-customer') }}">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="{{ route('service-customer') }}">Service</a></li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Info</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="">
                                <i class="fas fa-hotel fa-sm fa-fw text-primary"></i>
                                <span>Reservasi</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="">
                                <i class="fas fa-shower fa-sm fa-fw text-primary"></i>
                                <span>Grooming</span>
                            </a>
                        </li>
                        <hr>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw text-primary"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>