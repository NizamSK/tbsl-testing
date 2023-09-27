@extends('admin.common.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Users</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">users</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
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
                            <div class="card-header align-items-center d-flex">
                                <h5 class="card-title mb-0 flex-grow-1">Update Password</h5>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="{{ route('password.update', $editpassword[0]->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row col-md-12">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" value="{{ old('password') }}"
                                                        placeholder="Enter password" name="password">
                                                        <label for="floatingnameInput">Password<span style="color: red; display:block; float:right">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" value="{{ old('password_confirmation') }}"
                                                        placeholder="Enter password_confirmation" name="password_confirmation">
                                                        <label for="floatingnameInput">Confirm Password<span style="color: red; display:block; float:right">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3">
                                                <button type="submit" id="submit"
                                                    class="btn btn-outline-primary waves-effect waves-light">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


