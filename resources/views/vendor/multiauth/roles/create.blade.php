@extends('vendor.layouts.app') 

@section('title','Create Role')

@section('content')

    <!-- basic form start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">ADD New Role</h4>
                 @include('multiauth::message')
                <form action="{{ route('admin.role.store') }}" method="post">
                  @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Roll Name</label>
                        <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="exampleInputEmail1" required>
                     
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Store</button>
                     <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger float-right">Back</a>

                </form>
            </div>
        </div>
    </div>
    <!-- basic form end -->

@endsection