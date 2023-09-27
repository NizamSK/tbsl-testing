<table id="basic-datatable" class="table nowrap">
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
            </tr>
        @endforeach
    </tbody>
</table>
