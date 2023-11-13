@extends('admindashboard.layouts.master')
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Categories</h4>
                
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

                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
    @method('PUT')
                    <div class="form-body">


                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="col-md-3" name="name" value="{{ $category->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" placeholder="col-md-3" name="description" value="{{ $category->description }}">
                                        {{ $category->description }}</textarea></div>
                            </div>
                        </div>

<hr>
                        <label>Upload image</label>
                        <h6 class="card-subtitle">Choose a photo
                        </h6>

                            <fieldset class="form-group">
                                <input type="file" name="image" class="form-control-file" id="exampleInputFile">
                            </fieldset>

<img src="/categoryImages/{{ $category->image }}" width="100px">


                    </div>
                    <hr>
                        <label>Upload logo</label>
                        <h6 class="card-subtitle">Choose a logo
                        </h6>

                            <fieldset class="form-group">
                                <input type="file" name="logo" class="form-control-file" id="exampleInputFile">
                            </fieldset>

<img src="/logoImages/{{ $category->logo }}" width="100px">


                    </div><br>
                    <div class="form-actions">
                        <div class="text-right m-3">
                            <a href="/categories" class="btn btn-dark">Back</a> 
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
