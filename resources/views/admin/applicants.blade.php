@extends('admin.common.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Applicants for Job: <i>{{ @$data['applicants'][0]->Job->title }}</i></h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                <li class="breadcrumb-item active">All Jobs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
            <div class="row">
                <div class="col-12">
                    <x-admin.candidate-filter />
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Blog table</h4> --}}
                            <table id="basic-datatable" class="table table-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Job Title</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Application Status</th>
                                        <th>AMCAT Attemted</th>
                                        <th>HirePro Status</th>
                                        <th>Created At</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['applicants'] as $applicant)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $applicant->Job->title }}</td>
                                            <td>{{ @$applicant->Personal->f_name }} {{ @$applicant->Personal->m_name }} {{ @$applicant->Personal->l_name }}</td>

                                            <td><a target="_blank" href="{{ route('admin.jobdetails', encrypt($applicant->id)) }}">{{ @$applicant->Personal->mobile }}</a></td>
                                            <td><a target="_blank" href="{{ route('admin.jobdetails', encrypt($applicant->id)) }}">{{ @$applicant->Personal->email }}</a></td>
                                            <td>
                                                <button class="status-change btn btn-sm {{ $applicant->is_completed == 1 ? 'btn-success' : 'btn-danger' }}">
                                                    {{ $applicant->is_completed == 1 ? 'Completed' : 'Incomplete' }}
                                                </button>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-<?= Helper::checkIfAmcatAttempted($applicant->candidate_unique_id) ? 'success':  'danger'; ?> btn-xs" >
                                                    @if(Helper::checkIfAmcatAttempted($applicant->candidate_unique_id))
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-<?= Helper::checkIfAmcatResultPushedToHirePro($applicant->candidate_unique_id) ? 'success':  'danger'; ?> btn-xs" >
                                                    @if(Helper::checkIfAmcatResultPushedToHirePro($applicant->candidate_unique_id))
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </span>
                                            </td>
                                            <td>{{ date('d,M Y H:i:Ga', strtotime($applicant->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data['applicants']->links() }}
                        </div> <!-- end card body-->
                        <div class="text-info">
                            <ul>
                                <li>Click on Phone/Email to view the details</li>
                            </ul>
                        </div>
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Candidates Applied in last 30 Days (Social Handles)</h4>
                            <x-graph.google-combo-chart :data="$data['social_handles']" />
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Candidates Applied in last 30 Days ({{ Helper::sumCount($data['last_30_days']) }})</h4>
                            <x-graph.google-area-chart :data="$data['last_30_days']" />
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Percentage Leads of Social Networks(Total Data)</h4>
                            <x-graph.google3d-pie-chart :data="$data['social_handles_share']" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

@section('customjs')
@endsection
