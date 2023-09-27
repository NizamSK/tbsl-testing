@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Durashine Leads</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Desktop</a></li>
                                <li class="breadcrumb-item active">All Lysaght Leads</li>
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
                            {{-- <h4 class="card-title">Blog table</h4> --}}
                            <form method="GET" action="">
                                <input type="submit" class="btn btn-primary" value="Export" name="export">
                            </form>
                            <table id="basic-datatable" class="table table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Profession</th>
                                        <th>Company Name</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>IP</th>
                                        <th>URL</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['leads'] as $lead)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $lead->name }}</td>
                                            <td>{{ $lead->email }}</td>
                                            <td>{{ $lead->phone }}</td>
                                            <td>{{ $lead->profession }}</td>
                                            <td>{{ $lead->company_name }}</td>
                                            <td>{{ $lead->State->name }}</td>
                                            <td>{{ $lead->City->name }}</td>
                                            <td>{{ $lead->ip }}</td>
                                            <td>{{ $lead->previous_url }}</td>
                                            <td>{{ date('d M, Y', strtotime($lead->created_at)) }}</td>
                                            <td>
                                                <span class="badge @if($lead->status == 0) badge-danger @else badge-success @endif ">@if($lead->status == 0) Inactive @else Active @endif</span>
                                            </td>
                                            <td style="display:flex"></td>
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
