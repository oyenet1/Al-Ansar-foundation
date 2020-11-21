@extends('layouts.guest')
@section('title', 'organisation')
@section('content')
    @include('nav')

    {{-- about us --}}
    <div class="container-fluid bg-white" id="about">
        <div class="w-100" style="background-image: url('/image/about.jpg'); background-size: cover; ">
            <div class="pad-5 w-100 trans"></div>
        </div>
        <div class="w-100 p-3 bg-success"></div>
        <div class="container">
            <div class="row justify-content-center p-3">
                <div class="col-md-12">
                    <h3 class="our teko">Al-Ansar Foundation Subsidiaries</h3>
                    <hr class="mt-2 bg-dark hr float-left" style="width: 50px"> <br> <br>
                    <p class="m-0 text-left pl-0">Al-Ansar Foundation is made up of other subsidiaries. They include but
                        not limited to the following:</p>
                </div>
            </div>
            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-8">
                    <h4 class="our teko text-orange">Al-Ansar Centre for Comprehensive Education (ACCE)</h4>
                    <p><span class="font-weight-bold">Al-Ansar Centre for Comprehensive Education
                            (ACCE):</span> &nbsp; ACCE was established in 2019. Our
                        aspiration is to provide the highest quality of
                        education in a safe and Islamic environment, and to
                        encourage excellence in academics and moral
                        development in order to give our students/pupils the
                        opportunity to reach their full potential. We hope to set
                        a strong foundation and standard for our future
                        generations.</p>
                </div>
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/acce.png" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
            </div>
            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/atv.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
                <div class="col-md-8">
                    <h4 class="our teko text-danger">Al-Ansar Radio/TV:</h4>
                    <p><span class="font-weight-bold">Al-Ansar Radio/TV:</span> &nbsp; was
                        established in 2020 with a vision of setting up a
                        leading diversified broadcast media organization in
                        Nigeria that leverages state-of-the-art facility to bring
                        new service and value to esteemed consumers
                        (audiences) and advertisers.
                    </p>
                </div>
            </div>

            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-8">
                    <h4 class="our teko dark-green">Al-Ansar Security Service Limited: </h4>
                    <p><span class="font-weight-bold">Al-Ansar Security Service Limited:</span> &nbsp; The Al-Ansar
                        Security Service Limited (ASSL) was established in
                        2020 with its Headquarters in Maiduguri, Borno
                        State. The Security outfit is envisioned to be a force to
                        reckoned with in the Private Industrial Security Sector
                        in Nigeria. Al-Ansar is committed to a quality and
                        total security solutions to numerous clients spread
                        across the length and breadth of the country</p>
                </div>
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/assl.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
            </div>

            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/aau.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
                <div class="col-md-8">
                    <h4 class="our teko text-danger">Al-Ansar University Maiduguri:</h4>
                    <p><span class="font-weight-bold">Al-Ansar University Maiduguri:</span> &nbsp; As part of efforts
                        to provide quantitative and qualitative education to
                        teeming youth population of Nigeria, the Al-Ansar
                        University was birthed.
                    </p>
                </div>
            </div>

            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-8">
                    <h4 class="our teko dark-green">Al-Ansar Women and Children's Hospital:</h4>
                    <p><span class="font-weight-bold">Al-Ansar Women and Children's Hospital: </span> &nbsp; The
                        vision behind the establishment of the Al-Ansar
                        Women and Children’s Hospital is to provide succour
                        to less privilege and vulnerable women and youths
                        who may not be able to afford the cost of medical in
                        conventional hospitals</p>
                </div>
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/awh.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
            </div>
            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/aam.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
                <div class="col-md-8">
                    <h4 class="our teko text-danger">Al-Ansar Academy Maiduguri:</h4>
                    <p><span class="font-weight-bold">Al-Ansar Academy Maiduguri</span> &nbsp; The Al-Ansar
                        Academy Maiduguri is a specialized school
                        comprises of Kindergartens, Primary and Secondary
                        Schools that provide both Islamic and Western
                        Education. The main purpose is to ensure that
                        children acquire quality education at the basic school
                        level.

                    </p>
                </div>
            </div>

            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-8">
                    <h4 class="our teko dark-blue">Al-Ansar Academy, Nyanya Abuja:</h4>
                    <p><span class="font-weight-bold">Al-Ansar Academy, Nyanya Abuja: </span> &nbsp; Al-Ansar
                        Academy Nyanya Abuja is Primary and Secondary
                        School established in 2020 located in one of the
                        Satellites town in Abuja. The Academy comprises of
                        both day and boarding facilities.
                    </p>
                </div>
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/aan.jpg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
            </div>

            <div class="row d-flex org align-items-center p-3 m-2" style="background-color: rgba(230, 235, 230, .6);">
                <div class="col-md-4 p-md-3 p-2 org2 p-lg-4 p-xl-5 d-flex align-items-center">
                    <img src="/image/aqms.jpeg" alt="" class="org mx-auto d-block" style="max-width: 70%">
                </div>
                <div class="col-md-8">
                    <h4 class="our teko text-success">Al-Ansar Qur'anic Memorization School,
                        Maiduguri:</h4>
                    <p><span class="font-weight-bold">Al-Ansar Qur'anic Memorization School,
                            Maiduguri:</span> &nbsp; This school provides modern state-ofthe-art facilities for students to
                        learn how to memorize
                        the Holy Koran.
                    </p>
                </div>
            </div>

        </div>
    </div>

@endsection
