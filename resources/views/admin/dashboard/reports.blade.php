

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

                                        @include('admin.dashboard.tab')

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="profile">
                                                <!-- end row-->
                                                <div class="row">
                                                    <div class="col-12">
                                                    <form method="GET" action="">
                                                        <div class="card">
                                                            <div class="row card-body">
                                                                <div class="col-md-3">
                                                                    <div class="form-group mb-3">
                                                                        <label>Start Date</label>
                                                                        <input type="date" class="form-control" name="start_date" value="{{ request()->query('start_date') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group mb-3">
                                                                        <label>End Date</label>
                                                                        <input type="date" class="form-control" name="end_date" value="{{ request()->query('end_date') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 mt-4">
                                                                    <button class="btn btn-success" type="submit">Filter</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Candidates Applied in last 7 Days ({{ Helper::sumCount($data['last_7_days']) }})</h4>
                                                                <x-graph.google-area-chart :data="$data['last_7_days']" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Candidates Applied in last 7 Days (Social Handles)</h4>
                                                                <x-graph.google-combo-chart :data="$data['social_handles']" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Percentage Visitors of Social Networks in last 7 Days</h4>
                                                                <x-graph.google3d-pie-chart :data="$data['social_handles_share']" />
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col -->

                                                    <div class="col-xl-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Percentage Visitors State Wise in last 7 Days</h4>
                                                                <x-graph.google-donut-chart :data="$data['visitors_state_wise']"/>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col -->

                                                    <div class="col-xl-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Percentage Visitors Devices in last 7 Days</h4>
                                                                <x-graph.google-pie-chart :data="$data['visitors_device_wise']"/>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col -->
                                                </div>
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
