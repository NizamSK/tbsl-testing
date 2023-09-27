

@extends('admin.common.main')
@section('content')
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Concentirx</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        {{-- <h4 class="card-title">Default Tabs</h4>
                                        <p class="card-subtitle mb-4">Example of basic tabs.</p> --}}

                                        {{-- @include('admin.dashboard.tab') --}}

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="profile">
                                                <div class="row">
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection
