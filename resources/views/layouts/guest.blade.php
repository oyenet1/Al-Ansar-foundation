<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Anton&family=Noto+Serif:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Atma:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/font/stylesheet.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>

    {{-- footer --}}
    <footer class="bg-color bg-black noto">
        <div class="container">
            <div class="d-flex text-white justify-content-between flex-wrap">
                <div class="p-2" style="max-width: 300px;">
                    <h4 class="teko text-success">
                        Head Office - Abuja
                    </h4>

                    <table class="table table-borderless text-white">
                        <tr>
                            <td>
                                <i class="fas fa-map text-color-2"></i>
                            </td>
                            <td class="text-capitalize">
                                Plot 42a, Idanre Hill street, off Wikki Spring Street, off agulu lake street, off <span class="text-uppercase">ibb</span> way Maitama, Abuja.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-phone-square-alt text-color-2 "></i>
                            </td>
                            <td>
                                (+234) 705-1118-203
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-envelope-open-text text-color-2"></i>
                            </td>
                            <td>
                                <a href="mailto:info@al-ansar-foundation.com" class="text-white">info@al-ansar-foundation.com</a>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="p-2" style="max-width: 300px;">
                    <h4 class="teko text-success">
                        Maiduguri Office
                    </h4>

                    <table class="table table-borderless text-white">
                        <tr>
                            <td>
                                <i class="fas fa-map text-color-2"></i>
                            </td>
                            <td class="text-capitalize">
                                No 1 gombole road, old gra Maiduguri. Borno state <span class="text-uppercase">ibb</span> way Maitama, Abuja.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-phone-square-alt text-color-2 "></i>
                            </td>
                            <td>
                                (+234) 705-1118-203
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-envelope-open-text text-color-2"></i>
                            </td>
                            <td>
                                <a href="mailto:info@al-ansar-foundation.com" class="text-white">info@al-ansar-foundation.com</a>
                            </td>
                        </tr>
                    </table>

                </div>

                <!-- let get connected -->
                <div class="p-2" style="max-width: 300px;">
                    <h4 class="teko text-success">Social Media</h4>
                    <div class="">
                        <ul class="list-unstyled">
                            <li class="list-inline-item m-2">
                                <a href="https://www.facebook.com/acceabuja"
                                    class="d-flex align-items-center fb text-decoration-none icon-color-2" target="_blank">
                                    <i class="fab fa-facebook fa-2x mr-2 "></i>
                                    <span class="text-white">Facebook</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="https://twitter.com/acce_abuja"
                                    class="d-flex align-items-center tw text-decoration-none icon-color-2"
                                    target="_blank"><i class="fab fa-twitter-square fa-2x mr-2  "></i>
                                    <span class="text-white">Twitter</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="#" class="d-flex align-items-center text-decoration-none icon-color-2 int"
                                    target="_blank"><i class="fab fa-instagram fa-2x mr-2  "></i>
                                    <span class="text-white">Instagram</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="https://www.youtube.com/channel/UCC4qrHra0XKQcH5ThorYJeA"
                                    class="d-flex align-items-center you text-decoration-none icon-color-2"
                                    target="_blank"><i class="fab fa-youtube fa-2x mr-2" aria-hidden="true"></i>
                                    <span class="text-white">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-2" style="max-width: 300px;">
                    <h4 class="teko text-success">
                        Affiliate Links
                    </h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.mkdikwa.ng/" class="link d-flex align-items-center" target="_blank">
                                <img src="/image/al-founder.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Founder's Book Store</span> </a>
                        </li>

                        <li>
                            <a href="http://www.al-ansar-foundation.com" class="link d-flex align-items-center"
                                target="_black"><img src="/image/al-foundation.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Foundation</span></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-university.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar University</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-maiduguri.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Masjid</span> </a>
                        </li>
                        <li><a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-security.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Security Services
                                    Ltd.</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-nyanya.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Academy, Nyanya</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-achs.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Cleaning & Hygiene Services
                                    Ltd</span></a>
                        </li>
                        <li>
                        <li>
                            <a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-fm.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Radio & TV</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('home') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-hospital.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Women & Children
                                    Hospital</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="w-100 p3 m-0 bg-white"></p>
        <div class="m-0 p-1 black justify-content-center footer text-white small">
            <p class="text-center">Copyright <i class="fa fa-copyright text-color-2" aria-hidden="true"></i>
                Al-Ansar Foundation {{ date('Y') }}<br> Designed and Developed by <a href="http://netcodeweb.com.ng"
                    target="_blank" rel="noopener noreferrer" title="Click to visits" class="fira text-primary"
                    data-toggle="tooltip" data-placement="right">Networker</a>
            </p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
            $("fa-times").click(function() {
                $("carousel-caption").hide();
            });
        });

    </script>
</body>

</html>
