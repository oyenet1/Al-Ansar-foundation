@extends('layouts.guest')
@section('title', 'teams')
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
                    <h1 class="text-capitalize head text-center text-white p-md-3 teko mt-n5">Management team</h1>
                </div>
            </div>
            <div class="row justify-content-center m-1 p-3">
                <div class="col-12 text-center">
                    <h5 class="trustee">Dr. M.K. Dikwa, mni</h5>
                    <p>Founder & President</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul class="">
                        <li>
                            <h5 class="trustee">Mohammed Baba Shehu</h5>
                            <p>Head of Operations</p>
                        </li>
                        <li>
                            <h5 class="trustee">Engr. Abdulmalik Mohammed Kyari</h5>
                            <p>Director ICT</p>
                        </li>
                        <li>
                            <h5 class="trustee">Aliyu Waziri</h5>
                            <p>Head of Account & Finance</p>
                        </li>
                        <li>
                            <h5 class="trustee">Jacob Andrew</h5>
                            <p>Admin/Operations(Asst.)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
