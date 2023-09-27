@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Fraud Alerts</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Fraud Alerts</li>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Category</th>
                                        <th>Comments</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['fraud-alerts'] as $fraud_alert)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $fraud_alert->f_name }} {{ $fraud_alert->m_name }} {{ $fraud_alert->l_name }}</td>
                                            <td>{{ $fraud_alert->email }}</td>
                                            <td>{{ $fraud_alert->phone }}</td>
                                            <td>{{ $fraud_alert->city_id }}</td>
                                            <td>{{ @$fraud_alert->Category->title }}</td>
                                            <td>{{ $fraud_alert->comments }}</td>
                                            <td>{{ date('d M, Y H:i:s', strtotime($fraud_alert->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data['fraud-alerts']->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
    </div>
</div>

@endsection
