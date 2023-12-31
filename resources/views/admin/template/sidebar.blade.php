<ul class="navbar-nav sidebar accordion" id="accordionSidebar" style="background-color: #FFC288;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text text-dark mx-3">HACHI PETSHOP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('home-admin') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Ya apa ya
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('user') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
        </a>
    </li>

    <!-- <hr class="sidebar-divider"> -->

    <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('kamar')}}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Kamar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('grooming')}}">
            <i class="fas fa-fw fa-shower"></i>
            <span>Grooming</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-info"></i>
            <span>Informasi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('pesan')}}">Informasi Pesanan</a>
                <a class="collapse-item" href="{{route('reservasi')}}">Infromasi Reservasi</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>{{ __('Logout') }}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>