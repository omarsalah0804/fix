@extends('workerdashboard.layouts.master')
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Grid</h4>
               
            </div>
           
        </div>
    </div>

<div   class="container-fluid">
<div class="row">
    <div class="col-3"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('bookingWorker.update',$booking->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <h4 class="card-title">Booking Details</h4>
                <div class="row">
                    <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Service Name :{{ $booking->service->name }}</li>
                        <li class="list-group-item">Worker Name :{{ $booking->worker->name }}</li>
                        <li class="list-group-item">Booking Date :{{ $booking->booking_date }}</li>
                        <li class="list-group-item">User Name :{{ $booking->user->name }}</li>
                        <li class="list-group-item">User Phone :{{ $booking->phone }}</li>
                        <li class="list-group-item">User Email :{{ $booking->email }}</li>
                        <li class="list-group-item">Total Price :{{ $booking->total_price }}</li>
                        {{-- <li class="list-group-item">Notes :{{ $booking->email }}</li> --}}

                        <li class="list-group-item">
                            <label class="form-label" for="status">Change Booking Status</label><br>
                            <select name="status" class="form-control">
    @if($booking->status==="Pending")
                                <option name="status" selected value="Pending">Pending</option>
                                <option name="status" value="confirm">Confirm</option>
                                <option name="status" value="not available">Not Available</option>
                                <option name="status" value="completed">Completed</option>
                                @elseif ($booking->status==="confirm")
                                <option name="status"  value="Pending">Pending</option>
                                <option name="status" value="confirm" selected>Confirm</option>
                                <option name="status" value="not available">Not Available</option>
                                <option name="status" value="completed">Completed</option>
                                @elseif ($booking->status==="completed")
                                <option name="status"  value="Pending">Pending</option>
                                <option name="status" value="confirm" >Confirm</option>
                                <option name="status" value="not available">Not Available</option>
                                <option name="status" value="completed"selected>Completed</option>
                               @else
                               <option name="status"  value="Pending">Pending</option>
                               <option name="status" value="confirm" >Confirm</option>
                               <option name="status" value="not available"selected>Not Available</option>
                               <option name="status" value="completed">Completed</option>
                               @endif
                            </select>  <br> <a href="/bookingWorker" class="btn btn-secondary me-2">Back</a>
                            <button type="submit" class="btn btn-primary me-2 ">Update Status</button>
                            

                            <br>
    <br>
                          </li>

                        </form>




                      </ul>
                </div>
                </div>

                    </div><br>


            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
