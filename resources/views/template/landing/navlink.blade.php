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
                <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Masuk</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt fa-sm fa-fw text-primary mx-1"></i>
                                <span>Login</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">
                                <i class="fas fa-user-plus fa-sm fa-fw text-primary mx-1"></i>
                                <span>Register</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>