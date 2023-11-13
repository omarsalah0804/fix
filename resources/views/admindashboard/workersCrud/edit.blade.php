@extends('admindashboard.layouts.master')
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Edit Worker</h4>
                
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
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
                {{-- <h4 class="card-title">Edit Worker</h4> --}}
                <form action="{{ route('workersinfo.update', $worker->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
    @method('PUT')
                    <div class="form-body">


                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="col-md-3" name="name" value="{{ $worker->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="col-md-3" name="email" value="{{ $worker->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="phone" name="phone" value="{{ $worker->phone }}">
                                </div>
                            </div>
                        </div>




                        <h4 class="card-title">User Type</h4>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="User" name="type"
                                class="custom-control-input" value="User" >
                            <label class="custom-control-label" for="User">User</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Worker" name="type"
                                class="custom-control-input" value="Worker"checked>
                            <label class="custom-control-label" for="Worker">Worker</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Admin" name="type"
                                class="custom-control-input" value="Admin">
                            <label class="custom-control-label" for="Admin">Admin</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="Driver" name="type"
                                class="custom-control-input" value="Driver">
                            <label class="custom-control-label" for="Driver">Driver</label>
                        </div>


{{--

                        <div class="card-body">
                            <h4 class="card-title">Custom Select</h4>
                            <h6 class="card-subtitle">To use add <code>.custom-select</code> class</h6>
                            <form>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </form>
                        </div> --}}













                        {{-- <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio"
                                class="custom-control-input" disabled>
                            <label class="custom-control-label" for="customRadio3">Or toggle this other custom
                                radio</label>
                        </div> --}}









                        {{-- <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>User Type</label>
                                    <input type="text" class="form-control" placeholder="col-md-3">
                                </div>
                            </div>
                        </div> --}}
<br>
                        <label>Upload image</label>
                        <h6 class="card-subtitle">Choose a photo
                        </h6>

                            <fieldset class="form-group">
                                <input type="file" name="image" class="form-control-file" id="exampleInputFile">
                            </fieldset>


                        {{-- <strong>image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        <br> --}}
<img src="/images/{{ $worker->image }}" width="100px">


                    </div><br>
                    <div class="form-actions">
                        <div class="text-right">
                            <a href="/workersinfo" class="btn btn-dark">Back</a>
                            <button type="submit" class="btn btn-info">Update</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
