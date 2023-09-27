@extends('admin.common.main')
@section('content')
 
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Cms Users</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">cms users</li>
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
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><h5 class="card-title mb-0">User Table</h5></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Login</th>
                                        <th>Logout</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $log->login_logs->name }}</td>
                                            <td>{{ $log->login_logs->email }}</td>
                                            <td>{{ $log->login_logs->phone }}</td>
                                            <td>
                                                <img src="{{ asset(''.$log->login_logs->image) }}" height="80px" width="80px" alt="">    
                                            </td>
                                            <td>{{ $log->login_time }}</td>
                                            <td>{{ $log->logout_time }}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> 
            </div>
            <!-- End Form Layout -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- end main content-->
@endsection




