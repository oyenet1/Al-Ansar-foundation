@extends('layouts.guest')
@section('title', 'Al-Ansar Foundation')
@section('content')
    @include('nav')
    {{-- Contact us --}}
    <div class="container-fluid bg-milk4" id="contact">
        <div class="row justify-content-center bg-trans z-index-n1">
            <div class="col-12 p-100">
                <h1 class="text-capitalize head text-center teko">Contact Us</h1>
            </div>
        </div>
        <div class="container mt-up bg-white">
            <div class="row justify-content-center p-2 back">
                <div class="col-lg-6 p-0">
                    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=9.0959966,%207.506090+(Al-Ansar%20Foundation)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <div class="p-2 bg-success w-100 m-0"></div>
                </div>
                <div class="col-lg-6 p-0 bg-milk4">
                    {{-- flash message --}}
                    @if (session('mssg'))
                        <div class="alert alert-success session alert-dismissible alert-bottom">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fa fa-check-circle" aria-hidden="true"></i> </strong>
                            {{ session('mssg') }}
                        </div>
                    @endif
                    <form action=" {{ route('contact.store') }} " class="m-0 py-3 px-2" method="POST">
                        @csrf
                        <div class="form-group d-flex justify-content-between row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" id="" class="form-control" placeholder="Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" id="" class="form-control " placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group d-flex justify-content-between row">
                            <div class="form-group col-md-6">
                                <input type="number" name="phone" id="" class="form-control " placeholder="Phone"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="subject" id="" class="form-control " placeholder="Subject"
                                    value="{{ old('subject') }}">
                                @error('subject')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            @error('message')
                                <span class="text-danger small"> {{ $message }} </span>
                            @enderror
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                placeholder="Your Message here" value="{{ old('message') }}">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn-color btn-success small btn float-right my-2">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center">
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
