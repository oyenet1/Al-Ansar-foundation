@extends('layouts.guest')
@section('title', 'Al-Ansar Foundation')
@section('content')
    @include('nav')
    <div class="container-fluid bg-milk4">
        <div class="container"
            style="background-image: url('/image/money2.jpg'); background-attachment: fixed; background-size: cover">
            <div class="row justify-content-center p-3" style="background-color: rgba(200, 200, 200, .5)">
                <div class="col-12 m-0">
                    <h2 class="head m-0 alfa anton text-white">Make a Donation</h2>
                    <p></p>
                </div>
                <div class="col-lg-6 p-1 rounded m-0">
                    <img src="/image/logo.png" alt="" class="d-block w-100 rounded">
                </div>
                <div class="col-lg-6 m-0 bg-milk p-2 rounded">

                    <h4>Help Build This Foundation</h4>
                    <fieldset class="m-2">
                        <legend class="text-success bg-white">Paysatck Payment Gateway</legend>
                        <button class="btn m-1 btn-outline-success paystack-1000">&#8358;1,000</button>
                        <button class="btn m-1 btn-success paystack-5000">&#8358;5,000</button>
                        <button class="btn m-1 btn-outline-success paystack-10000">&#8358;10,000</button>
                        <button class="btn m-1 btn-outline-success paystack-50000">&#8358;50,000</button>
                        <button class="btn m-1 btn-outline-success paystack-100000">&#8358;100,000</button>
                        <button class="btn m-1 btn-outline-success paystack-other">Other</button>
                    </fieldset>

                    <fieldset class="m-2">
                        <legend class="text-success bg-white m-0">Donation Type</legend>
                        <small class="text-dark d-none1 w-100 m-0 p-0">How often do you want to make this donation</small> <br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success">Apple</button>
                            <button type="button" class="btn btn-success">Samsung</button>
                            <button type="button" class="btn btn-success">Sony</button>
                          </div>

                    </fieldset>

                    @php
                    $length = 17;
                    $pool = '1234'. 'al-foundation';
                    $pool = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
                    @endphp

                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                        role="form">
                        <input type="hidden" name="email" value="support@al-ansar-foundation.com">
                        <input type="hidden" name="orderID" value="345">
                        <input type="hidden" name="amount" value="500000" class="amount form-control">
                        <small class="text-dark d-none1 w-100">The amount in kobo kindly add double 00 (e.g 500 = #5)</small>
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="currency" value="NGN">

                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value']) }}">
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                        {{ csrf_field() }}
                        <button class="btn btn-success btn-lg w-100" type="submit" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i> Donate
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
