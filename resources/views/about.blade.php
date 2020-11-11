@extends('layouts.guest')
@section('title', 'About us')
@section('content')
    @include('nav')

    {{-- about us --}}
    <div class="container-fluid bg-milk" id="about">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-12  mb-3">
                    <h1 class="text-capitalize head text-center p-md-3">About Us</h1>
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
@endsection
