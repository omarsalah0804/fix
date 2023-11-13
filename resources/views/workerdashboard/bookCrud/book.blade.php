
       @extends('workerdashboard.layouts.master')
       @section('content')


        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Book Services</h4>
                       
                    </div>
                    <div class="col-5 align-self-center">
                     
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                

                                <br>
                                <div class="table-responsive">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Service Name</th>
                                                <th>Worker Name</th>
                                                <th>Booking Date</th>
                                                <th>User Name</th>
                                                <th> Location</th>
                                                <th> Price</th>
                                                <th> Status</th>
                                                <th>Action </th>






                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                            <tr>
                                                <td><span class="badge badge-light-warning">{{ $booking->id }}</span></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->service->service_name }}</a></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->worker->name }}</a></td>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->booking_date }}</a></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->name }}</a></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->location }}</a></td>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $booking->total_price }}</a></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">
                                                  @if( $booking->status == 'Pending')
                                                     <span class="badge bg-warning font-12 text-white
                                                     font-weight-medium badge-pill ml-2 d-md-none d-lg-block">{{ $booking->status}}
                                                </span>
                                                @elseif($booking->status == 'confirm')
                                                <span class="badge bg-info font-12 text-white
                                                font-weight-medium badge-pill ml-2 d-md-none d-lg-block">{{ $booking->status}}
                                           </span>
                                                @elseif($booking->status == 'completed')
                                                <span class="badge bg-success font-12 text-white
                                                font-weight-medium badge-pill ml-2 d-md-none d-lg-block">{{ $booking->status}}
                                           </span>
                                           @else
                                           <span class="badge bg-danger font-12 text-white
                                           font-weight-medium badge-pill ml-2 d-md-none d-lg-block">{{ $booking->status}}
                                      </span>
                                      @endif
                                            </a></td>







                                                <td>
                                                    <!-- show button -->
                                                    <a href="" class="ms-3 "></a>
                                                    <form style="display: inline-block" method="POST" >
                                                        <a class="mx-3" href="{{ route('bookingWorker.show', $booking->id) }}"> Show<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="current" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z"/>
                                                          </svg>
                                                         </a>
                                                         <a   href="{{ route('bookingWorker.edit', $booking->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg></a>

                                                    </form>
                                                </td>
                                            </tr>



                                    @endforeach
                                    </table>

                                    <ul class="pagination float-right">
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

@endsection
