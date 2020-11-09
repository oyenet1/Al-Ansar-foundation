<header>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top m-0 bg-success text-dark">
        <div class="container justify-content-between">
            <!-- Brand -->
            <a class="navbar-brand" href="/" class="logo">
                Homepage
                {{-- <img src="image/logo.png" alt="" srcset=""
                    style="max-width: 400px;" class="d-none d-lg-block logo-lg">
                <img src="image/logo1.png" alt="" srcset="" style="max-width: 80px;" class="d-lg-none logo-sm">
                --}}
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler bg-orange" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <!-- !-- Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-capitalize" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item bg-white donate">
                        <a class="nav-link text-capitalize donate px-3" href="{{ route('donate') }}">Donate</a>
                    </li>

                    {{--
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <video id="video" width="100%" autoplay loop>
        <source src="al-ansar.mp4" type="video/mp4">
    </video>
    {{-- <iframe width="100%" class="video" src="https://www.youtube.com/embed/dpu2F1BIKFA?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
</header>
