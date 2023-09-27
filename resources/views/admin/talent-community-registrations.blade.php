@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Talent Community Registrations</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Talent Community Registrations</li>
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
                                        <th>Area Of Interest</th>
                                        <th>City/State</th>
                                        <th>Resume</th>
                                        <th>Email</th>
                                        <th>Whatsapp</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['talent-registrations'] as $registrations)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $registrations->f_name }} {{ $registrations->l_name }}</td>
                                            <td>{{ $registrations->email }}</td>
                                            <td>{{ $registrations->phone }}</td>
                                            <td>{{ @$registrations->AreaOfInterest->title }}</td>
                                            <td>{{ $registrations->City->name }}/{{ $registrations->State->name }}</td>
                                            <td>
                                                <a target="_blank" class="btn btn-sm btn-info" href="{{ URL::To('/').'/'.$registrations->resume }}">
                                                    View
                                                </a>
                                            </td>
                                            <td>
                                                @if($registrations->email_consent == 1)
                                                    <i class="feather-check-circle"></i>
                                                @else
                                                    <i class="feather-slash"></i>
                                                @endif
                                            </td>
                                            <td>
                                                @if($registrations->whatsapp_consent == 1)
                                                    <i class="feather-check-circle"></i>
                                                @else
                                                    <i class="feather-slash"></i>
                                                @endif
                                            </td>
                                            <td>{{ date('d M, Y H:i:s', strtotime($registrations->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data['talent-registrations']->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
    </div>
</div>

@endsection
