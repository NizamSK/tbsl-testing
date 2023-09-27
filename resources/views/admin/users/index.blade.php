@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">All Users</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Desktop</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Add User</a></li>
                                <li class="breadcrumb-item active">All Users</li>
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
            <!-- end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Blog table</h4> --}}

                            <table id="basic-datatable" class="table nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['users'] as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if($user->image == null)
                                                    <img src="{{ asset('assets/images/user.png') }}" width="70px" height="70px" alt="Image">
                                                @else
                                                    <img src="{{  URL::To('/').'/'.$user->image }}" width="70px" height="70px" alt="Image">
                                                @endif

                                            </td>endif
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                <span class="badge @if($user->status == 0) badge-danger @else badge-success @endif ">@if($user->status == 0) Inactive @else Active @endif</span>
                                            </td>
                                            <td>{{ @$user->Role->name }}</td>
                                            <td style="display:flex">
                                                <a href="{{ route('users.edit', encrypt($user->id)) }}" data-toggle="tooltip" data-placement="top" title="Edit post" class="btn btn-sm btn-success btn-soft-success waves-effect waves-light">
                                                    <i class="fas fa-edit"></i></a> |
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this user?');" type="submit" data-toggle="tooltip" data-placement="top" title="Delete post"
                                                    class="btn btn-sm btn-outline-danger waves-effect waves-light show_confirm">
                                                    <i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
    </div>
</div>
@endsection
