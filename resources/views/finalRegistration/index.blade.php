@include('components.header')
<link href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css" rel="stylesheet">
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<style>
    #candidatesTable {
        width: 100% !important;
        border-collapse: collapse;
    }

    #candidatesTable thead th {
        background-color: #2A3F54;
        color: white;
        padding: 12px;
        border: 1px solid #ddd;
    }

    #candidatesTable tbody td {
        padding: 10px;
        border: 1px solid #ddd;
        vertical-align: middle;
    }

    #candidatesTable tbody tr:hover {
        background-color: #f5f5f5;
    }

    .btn-sm {
        margin: 2px;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        margin-bottom: 15px;
    }

    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
        margin-left: 5px;
    }

    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.3em 0.8em;
        margin: 0 2px;
        border-radius: 3px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #2A3F54;
        color: white !important;
        border: 1px solid #2A3F54;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #2A3F54;
        color: white !important;
        border: 1px solid #2A3F54;
    }
</style>

<div class="container-fluid" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title d-flex justify-content-between align-items-center mb-3">
                        <h2 class="m-0">Candidates</h2>
                        <a href="{{ route('finalRegistration.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Candidate
                        </a>
                    </div>
                    <div class="x_content">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="candidatesTable">
                                <thead>
                                    <tr>
                                        <th>Candidate No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>E - Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            <td>{{ $candidate->id }}</td>
                                            <td>{{ $candidate->first_name . ' ' . $candidate->last_name }}</td>
                                            <td>{{ $candidate->mobile }}</td>
                                            <td>{{ $candidate->e_number ?? 'Not Issued' }}</td>
                                            <td>
                                                <form id="changeStatusForm_{{ $candidate->id }}" action="{{ route('finalRegistration.changeStatus', $candidate->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                                                
                                                    <input type="hidden" name="status" id="hiddenStatus_{{ $candidate->id }}">
                                                
                                                    <select class="form-control" onchange="changeStatus({{ $candidate->id }})" id="statusSelect_{{ $candidate->id }}">
                                                        <option value="Pending" {{ $candidate->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="CV Collected" {{ $candidate->status == 'CV Collected' ? 'selected' : '' }}>CV Collected</option>
                                                        <option value="CV Sent for Approval" {{ $candidate->status == 'CV Sent for Approval' ? 'selected' : '' }}>CV Sent for Approval</option>
                                                        <option value="Trade Test Scheduled" {{ $candidate->status == 'Trade Test Scheduled' ? 'selected' : '' }}>Trade Test Scheduled</option>
                                                        <option value="Medical Process Started" {{ $candidate->status == 'Medical Process Started' ? 'selected' : '' }}>Medical Process Started</option>
                                                        <option value="NAVTTC Test Scheduled" {{ $candidate->status == 'NAVTTC Test Scheduled' ? 'selected' : '' }}>NAVTTC Test Scheduled</option>
                                                        <option value="E-Number Issued" {{ $candidate->status == 'E-Number Issued' ? 'selected' : '' }}>E-Number Issued</option>
                                                        <option value="Case Submitted to Embassy" {{ $candidate->status == 'Case Submitted to Embassy' ? 'selected' : '' }}>Case Submitted to Embassy</option>
                                                     </select>
                                                </form>
                                                
                                            </td>
                                            <td>
                                                <a href="{{ route('finalRegistration.edit', $candidate->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form
                                                    action="{{ route('finalRegistration.destroy', $candidate->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this candidate?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                                <a href="{{ route('finalRegistration.show', $candidate->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <script>
                                        function changeStatus(candidateId) {
                                            var selectedStatus = document.getElementById('statusSelect_' + candidateId).value;
                                            document.getElementById('hiddenStatus_' + candidateId).value = selectedStatus;
                                            document.getElementById('changeStatusForm_' + candidateId).submit();
                                        }
                                    </script>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   new DataTable('#candidatesTable');
</script>

@include('components.footer')
