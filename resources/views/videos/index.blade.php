@extends('layouts.guest')
@section('title', 'publication')
@section('content')
    @include('nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="/image/read.jpg" alt="" class="w-100">
                <div class="w-100 bg-success p-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="card w-100 m-3">
                    <div class="card-header">
                        <h4>Publications</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-borderless">
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/image/policy-front.jpg" alt="" class=""
                                        style="max-height: 300px; width: auto">
                                    <div class="m-2 p-1" style="max-width: 400px">
                                        <h5 class="text-capitalize m-2">Al-Ansar Policy and Procedure manual</h5>
                                        <p class="m-2">Jan 1st, 2021</p>
                                        <p class="m-2 p-0">
                                            <a href="/file/policy.pdf" target="_blank" class="mr-2 text-dark bg-btn btn-sm">View</a>
                                            <a href="/file/policy.pdf" class=" text-dark bg-btn btn-sm" download>Download</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
