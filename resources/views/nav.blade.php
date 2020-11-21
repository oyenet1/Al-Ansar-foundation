<nav class="navbar navbar-expand-md navbar-light sticky-top m-0 bg-white text-success">
    <div class="container justify-content-between">
        <!-- Brand -->
        <a class="navbar-brand" href="/" class="logo">
            <img src="image/logo.png" alt="" srcset="" style="max-width: 100px;" class="d-none d-lg-block logo-lg">
            <img src="image/logo.png" alt="" srcset="" style="max-width: 80px;" class="d-lg-none logo-sm">

        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler bg-orange" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto text-uppercase roboto">
                <!-- !-- Dropdown -->
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('volunteer') }}" id="navbardrop"
                        data-toggle="dropdown">
                        who we are
                    </a>
                    <div class="dropdown-menu text-capitalize">
                        <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                        <a class="dropdown-item" href="{{ route('board.index') }}">Board of trustees</a>
                        <a class="dropdown-item" href="{{ route('team.index') }}">management team</a>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{ route('organisation') }}">Organisations</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop"
                        data-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu text-capitalize">
                        <a class="dropdown-item" href="#">Education</a>
                        <a class="dropdown-item" href="#">Health</a>
                        <a class="dropdown-item" href="#">Humanitarian Support</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('volunteer') }}" id="navbardrop"
                        data-toggle="dropdown">
                        Media Center
                    </a>
                    <div class="dropdown-menu text-capitalize">
                        <a class="dropdown-item" href="#">Latest News</a>
                    <a class="dropdown-item" href="{{ route('publication.index') }}">Publications</a>
                        <a class="dropdown-item" href="#">Videos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('contact') }}">Contact</a>
                </li>


                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('volunteer') }}" id="navbardrop"
                        data-toggle="dropdown">
                        Volunteer
                    </a>
                    <div class="dropdown-menu text-capitalize">
                        <a class="dropdown-item" href="#">Volunteer Faculty</a>
                        <a class="dropdown-item" href="#">Volunteer Mentor</a>
                        <a class="dropdown-item" href="#">Volunteer Advisors</a>
                    </div>
                </li>
                <li class="nav-item bg-outline-success border border-success">
                    <a class="nav-link text-capitalize donate px-3" href="{{ route('donate') }}">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
