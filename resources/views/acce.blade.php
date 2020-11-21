@extends('layouts.guest')
@section('title', 'About us')
@section('content')
    @include('nav')

    {{-- about us --}}
    <div class="container-fluid bg-milk" id="about">
        <div class="w-100" style="background-image: url('/image/about.jpg'); background-size: cover; ">
            {{-- <img src="/image/about3.jpg" alt="about us" class="w-100 invisible"> --}}
            <div class="pad-5 w-100 trans"></div>
        </div>
        <div class="w-100 p-3 bg-success"></div>
        <div class="container">
            <div class="row justify-content-center p-5">

            </div>
        </div>
    </div>
@endsection
