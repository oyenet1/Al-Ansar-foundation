@extends('layouts.guest')
@section('title', 'About us')
@section('content')
    @include('nav')

    {{-- about us --}}
    <div class="container-fluid bg-milk" id="about">
        <div class="w-100" style="background-image: url('/image/about.jpg'); background-size: cover; ">
            {{-- <img src="/image/about3.jpg" alt="about us" class="w-100 invisible">
            --}}
            <div class="pad-5 w-100 trans"></div>
        </div>
        <div class="w-100 p-3 bg-success"></div>
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-12  mb-3">
                    <h1 class="text-capitalize head text-center p-md-3 teko">About Us</h1>
                </div>
                <div class="col-lg-6 p-1">
                    <p class="p">Al Ansar foundation is a non-profitable organization founded on the year 2001 at Maiduguri,
                        Borno state, Nigeria. Al Ansar foundation Focuses on helping the less privileged communities in the
                        areas of western and Islamic education, public healthcare, human capital developments, teaching
                        religious tolerance, environmental conservation, water mission-drilling bore holes to the poor
                        communities, supporting the orphans, women empowerment, building mosques and engages in charity
                        activities.</p>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="w-100 mb-3">
                        <p class="percent text-uppercase m-0 pb-1">acce-abuja <span class="text-capitalize float-right">70
                                Students</span> </p>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar bg-success bg-color" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 my-3">
                        <p class="percent text-uppercase m-0 pb-1">AL-ANSAR ACADEMY MAIDUGURI <span
                                class="text-capitalize float-right">60 Students</span> </p>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar  bg-success bg-color" role="progressbar" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>

                    </div>
                    <div class="w-100 my-3">
                        <p class="percent text-uppercase m-0 pb-1">AL-ANSAR ACADEMY NYANYA<span
                                class="text-capitalize float-right">50 students</span> </p>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar  bg-success bg-color" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            </div>
                        </div>

                    </div>
                    <div class="w-100 my-3">
                        <p class="percent text-uppercase m-0 pb-1">AL-ANSAR university MAIDUGURI <span
                                class="text-capitalize float-right">60 students</span> </p>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar  bg-success bg-color" role="progressbar" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>

                    </div>
                    <div class="w-100 my-3">
                        <p class="percent text-uppercase m-0 pb-1">AL-ANSAR wOMEN & CHILDREN HOSPITAL<span
                                class="text-capitalize float-right">90 patients</span> </p>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar  bg-success bg-color" role="progressbar" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-milk4">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 ">
                    <h3 class="our teko">Our Mission</h3>
                    <hr class="mt-2 bg-dark hr float-left" style="width: 50px"> <br>
                    <p class="mt-3">Providing service to humanity</p>
                </div>
                <div class="col-md-6 ">
                    <h3 class="our teko">Our Vision</h3>
                    <hr class="mt-2 bg-dark hr float-left" style="width: 50px"> <br>
                    <p class="mt-3">To improve the general well-being of the vulnerable people in our society and to provide
                        affordable education to our youths within the capacity of the Foundation</p>
                </div>
            </div>
        </div>
    </div>

    {{-- our values --}}
    <div class="container-fluid"
        style="background-color: rgba(0, 0, 0, 1); background-image: url('/image/about3.jpg'); background-size: cover;">
        <div class="container-fluid" style="background-color: rgba(0, 0, 0, .7);">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12 text-white">
                        <h3 class="our teko text-center text-white">Our Core Values</h3>
                        <hr class="mt-2 bg-white hr text-center" style="width: 50px"> <br>
                    </div>
                    <div class="col-md-12 text-white">
                        <p> In Al-Ansar Foundation we cherish and believe the following key words. Some of our core values
                            include:</p>

                        <ul class="fa-ul">
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Integrity</li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Respect</li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Honesty</li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Fairness</li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Trustworthiness
                            </li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Accountability
                            </li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Learning</li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Selflessness
                            </li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Responsibility
                            </li>
                            <li><span class="fa-li text-success"><i class="fas fa-check-square"></i></span> Servant
                                Leardership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- our affiliates --}}
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-md-12">
                <h3 class="our text-center m-4">Our Affilliates</h3>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/acce.png" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Acce-Abuja</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aau.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar University</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aam.jpeg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Academy, Maiduguri</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aan.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Academy, Nyanya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/atv.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Radio & TV</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/assl.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Security services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/awh.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar women and children hospital</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/achs.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar cleaning and hygeine services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aqms.jpeg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar quranic memorisation school</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/amf.jpeg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Masjid</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aam.jpeg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Academy, Maiduguri</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 round">
                                    <div class="rounded-circle p-4">
                                        <div class=""><img src="/image/aan.jpg" alt="imagename"
                                                class="mx-auto candidates d-block w-50"></div>
                                        <div class="w-100 d-block text-center">
                                            <p class="m-2">Al-Ansar Academy, Nyanya</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev text-success" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon text-success"></span>
                    </a>
                    <a class="carousel-control-next text-success" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon text-success"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
