@extends('admin.common.main')
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Add New User</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">All Users</a></li>
                                    <li class="breadcrumb-item active">Add New User</li>
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

                                    <form class="form-horizontal" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label required">Role</label>
                                        <div class="col-6">
                                            <select class="form-control" name="role_id"  required>
                                                <option value="">Select Role</option>
                                                @foreach($data['roles'] as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name}}</option>
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
                                            <input type="text" class="form-control" value="{{ old('name') }}" maxlength="100" minlength="4" name="name" required>
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
                                            <input type="text" class="form-control" maxlength="100" minlength="4" value="{{ old('email') }}" name="email" required>
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
                                            <input type="number" class="form-control" maxlength="13" minlength="10" value="{{ old('phone') }}" name="phone" required>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label required">Password</label>
                                        <div class="col-6">
                                            <input type="password" class="form-control" maxlength="30" minlength="8" value="{{ old('password') }}" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label required">Confirm Password</label>
                                        <div class="col-6">
                                            <input type="password" class="form-control" maxlength="30" minlength="8" value="{{ old('password_confirmation') }}" name="password_confirmation" required>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label">Image</label>
                                        <div class="col-6">
                                            <input type="file" class="form-control" name="image">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <small class="text-danger">Image should not be greater than 200 kb (allowed file: jpg, jpeg, png, webp)</small>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
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




