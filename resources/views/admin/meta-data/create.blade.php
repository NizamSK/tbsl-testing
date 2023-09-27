@extends('admin.common.main')
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Add New Metadata</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('metadata.index') }}">All Metadata</a></li>
                                    <li class="breadcrumb-item active">Add New Metadata</li>
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
                                <form class="form-horizontal" method="POST" action="{{ route('metadata.store') }}" >
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label required">Page</label>
                                        <div class="col-6">
                                            <select class="form-control" name="route_id"  required>
                                                <option value="">Select Page</option>
                                                @foreach($data['routes'] as $route)
                                                    <option value="{{ $route->id }}">{{ $route->name }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-info">In case data is added for the same page, it will update the previous value</small>
                                            @error('route_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <a class="btn btn-primary waves-effect waves-light">Add New</a>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label required">Meta Title
                                            {{-- <i class="feather-alert-circle" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i> --}}
                                        </label>
                                        <div class="col-6">
                                            <input type="text" class="form-control" value="{{ old('meta_title') }}" maxlength="80" minlength="4" name="meta_title" required>
                                            <small>Max characters allowed is 80</small>
                                            @error('meta_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label required">Meta Keywords</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control" value="{{ old('meta_keywords') }}" maxlength="200" minlength="4" name="meta_keywords" required>
                                            <small>Max characters allowed is 200</small>
                                            @error('meta_keywords')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-3 col-form-label required">Meta Description</label>
                                        <div class="col-6">
                                            <textarea type="number" class="form-control" name="meta_description" maxlength="200" minlength="4" required>{{ old('meta_description') }}</textarea>
                                            <small>Max characters allowed is 200</small>
                                            @error('meta_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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




