@extends('layouts.admin')
@section('title', Auth::user()->name ?? 'Admin' )
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">You are login in as Admin</div>
            <i class="fab fa-facebook text-primary fa-2x  "></i>
        </div>
    </div>
@endsection
@section('script')
@endsection
