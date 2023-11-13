
@extends('pages.layout.master')


@section('content')
@if ($errors->any())
<div class="alert alert-danger" style="text-align: left">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative ">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/home.jpg' >">
                <img class="img-fluid " src="img/home.jpg"  alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">We Provide Best Home Repair Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">We possess cutting-edge technology, superior tools, high-quality products, a skilled workforce, exceeding client expectations, meeting industry demand, and bolstering economic growth.</p>
                                {{-- <a href="services/1" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Electrical-Services-img.png'>">
                <img class="img-fluid" src="img/Electrical-Services-img.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Electrical Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Our Team Can Complete Any Project With High Attention To Detail. Any Electrical Installation, Maintenance, And Repair Is Their Area Of Expertise. Let Us Know What We Can Do For You.</p>
                                <a href="services/1" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Plumbing-img.jpg'>">
                <img class="img-fluid" src="img/Plumbing-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Plumbing</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Whatever Your Plumbing Issues Are, (Fix) Can Help. Our Professional Plumbers Can Handle Everything From Preventing Leaks And Repairing Shower Heads To Installing Washing Machine Hookups And More. All Our Plumbing Work Is Done By Expert Plumbers Who Will Work With You To Discover The Best Solution For Your Home.</p>
                                <a href="services/2" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Air-Conditioner-img.jpg'>">
                <img class="img-fluid" src="img/Air-Conditioner-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Air Conditioner</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">At (Fix) Our Friendly And Well-Trained Air Conditioning Repair Technicians Have The Skillset To Service, Install, And Repair Hvac Systems Of All Makes And Models. We Arrive At Each Job With Industry-Grade Tools And Equipment That Allow Us To Make The Correct Diagnosis And Repairs Quickly.</p>
                                <a href="services/3" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Electronic-Devices-img.jpg'>">
                <img class="img-fluid" src="img/Electronic-Devices-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Electronic Devices</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">No Matter What Type Of Refrigerator Or Cookers And Washing Machine Is In Your Home, Our Team Will Get To Work On It Right Away. We Take Care Of Damaged Part Repairs And Replacements.</p>
                                <a href="services/4" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/House-Paint-img.jpg'>">
                <img class="img-fluid" src="img/House-Paint-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">House Paint</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Whether You’re Looking To Spruce Up A Small Home Or A Large Commercial Property, (Fix) Can Connect You To The Top Local Professionals Committed To Excellent Service.</p>
                                <a href="services/5" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Carpentry-Services-img.jpg'>">
                <img class="img-fluid" src="img/Carpentry-Services-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Carpentry Services</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Our Carpentry Services Specialize In A Wide Range Of Home Projects And Installations. During Your Initial Estimate With (Fix), Tell Us How We Can Help You And Exactly What You Would Like Installed Or Updated In Your Home. We Customize Every Project To Fit Your Specific Needs And Vision.</p>
                                <a href="services/6" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Blacksmith-img.jpg'>">
                <img class="img-fluid" src="img/Blacksmith-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Blacksmith</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Need Custom, Hand-Forged Kitchen Pot Racks, Hooks, Handles, Shelf Brackets And Outdoor Furniture? Let Us Turn Your Artistic Vision Into A Reality.</p>
                                <a href="services/7" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Furniture-Transfer-img.jpg'>">
                <img class="img-fluid" src="img/Furniture-Transfer-img.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Furniture Transfer</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">If You’re Not Sure How To Safely Handle Furniture Moving Or If You Need A Hand Rearranging Furniture Within Your Home, Our Professionally Trained Furniture Movers Can Help. Our Background-Checked Moving Teams Are Able To Help Stage Rooms Or Move Items Out For Renovations, And They Are Happy To Assist You In Any Way Possible.</p>
                                <a href="services/8" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Pest-Control-img.png'>">
                <img class="img-fluid" src="img/Pest-Control-img.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Pest Control</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Pest control employs advanced methods, skilled experts, and eco-friendly products to eliminate pests, ensuring safe and healthy environments.</p>
                                <a href="services/9" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Book A Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Maintenance-equipment-img.png'>">
                <img class="img-fluid" src="img/Maintenance-equipment-img.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Maintenance Equipment</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Maintenance equipment includes tools, machinery, and supplies used to uphold and repair various systems, ensuring their optimal functionality and longevity.</p>
                                <a href="services/10" class="btn btn-primary py-3 px-5 animated slideInLeft" style="border-radius: 25px; background-color:#0174BE; border-color:#0174BE">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon1">
                            <img src="img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Trusted Service Center</h3>
                        <p class="mb-0">Where We Employ Professional Technicians With Great Experience In Their Field In Order To Serve Customers To The Fullest.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon1">
                            <img src="img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Reasonable Price</h3>
                        <p class="mb-0">Our Prices Are Reasonable And Competitive With The Market In Order To Satisfy All Customers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon1">
                            <img src="img/icons/icon-4.png"  alt="Icon">
                        </div>
                        <h3 class="mb-3">24/7 Supports</h3>
                        <p class="mb-0">Our Services All The Time To Meet Customer Needs At All Times.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/man.jpg" alt="" style="object-fit: fill">
                        <img class="img-fluid" src="img/woman.jpg" alt="" style="object-fit: fill">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">Welcome To The Best Home Repair Services Center</h1>
                    
                    <p class="mb-4">

                        We Are Equipped With State Of The Art Technology, Better Tools, Top Quality Products And Highly Skilled Workforce To Deliver Beyond Clients Expectations And Meet The Growing Demand Of Our Operation And Industry, Simultaneously Contributing To The Economic Growth Of The Country.
                        </p>
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center " style=" border:5px solid #0174BE;width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">2</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Top 5 Workers</h4>
                <h1 class="display-5 mb-4">Your Opinion means a lot to us please rate them </h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-1 wow fadeInUp" data-wow-delay="0.1s">
                </div>
 @foreach($topFiveWorkers as $worker)
                <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.1s">


                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid imageRes" src="/images/{{$worker->image}}" style="width: 100% ; height:100%"  alt="">

                            <div class="team-social text-center">
                                {{-- <i class="fab fa-facebook-f"></i> --}}
                                <a class="btn btn-square" href="{{ route('workers.show', $worker->id) }}"><i class="bi bi-star"></i></a>
                                <a class="btn btn-square" href="{{ route('workers.show', $worker->id) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-square" href="{{ route('workers.show', $worker->id) }}"><i class="bi bi-pencil-square"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2"> {{$worker->name}}</h3>
                            @for($i=1; $i<=$worker->avg_rating; $i++)

                            <span class="text-primary"><i class="fa fa-star text-warning " ></i></span>
                            @endfor
                            {{-- <span class="text-primary">Designation</span> --}}
                            <br>
                           ( {{round($worker->avg_rating,2)}} )
                        </div>
                    </div>



                </div> @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">What They Say About Our Services</h1>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 20px;border-color:#0174BE;background-color: #0174BE" data-bs-whatever="@fat">Rate Us</button>
        </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($reviews as $review)
                 <div class="testimonial-item text-center" data-dot="<img  class='img-fluid' src='images/{{$review->user->image}}'  alt=''>">
                    <p class="fs-5">{{$review->comment}}</p>

                    <span class="text-primary">
                        @for($i=1; $i<=$review->rate; $i++)

                        <span><i class="fa fa-star text-warning"></i></span>
                        @endfor

                    </span>

                    <h3>{{$review->user->name}}</h3>
                </div>
                 @endforeach

            </div>
        </div>
    </div>
<!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Your Rate</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if (Auth::check())
            @else
            <div style=" text-align:left" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please Login!</strong> to make a rating.

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
              </div>
            @endif
            @if ($errors->any())
<div class="alert alert-danger" style="text-align: left">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
              <div class="mb-3">
                <form class="form form-vertical" method="POST" action="{{ route('store') }}">
               @csrf
                    @if (Auth::check())
                  <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                  @endif
                  {{-- <input type="number" value="{{ 1 }}" name="rate"> --}}
                          <div class="card-body">
                            <div id="stars_rating">
                              <p class="heading">Please rate me</p>
                              <div class="stars" >
                                <div class="star" >★</div>
                                <div class="star" >★</div>
                                <div class="star">★</div>
                                <div class="star" >★</div>
                                <div class="star" >★</div>
                              </div>
                              <p class="rates">
                                <span class="avg" hidden> </span>
                                {{-- |  --}}
                                Your Rating:<span class="rate"> </span>

                              </p>
                              <br>
                              <div class="search-container">
                                <textarea
                                  type="text"
                                  placeholder="Type your comment ..."
                                  id="movie-name"
                                  cols="40"
                                  name="comment"
                                  style="border-color: #34425d"


                                ></textarea>

                              </div>

                              <input type="hidden" value="" name="rate" id="ratingNum">
                            </div>
                {{-- <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name"> --}}
              </div>


          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            @if (Auth::check())
            <button type="submit" class="btn btn-primary">Rate</button>
            @else
            <button type="submit" disabled class="btn btn-primary" style="background-color: green; border-color:green">Rate</button>
            @endif
          </div>
            </form>
        </div>
      </div>
    </div>

    </div>


    <!-- Testimonial End -->

@endsection
