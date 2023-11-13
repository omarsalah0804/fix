
       @extends('admindashboard.layouts.master')
       @section('content')


        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Worker Rating</h4>
                        
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


 <th>User Name</th>    <th>Rate</th>
                                                <th>comment </th>
                                                <th>Worker Name </th>






                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($rating as $rate)
                                            <tr>
                                                <td><span class="badge badge-light-warning">{{ $rate->id }}</span></td>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $rate->user->name}}</a></td>

                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $rate->rate }}</a></td>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $rate->comment }}</a></td>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $rate->worker->name}}</a></td>



                                            </tr>



                                    @endforeach
                                    </table>
                                    <ul class="pagination float-right">
                                        {{ $rating->links() }}

                                    </ul>
                                    <ul class="pagination float-right">

                                        {{-- <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li> --}}
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
