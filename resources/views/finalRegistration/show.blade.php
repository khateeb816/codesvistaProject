@include('components.header')

<!-- Custom CSS for boxes -->
<style>
    .info-box {
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }

    .info-box-header {
        background-color: #1f2d3d;
        color: #fff;
        padding: 15px 20px;
        border-radius: 4px 4px 0 0;
        margin: -20px -20px 20px -20px;
    }

    .info-box-header h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
    }

    .info-group {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 4px;
    }

    .info-label {
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .info-value {
        color: #34495e;
    }

    .table-responsive {
        margin-top: 20px;
    }

    .table {
        background-color: #fff;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .file-preview {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        padding: 15px;
        margin-top: 10px;
    }

    .file-preview-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .file-icon {
        font-size: 2em;
        margin-right: 15px;
        color: #3498db;
    }

    .file-details {
        flex-grow: 1;
    }

    .file-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .file-size {
        color: #6c757d;
        font-size: 0.9em;
    }

    .btn-download {
        margin-left: 15px;
    }

    .action-buttons {
        margin-bottom: 20px;
        text-align: right;
    }

    .action-buttons .btn {
        margin-left: 10px;
    }

    .job-card {
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .job-card:hover {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .job-title {
        font-size: 18px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .job-company {
        color: #34495e;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .job-details {
        color: #7f8c8d;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .job-status {
        display: inline-block;
        padding: 3px 8px;
        border-radius: 3px;
        font-size: 12px;
        font-weight: 500;
    }

    .status-applied {
        background-color: #e8f5e9;
        color: #2e7d32;
    }

    .status-pending {
        background-color: #fff3e0;
        color: #ef6c00;
    }

    .status-rejected {
        background-color: #ffebee;
        color: #c62828;
    }

    .modal-header {
        background-color: #1f2d3d;
        color: #fff;
        border-radius: 4px 4px 0 0;
    }

    .modal-title {
        font-weight: 600;
    }

    .modal-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: 500;
        color: #2c3e50;
    }

    .form-control {
        border-radius: 4px;
        border: 1px solid #ddd;
        padding: 8px 12px;
    }

    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }

    .modal-footer {
        border-top: 1px solid #eee;
        padding: 15px 20px;
    }

    .btn-close {
        color: #fff;
    }
</style>

<!-- Candidate Details View -->
<div role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Candidate Details</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Basic Info Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Basic Information</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Username</div>
                                <div class="info-value">{{ $candidate->username }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Candidate Type</div>
                                <div class="info-value">{{ $candidate->candidate_type }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Title</div>
                                <div class="info-value">{{ $candidate->title }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Religion</div>
                                <div class="info-value">{{ $candidate->religion }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">First Name</div>
                                <div class="info-value">{{ $candidate->first_name }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Last Name</div>
                                <div class="info-value">{{ $candidate->last_name }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">CNIC</div>
                                <div class="info-value">{{ $candidate->cnic }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Father Name</div>
                                <div class="info-value">{{ $candidate->father_name }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Gender</div>
                                <div class="info-value">{{ $candidate->gender }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Date of Birth</div>
                                <div class="info-value">{{ $candidate->date_of_birth }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Age</div>
                                <div class="info-value">{{ $candidate->age }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Place of Birth</div>
                                <div class="info-value">{{ $candidate->place_of_birth }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Nationality</div>
                                <div class="info-value">{{ $candidate->nationality }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Marital Status</div>
                                <div class="info-value">{{ $candidate->marital_status }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Education</div>
                                <div class="info-value">{{ $candidate->education }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Profession</div>
                                <div class="info-value">{{ $candidate->profession }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Experience</div>
                                <div class="info-value">{{ $candidate->experience }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Job Type</div>
                                <div class="info-value">{{ $candidate->job_type }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Wages/Salary</div>
                                <div class="info-value">{{ $candidate->wages_salary }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Job Applied For</div>
                                <div class="info-value">{{ $candidate->job_applied_for }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Plan</div>
                                <div class="info-value">{{ $candidate->plan }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Passport Info Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Passport Information</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Passport Number</div>
                                <div class="info-value">{{ $candidate->passport_number }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Issue Date</div>
                                <div class="info-value">{{ $candidate->passport_issue_date }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Expiry Date</div>
                                <div class="info-value">{{ $candidate->passport_expiry_date }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Issue Place</div>
                                <div class="info-value">{{ $candidate->passport_issue_place }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Residence Info Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Residence Information</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Country</div>
                                <div class="info-value">{{ $candidate->country }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">State</div>
                                <div class="info-value">{{ $candidate->state }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Province</div>
                                <div class="info-value">{{ $candidate->province }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">District</div>
                                <div class="info-value">{{ $candidate->district }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">City</div>
                                <div class="info-value">{{ $candidate->city }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Zip</div>
                                <div class="info-value">{{ $candidate->zip }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Street</div>
                                <div class="info-value">{{ $candidate->street }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Details Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Contact Details</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Email</div>
                                <div class="info-value">{{ $candidate->email }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Mobile</div>
                                <div class="info-value">{{ $candidate->mobile }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Alternate Phone</div>
                                <div class="info-value">{{ $candidate->alternate_mobile }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Fax</div>
                                <div class="info-value">{{ $candidate->fax }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Website</div>
                                <div class="info-value">{{ $candidate->website }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group">
                                <div class="info-label">Address</div>
                                <div class="info-value">{{ $candidate->address }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group">
                                <div class="info-label">Return Address</div>
                                <div class="info-value">{{ $candidate->return_address }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Skills & Qualifications</h3>
                    </div>

                    <!-- Qualifications Section -->
                    <h4>Qualifications</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Duration</th>
                                    <th>Degree</th>
                                    <th>Institute</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($qualifications) && count($qualifications) > 0)
                                    @foreach ($qualifications as $qualification)
                                        <tr>
                                            <td>{{ $qualification['duration'] }}</td>
                                            <td>{{ $qualification['degree'] }}</td>
                                            <td>{{ $qualification['institute'] }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">No qualifications found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Professional Qualifications Section -->
                    <h4>Professional Qualifications</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Certification</th>
                                    <th>Issuing Organization</th>
                                    <th>Issue Date</th>
                                    <th>Expiry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($professionalQualifications as $qualification)
                                    <tr>
                                        <td>{{ $qualification['degree'] }}</td>
                                        <td>{{ $qualification['institute'] }}</td>
                                        <td>{{ $qualification['from'] }}</td>
                                        <td>{{ $qualification['to'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Professional Experience Section -->
                    <h4>Professional Experience</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Position</th>
                                    <th>Duration</th>
                                    <th>Sector</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($professionalExperience as $experience)
                                    <tr>
                                        <td>{{ $experience['company'] }}</td>
                                        <td>{{ $experience['main_category'] }}{{ isset($experience['sub_category']) ? ' - ' . $experience['sub_category'] : '' }}
                                        </td>
                                        <td>{{ $experience['from'] }} - {{ $experience['to'] }}</td>
                                        <td>{{ $experience['sector'] ?? 'N/A' }}</td>
                                        <td>{{ $experience['type'] ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Present Status Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Present Status</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Police Case</div>
                                <div class="info-value">{{ $candidate->any_police_case }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Political Involvement</div>
                                <div class="info-value">{{ $candidate->any_political_involvement }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <div class="info-label">Present Employment</div>
                                <div class="info-value">{{ $candidate->present_employment }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group">
                                <div class="info-label">Achievements</div>
                                <div class="info-value">{{ $candidate->achievements }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Candidate Dependents Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Candidate Dependents</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Relation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dependents as $dependent)
                                    <tr>
                                        <td>{{ $dependent['type'] }}</td>
                                        <td>{{ $dependent['name'] }}</td>
                                        <td>{{ $dependent['age'] }}</td>
                                        <td>{{ $dependent['relation'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Resumes Box -->
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Resumes</h3>
                    </div>
                    @if ($candidate->resume)
                        <div class="file-preview">
                            <div class="file-preview-content">
                                <i class="fa fa-file-pdf-o file-icon"></i>
                                <div class="file-details">
                                    <span class="file-name">{{ basename($candidate->resume) }}</span>
                                </div>
                                <a href="{{ asset($candidate->resume) }}" class="btn btn-primary btn-download"
                                    download>
                                    <i class="fa fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-info">
                            No resume uploaded yet.
                        </div>
                    @endif
                </div>

                <!-- Jobs Box -->
                <div class="info-box">
                    <div class="info-box-header d-flex align-items-center justify-content-between">
                        <h3 class="">Applied Jobs</h3>
                        <div class="action-buttons mt-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#applyJobModal">
                                <i class="fa fa-briefcase"></i> Apply for Job
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($candidate->jobs) && count($candidate->jobs) > 0)
                                <div class="container">
                                    <div class="row">
                                        @foreach ($candidate->jobs as $job)
                                            <div class="col-md-4 mb-4">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Title: {{ $job->title }}</h5>
                                                        <h6 class="card-subtitle mb-2 text-muted">Company:
                                                            {{ $job->company }}</h6>
                                                        <p class="card-text">
                                                            <i class="fa fa-map-marker"></i> Location:
                                                            {{ $job->location }}
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="status_{{ $job->id }}">Status:</label>
                                                            <select name="status" class="form-control"
                                                                id="status_{{ $job->id }}">
                                                                <option value="Applied"
                                                                    {{ $job->status == 'Applied' ? 'selected' : '' }}>
                                                                    Applied</option>
                                                                <option value="Interview"
                                                                    {{ $job->status == 'Interview' ? 'selected' : '' }}>
                                                                    Interview</option>
                                                                <option value="Hired"
                                                                    {{ $job->status == 'Hired' ? 'selected' : '' }}>
                                                                    Hired</option>
                                                                <option value="Rejected"
                                                                    {{ $job->status == 'Rejected' ? 'selected' : '' }}>
                                                                    Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <form action="{{ route('job.update', $job->id) }}"
                                                            id="updateJobForm_{{ $job->id }}" method="POST"
                                                            class="d-inline"
                                                            onsubmit="event.preventDefault(); updateJobStatus({{ $job->id }});">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status"
                                                                id="new_status_{{ $job->id }}"
                                                                value="{{ $job->status }}">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">Update</button>
                                                        </form>
                                                        <form action="{{ route('job.destroy', $job->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <script>
                                    function updateJobStatus(jobId) {
                                        // Get the selected dropdown value
                                        const selectedStatus = document.getElementById('status_' + jobId).value;
                                        // Set the hidden input value
                                        document.getElementById('new_status_' + jobId).value = selectedStatus;
                                        // Submit the form
                                        document.getElementById('updateJobForm_' + jobId).submit();
                                    }
                                </script>
                            @else
                                <div class="alert alert-info">
                                    <i class="fa fa-info-circle"></i> No jobs applied yet. Click the "Apply for Job"
                                    button to start applying.
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- Jobs Box -->
                <div class="info-box">
                    <div class="info-box-header d-flex align-items-center justify-content-between">
                        <h3 class="">Medical Process</h3>
                        <div class="action-buttons mt-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#medicalProcessModal">
                                <i class="fa fa-briefcase"></i> Add Medical Record
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if (isset($candidate->medicalRecords) && count($candidate->medicalRecords) > 0)
                            <div class="container">
                                <div class="row">
                                    @foreach ($candidate->medicalRecords as $record)
                                        <div class="col-md-4 mb-4">
                                            <div class="card h-100">
                                                <form action="{{ route('medicalRecords.update', $record->id) }}"
                                                    id="updateMedicalForm_{{ $record->id }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <h5 class="card-title">Medical Center: {{ $record->medical_center }}</h5>
                        
                                                        <div class="form-group">
                                                            <label for="status_{{ $record->id }}">Status:</label>
                                                            <select name="status" class="form-control" id="status_{{ $record->id }}">
                                                                <option value="Pending" {{ $record->status == 'Pending' ? 'selected' : '' }}>
                                                                    Pending
                                                                </option>
                                                                <option value="Completed" {{ $record->status == 'Completed' ? 'selected' : '' }}>
                                                                    Completed
                                                                </option>
                                                                <option value="Failed" {{ $record->status == 'Failed' ? 'selected' : '' }}>
                                                                    Failed
                                                                </option>
                                                            </select>
                                                        </div>
                        
                                                        <div class="form-group">
                                                            <label for="notes_{{ $record->id }}">Notes:</label>
                                                            <textarea name="notes" class="form-control"
                                                                      id="notes_{{ $record->id }}">{{ $record->notes }}</textarea>
                                                        </div>
                                                    </div>
                        
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                </form>
                        
                                                <form action="{{ route('medicalRecords.destroy', $record->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @else
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle"></i> No medical records yet. Click the "Add Medical Record"
                                button to start adding.
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Medical Record Modal -->
                <div class="modal fade" id="medicalProcessModal" tabindex="-1" aria-labelledby="medicalProcessModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="medicalProcessModalLabel">Add Medical Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('medicalRecords.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                                    <div class="form-group">
                                        <select name="medical_center" id="medical_center" class="form-control">
                                            <option value="">Select Medical Center</option>
                                            @foreach ($medicalCenters as $medicalCenter)
                                                <option value="{{ $medicalCenter->name }}">{{ $medicalCenter->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Medical Record</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function updateMedicalStatus(recordId) {
                        // Get the selected dropdown value
                        const selectedStatus = document.getElementById('status_' + recordId).value;
                        // Set the hidden input value
                        document.getElementById('new_status_' + recordId).value = selectedStatus;
                        // Submit the form
                        document.getElementById('updateMedicalForm_' + recordId).submit();
                    }
                </script>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12">
                        <a href="{{ route('finalRegistration.edit', $candidate->id) }}"
                            class="btn btn-primary">Edit</a>
                        <a href="{{ route('finalRegistration') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Apply Job Modal -->
<div class="modal fade" id="applyJobModal" tabindex="-1" aria-labelledby="applyJobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyJobModalLabel">Apply for Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="applyJobForm" action="{{ route('job.store') }}" method="POST">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Job Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" name="company" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.footer')
