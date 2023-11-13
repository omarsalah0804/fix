@extends('pages.layout.master')


@section('content')

    <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                    <li class="breadcrumb-item active" style="color:#34425D" aria-current="page"><b>Services</b></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->




    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4">Look At Our Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100 ">
                        <img class="bg-img" src="categoryImages/{{$category->image}}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" height="80px" width="80px" src="logoImages/{{$category->logo}}" alt="Icon">
                            <h3 class="mb-3"> {{$category->name}}</h3>
                            <p class="mb-4">{{$category->description}}</p>
                            <a class="btn" href="{{ route('services.show',$category->id) }}"><i class="fa fa-plus me-3" style="color: #34425D"></i>Read More</a>

                        </div>
                    </div>
                </div>
                @endforeach

</div></div></div>









   @endsection
