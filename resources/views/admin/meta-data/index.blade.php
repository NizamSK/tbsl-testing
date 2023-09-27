@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">All Metadata</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Desktop</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('metadata.create') }}">Add Metadata</a></li>
                                <li class="breadcrumb-item active">All Metadata</li>
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

                            <table id="basic-datatable" class="table table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Page Name</th>
                                        <th>Meta Title</th>
                                        <th>Meta Keywords</th>
                                        <th>Meta Description</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['metadatas'] as $metadata)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ @$metadata->Route->name }}</td>
                                            <td>{{ $metadata->meta_title }}</td>
                                            <td>{{ $metadata->meta_keywords }}</td>
                                            <td>{{ $metadata->meta_description }}</td>
                                            <td>
                                                <span class="badge @if($metadata->status == 0) badge-danger @else badge-success @endif ">@if($metadata->status == 0) Inactive @else Active @endif</span>
                                            </td>
                                            <td style="display:flex">
                                                <a href="{{ route('metadata.edit', encrypt($metadata->id)) }}" data-toggle="tooltip" data-placement="top" title="Edit post" class="btn btn-sm btn-success btn-soft-success waves-effect waves-light">
                                                    <i class="fas fa-edit"></i></a> |
                                                <form action="{{ route('metadata.destroy',$metadata->id) }}" method="POST">
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
