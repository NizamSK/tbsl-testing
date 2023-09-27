@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Job Alerts</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Job Alerts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Job Alerts</h4> --}}

                            <table id="basic-datatable" class="table wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Email Subscription</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['job-alerts'] as $job_alert)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $job_alert->email }}</td>
                                            <td>{{ ucwords($job_alert->frequency)  }}</td>
                                            <td>{{ date('d M, Y H:i:s', strtotime($job_alert->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data['job-alerts']->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
    </div>
</div>

@endsection
