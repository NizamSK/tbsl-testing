@extends('admin.common.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Edit {{ $data['user'][0]->email }}</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">All Users</a></li>
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="card-title">Horizontal Form</h4>
                            <p class="card-subtitle mb-4">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p> --}}

                                <form class="form-horizontal" method="POST" action="{{ route('users.update', $data['user'][0]->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label required">Role</label>
                                        <div class="col-6">
                                            <select class="form-control" name="role_id" required>
                                                <option value="">Select Role</option>
                                                @foreach($data['roles'] as $role)
                                                    <option @if($role->id == $data['user'][0]->role_id) selected @endif value="{{ $role->id }}">{{ $role->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('role_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label required">Name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control" value="{{ $data['user'][0]->name }}" name="name" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label required">Email</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control" value="{{ $data['user'][0]->email }}" name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label required">Phone</label>
                                        <div class="col-6">
                                            <input type="number" class="form-control" value="{{ $data['user'][0]->phone }}" name="phone" required>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label required">Image</label>
                                        <div class="col-6">
                                            <input type="file" class="form-control" name="image">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <small class="text-danger">Image should not be greater than 1MB (allowed file: jpg, jpeg, png, webp)</small>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hidden" name="image_old" value="{{$data['user'][0]->image }}">
                                            @if($data['user'][0]->image != '' )
                                                <img src="{{  URL::To('/').'/'.$data['user'][0]->image }}" width="70px" height="70px" alt="Image">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
            </div>
            <!-- End Form Layout -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- end main content-->
@endsection


