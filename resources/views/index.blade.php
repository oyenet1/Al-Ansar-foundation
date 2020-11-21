@extends('layouts.guest')
@section('title', 'Al-Ansar Foundation')
@section('content')

    {{-- header with video --}}
    @include('header')

    {{-- brief details --}}
    <div class="container-fluid text-white" style="background-image: linear-gradient(125deg,#23eeaa, red,yellow)">
        <div class="container">
            <div class="row">
                <div class="col-12 p-5 justify-content-between">
                    <h3>We are Nigeria's number one humanitarian support Foundation providing service to humanity.</h3>
                    <a href="{{ route('about') }}" class="btn bg-white text-success" style="max-width: fit-content">Read
                        More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white negative" id="about">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-lg-6 p-1">
                    <h5 class="text-uppercase text-success" style="font-size: 2em">Welcome to <br><br> <span
                            class="big text-dark teko ">Al-Ansar <br> Foundation</span></h5>
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

    {{-- radio station --}}
    <div class="container-fluid mt-n5">
        <div class="container bg-trans mt-n5 bg-white">
            <div class="row justify-content-start pb-5">
                <div class="col-sm-12 text-center bg-trans p-1">
                    <h4 style="border-bottom: 5px">Live stream on Al-Ansar Radio <span class="text-success">96.1 FM</span>
                        <audio id="audio_1" controls preload="none" style="width:16em;padding:0;"
                            class="mx-md-3 mx-lg-4 mx-sm-2 mx-1 btn alert-success">
                            <source src="/stream?type=http&amp;nocache=52" type='audio/mpeg'>
                        </audio>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    {{-- organisation --}}
    <div class="container-fluid bg-milk" id="service">
        <div class="container margin-negative bg-milk">
            <div class="row justify-content-start p-5 ">
                <div class="col-12 mb-1">
                    <h1 class="text-capitalize head text-center p-md-3 teko">Our affiliates</h1>
                </div>
                <hr class="bg-dark w-100">
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white px-3 pt-3">
                        <img class="card-img-top" src="/image/acce.png" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 ">Al-Ansar Center for comprehensive education</h5>
                            <a href="https://acce-abuja.com.ng/" class="btn btn-sm btn-success my-2 stretched-link d-none"
                                target="_blank">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/aau.jpg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 ">Al-Ansar University</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/aam.jpeg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 ">Al-Ansar Academy, Maiduguri</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/aan.jpg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 ">Al-Ansar Academy, Nyanya</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/atv.jpg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar Radio & <span
                                    class="text-uppercase">TV</span></h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/assl.jpg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar Security services</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/awh.jpg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar women and children hospital</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/achs.jpeg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar cleaning and hygeine services</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/aqms.jpeg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar quranic memorisation school</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-6 p-3">
                    <div class="card bg-white">
                        <img class="card-img-top" src="/image/amf.jpeg" alt="acce" class="">
                        <div class="card-body p-0 text-center">
                            <h5 class="text-capitalize text-dark mt-2 px-1">Al-Ansar Masjid</h5>
                            <a href="#" class="btn btn-sm btn-success my-2 stretched-link d-none" target="_blank"
                                title="Coming Soon" data-toggle="tooltip" data-placement="bottom">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- news --}}
    {{-- <div class="container-fluid bg-white">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="m-4 text-center teko">NEWS</h1>
                </div>
                <div class="col-md-6 col-lg-5 col-sm-10 p-3">
                    <div class="card text-left news">
                        <img class="card-img-top" src="/image/i1.jpeg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Nile University Experience sharing Tour</h4>
                            <p class="card-text text-secondary">March 12, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-sm-10 p-3">
                    <div class="card text-left news">
                        <img class="card-img-top" src="/image/11.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Jaiz Bank Founder & Co-Founder Visit to Al-Ansar Foundation</h4>
                            <p class="card-text text-secondary">March 12, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    {{-- Contact us --}}
    <div class="container-fluid bg-milk4" id="contact">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-12">
                    <h1 class="text-capitalize head text-center teko">Get in touch</h1>
                </div>
                <div class="col-12">
                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=9.0959966,%207.506090+(Al-Ansar%20Foundation)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <div class="p-2 bg-success w-100 m-0"></div>
                </div>
                <div class="col-md-6 col-lg-4 p-3">
                    <div class="p-3 text-center border border-dark bg-white">
                        <i class="fas fa-map-marker-alt fa-3x text-color text-success "></i>
                        <h5 class="m-3">Address</h5>
                        <p>42a Idanre Hills St, Maitama, Abuja, Nigeria.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-3">
                    <div class="p-3 text-center border border-dark bg-white">
                        <i class="fas fa-blender-phone fa-3x text-color text-success "></i>
                        <h5 class="m-3">Phone</h5>
                        <p>+234 907 777 7288</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 p-3">
                    <div class="p-3 text-center border border-dark bg-white">
                        <i class="fas fa-envelope fa-3x text-color text-success "></i>
                        <h5 class="m-3">Email</h5>
                        <p>info@al-ansar-foundation.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
