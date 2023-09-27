@extends('admin.common.main')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            @if ($show[0]->image !=null)
                            <img src="{{ asset(''.$show[0]->image) }}"
                            alt="user-img" class="img-thumbnail rounded-circle" />
                            @else
                            <img src="{{ asset('assets/images/defaultuserimg.jpg') }}"
                            alt="user-img" class="img-thumbnail rounded-circle" />
                            @endif
                            
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-black mb-1">{{ $show[0]->name }}</h3>
                            {{-- <p class="text-black-75">Owner & Founder</p> --}}
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                @if(Auth::user()->is_admin == 1 || Auth::user()->id == $show[0]->id)
                                <a href="{{ route('users.edit', encrypt($show[0]->id)) }}" class="btn btn-success">
                                    <i class="ri-edit-box-line align-bottom"></i> Edit Profile
                                </a>
                                @endif
                                @if(Auth::user()->id == $show[0]->id)
                                <a href="{{ route('password.edit', encrypt($show[0]->id)) }}" class="btn btn-outline-success waves-effect waves-light">
                                    <i class="ri-edit-box-line align-bottom"></i>Change Password
                                </a>
                                @endif
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Info</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Full Name:</th>
                                                                <td>{{ $show[0]->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email:</th>
                                                                <td>{{ $show[0]->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone:</th>
                                                                @if ($show[0]->phone !=null)
                                                                <td>{{ $show[0]->phone }}</td>
                                                                @else
                                                                    <td>Phone number not found</td>
                                                                @endif
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">About</h5>
                                                <p>@if(isset($show[0]->description)){!! $show[0]->description !!} @else No Description Found @endif</p>
                                            </div>
                                            <!--end card-body-->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection