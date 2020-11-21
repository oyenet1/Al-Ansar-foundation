@extends('layouts.guest')
@section('title', 'board of trustees')
@section('content')
    @include('nav')

    {{-- about us --}}
    <div class="container-fluid bg-milk" id="about">
        <div class="w-100" style="background-image: url('/image/about3.jpg'); background-size: cover; ">

            <div class="pad-5 w-100 trans"></div>
        </div>
        <div class="w-100 p-3 bg-danger"></div>
        <div class="container">
            <div class="row justify-content-center mt-n5 p-5">
                <div class="col-12 mt-n5  mb-3">
                    <h1 class="text-capitalize head text-center text-white p-md-3 teko mt-n5">Board of trustees</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 p-3 text-center">
                    <a href="" class="text-black trustee">
                        <img src="/image/dikwa.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Dr. M.K. Dikwa, mni, Ph.D., FCNA, FCTI, FCMA, FCPA, FICA, MNIM, MCIPS, ACA.</h5>
                        <p class="text-secondary">Founder & President</p>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee3.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Mohammed Baba Shehu</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee4.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Engr. Abdulmalik Mohammed Kyari</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee1.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Ibrahim Hamza</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee2.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Alhaji Muhammad Kyari</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee5.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Alhaji Mustapha Goni</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 p-3 text-center d-block">
                    <a href="" class="text-black trustee">
                        <img src="/image/trustee6.jpg" alt="" class="w-100 img-thumbnail mb-2 rounded-circle">
                        <h5>Babagana Mammam Kyari</h5>
                        <p class="text-secondary">Trustee</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
