
       @extends('admindashboard.layouts.master')
       @section('content')
    <!-- Content wrapper -->

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
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div   class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Order Status</h4>
                    <br>
                    <div class="col-6">
                        <table class="table table-borderd  ">
                            <thead>
                                <tr>
                                    <th >Product </th>
                                    <th >Image </th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td >{{ $product->service_name }}</td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><img src="/servicesImages/{{ $product->image }}"  width="80px" height="80px"></a></td>

                                        <td>{{ $product->amount }}</td>

                                        <td>{{ $product->price}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <form action="{{ route('orders.update',$order->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Order Num {{ $order->id }}</li>
                        <li class="list-group-item">Name : {{ $name }}</li>
                        <li class="list-group-item">Location :{{ $order->address }}</li>
                        <li class="list-group-item">Phone :{{ $order->phone }}</li>
                        <li class="list-group-item">Price :{{ $order->total }} JD</li>
                        <li class="list-group-item">Note :{{ $order->note }}</li>
                        <li class="list-group-item">Order Status :{{ $order->status }}</li>
                      </ul>
<br>
                      <li class="list-group-item">
                        <label class="form-label" for="status">Change Order Status</label><br>
                        <select name="status" class="form-control">
@if($order->status==="Pending")
                            <option name="status" selected value="Pending">Pending</option>
                            <option name="status" value="delivered">delivered</option>
                            @else
                            <option name="status"  value="Pending">Pending</option>
                            <option name="status" selected value="delivered">delivered</option>
                            @endif
                        </select>  <br> <a href="/orders" class="btn btn-secondary me-2">Back</a>
                        </select>  <button type="submit" class="btn btn-primary me-2">Update Status</button>
                        <br>
<br>
                      </li>

                    </form>

                </div>
            </div>
        </div>
    </div>

    </div>




















                    @endsection
