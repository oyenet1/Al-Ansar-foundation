@extends('layouts.guest')
@section('title', 'publication')
@section('content')
    @include('nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="/image/news2.jpg" alt="" class="w-100">
                <div class="w-100 bg-success p-3"></div>
            </div>
            <div class="col-12 mb-1">
                <h1 class="text-capitalize head text-center p-md-3 teko">News</h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 p-2 p-md-3 p-lg-4">
                    <a href="#" class="text-dark news">
                        <div class="card text-left">
                            <img class="card-img-top" src="/image/i1.jpeg" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-capitalize">Nile University Experience Sharing Tour</h4>
                                <p class="card-text text-dark">March 12, 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 p-2 p-md-3 p-lg-4">
                    <a href="#" class="text-dark news">
                        <div class="card text-left">
                            <img class="card-img-top" src="/image/11.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-capitalize">Taj bank founder & co-founder visit al-Ansar
                                    Foundation</h4>
                                <p class="card-text text-dark">August 20, 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 p-2 p-md-3 p-lg-4">
                    <a href="#" class="text-dark news">
                        <div class="card text-left">
                            <img class="card-img-top" src="/image/inau.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-uppercase">Inauguration of board members of Al-Ansar  radio and tv </h4>
                                <p class="card-text text-dark">November 21, 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
