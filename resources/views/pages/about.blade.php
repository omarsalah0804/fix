@extends('pages.layout.master')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>

                    <li class="breadcrumb-item  active" style="color:#34425D" aria-current="page"><b>About Us</b></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center  " style="border:5px solid #0174BE; width: 120px; height: 120px;">
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




    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4">We Focused On Important<br>Services That You Need</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Electrical Services</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Plumbing</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Air Conditioner</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Electronic Devices</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Electrical-Services-img1.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Electrical Services</h1>
                                    <p class="mb-4">With a keen eye for detail, our team excels in handling diverse projects. Electrical installation, maintenance, and repair are their areas of expertise. Equipped with industry-grade tools, they ensure precise diagnostics and efficient solutions. Let us know how we can assist you with any electrical project.</p>
                                    <p><i class="fa fa-check me-3" style="color: #0174BE"></i>Fixing electrical problems</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Replace damaged parts</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Installing an electrical control panel</p>
                                    <a href="http://127.0.0.1:8000/services/1" class="btn btn-primary py-3 px-5 " style="border-radius: 25px; background-color: #34425D; border-color:#34425D">Book A Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Plumbing-img1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Plumbing</h1>
                                    <p class="mb-4">Addressing all your plumbing concerns, 'Fix' is here to assist. Our skilled plumbers tackle a range of tasks, from leak prevention and shower head repairs to installing washing machine hookups and more. Backed by expertise, our plumbing work is performed by professionals dedicated to finding the optimal solutions for your home.</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Repairing plumbing problems</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Extension of plumbing lines</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Bathroom installation</p>
                                    <a href="http://127.0.0.1:8000/services/2" class="btn btn-primary py-3 px-5" style="border-radius: 25px; background-color: #34425D; border-color:#34425D">Book A Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Air-Conditioner-img1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Air Conditioner</h1>
                                    <p class="mb-4">At "Fix" Our Friendly And Well-Trained Air Conditioning Repair Technicians Have The Skillset To Service, Install, And Repair Hvac Systems Of All Makes And Models. We Arrive At Each Job With Industry-Grade Tools And Equipment That Allow Us To Make The Correct Diagnosis And Repairs Quickly.</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Repairing air conditioning faults</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Air conditioning installation</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Air conditioning gas change</p>
                                    <a href="http://127.0.0.1:8000/services/3" class="btn btn-primary py-3 px-5" style="border-radius: 25px; background-color: #34425D; border-color:#34425D">Book A Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Electronic-Devices-img1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Electronic Devices</h1>
                                    <p class="mb-4">Regardless of the type of refrigerator, cookers, or washing machine in your home, our team promptly addresses issues. We specialize in repairing and replacing damaged parts, ensuring efficient and reliable performance. Trust us to swiftly handle any appliance concerns and restore functionality to your household.</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Installation of electrical devices </p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Repairing electrical appliance faults</p>
                                    <p><i class="fa fa-check  me-3" style="color: #0174BE"></i>Replace damaged parts</p>
                                    <a href="http://127.0.0.1:8000/services/4" class="btn btn-primary py-3 px-5" style="border-radius: 25px; background-color: #34425D; border-color:#34425D">Book A Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

@endsection
