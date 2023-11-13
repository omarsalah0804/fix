
     @extends('workerdashboard.layouts.master')
     @section('content')


        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Work SamPle</h4>
                       
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
                               
                                <a href="{{route('workSample.create')}}"><button class="btn btn-info mb-2">

                                    Add Photo</button></a>

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
                                                <th> Name</th>

                                                <th>image </th>
                                                <th>image </th>
                                                <th>image </th>
                                                <th>image </th>
                                                <th>Action </th>



                                                {{-- <th>Action </th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($workSamples as $workSample)
                                            <tr>
                                                <td><span class="badge badge-light-warning">{{ $workSample->id }}</span></td>
                                                <td><span class="badge badge-light-warning">{{Auth::user()->name}} </span></td>
                                                {{-- <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $service->service_name }}</a></td> --}}

                                                <td><a href="javascript:void(0)" class="font-bold link"><img src="/sampleImages1/{{ $workSample->image1 }}"  width="80px" height="80px"></a></td>
                                                <td><a href="javascript:void(0)" class="font-bold link"><img src="/sampleImages2/{{ $workSample->image2 }}"  width="80px" height="80px"></a></td>
                                                <td><a href="javascript:void(0)" class="font-bold link"><img src="/sampleImages3/{{ $workSample->image3 }}"  width="80px" height="80px"></a></td>
                                                <td><a href="javascript:void(0)" class="font-bold link"><img src="/sampleImages4/{{ $workSample->image4 }}"  width="80px" height="80px"></a></td>




                                                <td>
                                                    <!-- edit button -->
                                                    <a href="" class="ms-3 "></a>
                                                    <form style="display: inline-block" method="POST"
                                                        action="{{ route('workSample.destroy',$workSample->id) }}">
                                                        <a   href="{{ route('workSample.edit', $workSample->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg></a>

                                                      <!-- Delete button -->
                                                      @csrf
                                                      @method('DELETE')

<!-- Button trigger modal -->
<button type="button" class="btn text-danger" data-toggle="modal" data-target="#exampleModal{{$workSample->id}}">
    <i class="far fa-trash-alt"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$workSample->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Work Sample</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>

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
