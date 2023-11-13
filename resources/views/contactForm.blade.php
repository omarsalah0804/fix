@extends('pages.layout.master')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>

                    <li class="breadcrumb-item text-primary active" aria-current="page"><b style="color: #34425D">Contact Us</b></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title" style="color: #34425D">Contact Us</h4>
            <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
        </div>


        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-between h-100">
                    <a href="https://maps.app.goo.gl/5U6Aju4UVzvC4dCD8" target="_blank">
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="border-radius: 50%; width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt" style="color:white"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h3 class="mb-0"> Aqaba , JORDAN</h3>
                        </div>
                    </div>
                    </a>
                    <a href="tel:+962799742617" target="_blank">
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="border-radius: 50%; width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt" style="color:white"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h3 class="mb-0">+962 799742617</h3>
                        </div>
                    </div>
                    </a>
                <a href="mailto:Fix@gmail.com" target="_blank">
                    <div class="bg-light d-flex align-items-center w-100 p-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="border-radius: 50%; width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open" style="color:white"></i>
                        </div>
                        <div class="ms-4">
                            
                            <p class="mb-2">Mail Us Now</p>
                            <h3 class="mb-0">Fix@gmail.com
                            
                            </h3>
                        </div>
                    </div>
                </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <p class="mb-4">Get In Touch<br>For more details or any complaints  ,Please Feel Free Contact Us
                </p>
                <form action="{{ route('contact.us.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="message " name="message" id="message" style="height: 150px">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" style="background-color: #34425D" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
