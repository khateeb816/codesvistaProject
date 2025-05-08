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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#applyJobModal">
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
                <!-- Medical Box -->
                <div class="info-box">
                    <div class="info-box-header d-flex align-items-center justify-content-between">
                        <h3 class="">Medical Process</h3>
                        <div class="action-buttons mt-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#medicalProcessModal">
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
                                                            <h5 class="card-title">Medical Center:
                                                                {{ $record->medical_center }}</h5>

                                                            <div class="form-group">
                                                                <label
                                                                    for="status_{{ $record->id }}">Status:</label>
                                                                <select name="status" class="form-control"
                                                                    id="status_{{ $record->id }}">
                                                                    <option value="Pending"
                                                                        {{ $record->status == 'Pending' ? 'selected' : '' }}>
                                                                        Pending
                                                                    </option>
                                                                    <option value="Completed"
                                                                        {{ $record->status == 'Completed' ? 'selected' : '' }}>
                                                                        Completed
                                                                    </option>
                                                                    <option value="Failed"
                                                                        {{ $record->status == 'Failed' ? 'selected' : '' }}>
                                                                        Failed
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="notes_{{ $record->id }}">Notes:</label>
                                                                <textarea name="notes" class="form-control" id="notes_{{ $record->id }}">{{ $record->notes }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer d-flex justify-content-between">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">Update</button>
                                                    </form>

                                                    <form action="{{ route('medicalRecords.destroy', $record->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle"></i> No medical records yet. Click the "Add
                                        Medical Record"
                                        button to start adding.
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navttc Box -->
            <div class="info-box">
                <div class="info-box-header d-flex align-items-center justify-content-between">
                    <h3 class="">Navttc Process</h3>
                    <div class="action-buttons mt-2">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#navttcModal">
                            <i class="fa fa-briefcase"></i> Add Navttc Record
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (isset($candidate->navttc) && count($candidate->navttc) > 0)
                            <div class="container">
                                <div class="row">
                                    @foreach ($candidate->navttc as $record)
                                        <div class="col-md-4 mb-4">
                                            <div class="card h-100">
                                                <form action="{{ route('navttc.update', $record->id) }}"
                                                    id="updateNavttcForm_{{ $record->id }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <h5 class="card-title">Center Name: {{ $record->center_name }}
                                                        </h5>

                                                        <div class="form-group">
                                                            <label>course</label>
                                                            <p><strong>course:</strong>
                                                                {{ $record->course }}</p>
                                                            <label>Occupation Details</label>
                                                            <p><strong>Occupation Name (Arabic):</strong>
                                                                {{ $record->occupation_name_arabic }}</p>
                                                            <p><strong>Occupation Name (English):</strong>
                                                                {{ $record->occupation_name_english }}</p>
                                                            <p><strong>Occupation Code:</strong>
                                                                {{ $record->occupation_code }}</p>

                                                            <label>Test Center Details</label>
                                                            <p><strong>Test Center City:</strong>
                                                                {{ $record->test_center_city }}</p>

                                                            <label>Test Schedule</label>
                                                            <p><strong>Test Date:</strong> {{ $record->test_date }}
                                                            </p>
                                                            <p><strong>Expected Result Date:</strong>
                                                                {{ $record->expected_result_date }}</p>
                                                            <p><strong>Result Status:</strong>
                                                                {{ $record->result_status }}</p>

                                                            <label for="status_{{ $record->id }}">Status:</label>
                                                            <select name="status" class="form-control"
                                                                id="status_{{ $record->id }}">
                                                                <option value="Pending"
                                                                    {{ $record->status == 'Pending' ? 'selected' : '' }}>
                                                                    Pending
                                                                </option>
                                                                <option value="Completed"
                                                                    {{ $record->status == 'Completed' ? 'selected' : '' }}>
                                                                    Completed
                                                                </option>
                                                                <option value="Failed"
                                                                    {{ $record->status == 'Failed' ? 'selected' : '' }}>
                                                                    Failed
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="notes_{{ $record->id }}">Notes:</label>
                                                            <textarea name="notes" class="form-control" id="notes_{{ $record->id }}">{{ $record->notes }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="card-footer d-flex justify-content-between">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Update</button>
                                                </form>

                                                <form action="{{ route('navttc.destroy', $record->id) }}"
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
                @else
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> No NAVTTC records yet. Click the "Add Navttc Record"
                        button to start adding.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- E Number Box -->
    <div class="info-box">
        <div class="info-box-header">
            <h3>E Number</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if ($candidate->e_number)
                    <div class="info-group">
                        <div class="info-label">Current E Number</div>
                        <div class="info-value">{{ $candidate->e_number }}</div>
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> E Number: Not Issued
                    </div>
                @endif
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <h5 class="card-title">Add / Update E Number</h5>
            </div>
            <div class="col-md-10">
                <form action="{{ route('eNumber.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                    <div class="form-group">
                        <label for="e_number">E Number</label>
                        <input type="text" class="form-control" id="e_number" name="e_number"
                            value="{{ $candidate->e_number ?? '' }}" placeholder="Enter E Number">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Documents for Embassy Box -->
    <div class="info-box">
        <div class="info-box-header">
            <h3>Documents for Embassy</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('documents.update', $candidate->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="visa_form" name="visa_form"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->visa_form ? 'checked' : '' }}>
                                <label class="form-check-label" for="visa_form">
                                    Visa form
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="waqala_paper"
                                    name="waqala_paper"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->waqala_paper ? 'checked' : '' }}>
                                <label class="form-check-label" for="waqala_paper">
                                    Waqala paper (from online Saudi Website)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="e_number_print"
                                    name="e_number_print"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->e_number_print ? 'checked' : '' }}>
                                <label class="form-check-label" for="e_number_print">
                                    Candidate's E-Number Print
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="company_agreement"
                                    name="company_agreement"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->company_agreement ? 'checked' : '' }}>
                                <label class="form-check-label" for="company_agreement">
                                    Company's Agreement (Attested by the Embassy)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="navttc_report"
                                    name="navttc_report"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->navttc_report ? 'checked' : '' }}>
                                <label class="form-check-label" for="navttc_report">
                                    NAVTTC test Report (For required professions)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="driving_license"
                                    name="driving_license"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->driving_license ? 'checked' : '' }}>
                                <label class="form-check-label" for="driving_license">
                                    Driving Lic. (For Drivers & Operators)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="driving_undertaking"
                                    name="driving_license_undertaking"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->driving_license_undertaking ? 'checked' : '' }}>
                                <label class="form-check-label" for="driving_undertaking">
                                    Driving Lic. Undertaking
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="driving_online_print"
                                    name="driving_license_online_print"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->driving_license_online_print ? 'checked' : '' }}>
                                <label class="form-check-label" for="driving_online_print">
                                    Driving Lic. online Print
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="degree_copies"
                                    name="degree_copies"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->degree_copies ? 'checked' : '' }}>
                                <label class="form-check-label" for="degree_copies">
                                    Degree's copies (For required professions)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agency_undertaking"
                                    name="agency_undertaking"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->agency_undertaking ? 'checked' : '' }}>
                                <label class="form-check-label" for="agency_undertaking">
                                    Agency's Undertaking
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agency_license"
                                    name="agency_license"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->agency_license ? 'checked' : '' }}>
                                <label class="form-check-label" for="agency_license">
                                    Agency's valid License copy
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="police_certificate"
                                    name="police_certificate"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->police_certificate ? 'checked' : '' }}>
                                <label class="form-check-label" for="police_certificate">
                                    Police character certificate (Original)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="fir_newspaper"
                                    name="fir_newspaper"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->fir_newspaper ? 'checked' : '' }}>
                                <label class="form-check-label" for="fir_newspaper">
                                    FIR & Newspaper (If required)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="medical_report"
                                    name="medical_report"
                                    {{ isset($candidate->embassyDocument) && $candidate->embassyDocument->medical_report ? 'checked' : '' }}>
                                <label class="form-check-label" for="medical_report">
                                    Valid Medical fit Report of Candidate
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update Documents</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Protector Process Box -->
    <div class="info-box">
        <div class="info-box-header d-flex align-items-center justify-content-between">
            <h3 class="">Protector Process</h3>
            <div class="action-buttons mt-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#protectorModal">
                    <i class="fa fa-shield"></i> Add Protector Record
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (isset($candidate->protectorRecords) && $candidate->protectorRecords->count() > 0)
                    <div class="container">
                        <div class="row">
                            @foreach ($candidate->protectorRecords as $record)
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Protector Details</h5>
                                            <p><strong>Protector:</strong> {{ $record->protector }}</p>
                                            <p><strong>Date:</strong> {{ $record->date }}</p>
                                            <p><strong>Expenses:</strong> {{ $record->expenses ?? 'N/A' }}</p>
                                            <p><strong>Notes:</strong> {{ $record->notes ?? 'N/A' }}</p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editProtectorModal{{ $record->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('protector.destroy', $record->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Protector Modal -->
                                <div class="modal fade" id="editProtectorModal{{ $record->id }}" tabindex="-1"
                                    aria-labelledby="editProtectorModalLabel{{ $record->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="editProtectorModalLabel{{ $record->id }}">Edit Protector
                                                    Record</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('protector.update', $record->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $candidate->id }}">
                                                    <div class="form-group mb-3">
                                                        <label for="protector{{ $record->id }}">Protector</label>
                                                        <select class="form-control"
                                                            id="protector{{ $record->id }}" name="protector">
                                                            <option value="">Select Protector</option>
                                                            <option value="PTN"
                                                                {{ $record->protector == 'PTN' ? 'selected' : '' }}>
                                                                PTN</option>
                                                            <option value="Allied Bank"
                                                                {{ $record->protector == 'Allied Bank' ? 'selected' : '' }}>
                                                                Allied Bank</option>
                                                            <option value="NBP Form"
                                                                {{ $record->protector == 'NBP Form' ? 'selected' : '' }}>
                                                                NBP Form</option>
                                                            <option value="State Life Insurance"
                                                                {{ $record->protector == 'State Life Insurance' ? 'selected' : '' }}>
                                                                State Life Insurance</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="date{{ $record->id }}">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="date{{ $record->id }}" name="date"
                                                            value="{{ $record->date }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="expenses{{ $record->id }}">Expenses
                                                            (Optional)
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            id="expenses{{ $record->id }}" name="expenses"
                                                            value="{{ $record->expenses }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="notes{{ $record->id }}">Notes
                                                            (Optional)</label>
                                                        <textarea class="form-control" id="notes{{ $record->id }}" name="notes" rows="3">{{ $record->notes }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Protector
                                                        Record</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> No protector records yet. Click the "Add Protector Record"
                        button to
                        start adding.
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Documents for Protector -->
    <div class="info-box">
        <div class="info-box-header">
            <h3>Documents for Protector</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('protectorDocument.update', $candidate->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="bc_form" name="bc_form"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->bc_form ? 'checked' : '' }}>
                                <label class="form-check-label" for="bc_form">
                                    BC FORM (FROM ALLIED BANK)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="national_bank_slip"
                                    name="national_bank_slip"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->national_bank_slip ? 'checked' : '' }}>
                                <label class="form-check-label" for="national_bank_slip">
                                    NATIONAL BANK`S DEPOSIT SLIP
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="insurance_paper"
                                    name="insurance_paper"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->insurance_paper ? 'checked' : '' }}>
                                <label class="form-check-label" for="insurance_paper">
                                    INSURANCE PAPER
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="passport_id_card"
                                    name="passport_id_card"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->passport_id_card ? 'checked' : '' }}>
                                <label class="form-check-label" for="passport_id_card">
                                    PASSPORT & ID CARD
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="ptn_form" name="ptn_form"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->ptn_form ? 'checked' : '' }}>
                                <label class="form-check-label" for="ptn_form">
                                    PTN FORM ORIGINAL
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="bank_details"
                                    name="bank_details"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->bank_details ? 'checked' : '' }}>
                                <label class="form-check-label" for="bank_details">
                                    CANDIDATES BANK DETAILS + NOMINEE`S ID CARD COPIES & MOBILE NUMBER
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="diary_form" name="diary_form"
                                    {{ isset($candidate->protectorDocuments) && $candidate->protectorDocuments->diary_form ? 'checked' : '' }}>
                                <label class="form-check-label" for="diary_form">
                                    DIARY FORM (PREPARED BY THE OFFICE)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update Documents</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  Expences Box -->
    <div class="info-box">
        <div class="info-box-header d-flex align-items-center justify-content-between">
            <h3 class="">Expenses</h3>
            <div class="action-buttons mt-2">
                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                    data-bs-target="#expenseRecordModal">
                    <i class="fa fa-money"></i> Add Expense Record
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (isset($candidate->expenseRecords) && $candidate->expenseRecords->count() > 0)
                    <div class="container">
                        <div class="row">
                            @foreach ($candidate->expenseRecords as $record)
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Expense Details</h5>
                                            <p><strong>Amount:</strong> {{ $record->amount }}</p>
                                            <p><strong>Date:</strong> {{ $record->date }}</p>
                                            <p><strong>Expense Type:</strong> {{ $record->expense_type ?? 'N/A' }}</p>
                                            <p><strong>Payment Method:</strong> {{ $record->payment_method ?? 'N/A' }}
                                            </p>
                                            <p><strong>Reference Number:</strong>
                                                {{ $record->reference_number ?? 'N/A' }}</p>
                                            <p><strong>Description:</strong> {{ $record->description ?? 'N/A' }}</p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editExpenseModal{{ $record->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('expenseRecord.destroy', $record->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Expense Modal -->
                                <div class="modal fade" id="editExpenseModal{{ $record->id }}" tabindex="-1"
                                    aria-labelledby="editExpenseModalLabel{{ $record->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="editExpenseModalLabel{{ $record->id }}">Edit Expense
                                                    Record</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('expenseRecord.update', $record->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $candidate->id }}">
                                                    <div class="form-group mb-3">
                                                        <label for="amount{{ $record->id }}">Amount</label>
                                                        <input type="number" class="form-control"
                                                            id="amount{{ $record->id }}" name="amount"
                                                            value="{{ $record->amount }}">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="expense_type{{ $record->id }}">Expense
                                                            Type</label>
                                                        <select class="form-control"
                                                            id="expense_type{{ $record->id }}"
                                                            name="expense_type">
                                                            <option value="E-NUMBER FEE (ONLINE)"
                                                                {{ $record->expense_type == 'E-NUMBER FEE (ONLINE)' ? 'selected' : '' }}>
                                                                E-NUMBER FEE (ONLINE)</option>
                                                            <option value="VISA FEE (STAMPING/OBJECTION)"
                                                                {{ $record->expense_type == 'VISA FEE (STAMPING/OBJECTION)' ? 'selected' : '' }}>
                                                                VISA FEE (STAMPING/OBJECTION)</option>
                                                            <option value="ALLIDE BANK`s FEE"
                                                                {{ $record->expense_type == 'ALLIDE BANK`s FEE' ? 'selected' : '' }}>
                                                                ALLIDE BANK`s FEE</option>
                                                            <option value="NATIONAL BANK`s FEE WITH INSURANCE FEE"
                                                                {{ $record->expense_type == 'NATIONAL BANK`s FEE WITH INSURANCE FEE' ? 'selected' : '' }}>
                                                                NATIONAL BANK`s FEE WITH INSURANCE FEE</option>
                                                            <option value="PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)"
                                                                {{ $record->expense_type == 'PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)' ? 'selected' : '' }}>
                                                                PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)</option>
                                                            <option value="TRANSPORTATION EXPENCES"
                                                                {{ $record->expense_type == 'TRANSPORTATION EXPENCES' ? 'selected' : '' }}>
                                                                TRANSPORTATION EXPENCES</option>
                                                            <option value="SALARIES"
                                                                {{ $record->expense_type == 'SALARIES' ? 'selected' : '' }}>
                                                                SALARIES</option>
                                                            <option value="HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)"
                                                                {{ $record->expense_type == 'HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)' ? 'selected' : '' }}>
                                                                HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)</option>
                                                            <option value="MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)"
                                                                {{ $record->expense_type == 'MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)' ? 'selected' : '' }}>
                                                                MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)</option>
                                                            <option value="PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)"
                                                                {{ $record->expense_type == 'PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)' ? 'selected' : '' }}>
                                                                PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)</option>
                                                            <option value="TICKETS PAYMENT"
                                                                {{ $record->expense_type == 'TICKETS PAYMENT' ? 'selected' : '' }}>
                                                                TICKETS PAYMENT</option>
                                                            <option value="OFFICE MAINTENANCE EXPENSES"
                                                                {{ $record->expense_type == 'OFFICE MAINTENANCE EXPENSES' ? 'selected' : '' }}>
                                                                OFFICE MAINTENANCE EXPENSES</option>
                                                            <option value="STATIONARY"
                                                                {{ $record->expense_type == 'STATIONARY' ? 'selected' : '' }}>
                                                                STATIONARY</option>
                                                            <option value="ELECTRICITY BILL"
                                                                {{ $record->expense_type == 'ELECTRICITY BILL' ? 'selected' : '' }}>
                                                                ELECTRICITY BILL</option>
                                                            <option value="PTCL BILLS"
                                                                {{ $record->expense_type == 'PTCL BILLS' ? 'selected' : '' }}>
                                                                PTCL BILLS</option>
                                                            <option value="CHARITY"
                                                                {{ $record->expense_type == 'CHARITY' ? 'selected' : '' }}>
                                                                CHARITY</option>
                                                            <option value="COURIER EXPENSES"
                                                                {{ $record->expense_type == 'COURIER EXPENSES' ? 'selected' : '' }}>
                                                                COURIER EXPENSES</option>
                                                            <option value="COMPUTER ASSECORIES"
                                                                {{ $record->expense_type == 'COMPUTER ASSECORIES' ? 'selected' : '' }}>
                                                                COMPUTER ASSECORIES</option>
                                                            <option value="CLEANING EXPENSES"
                                                                {{ $record->expense_type == 'CLEANING EXPENSES' ? 'selected' : '' }}>
                                                                CLEANING EXPENSES</option>
                                                            <option value="OTHER EXPENSES"
                                                                {{ $record->expense_type == 'OTHER EXPENSES' ? 'selected' : '' }}>
                                                                OTHER EXPENSES</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="date{{ $record->id }}">Date</label>
                                                        <input type="date" class="form-control"
                                                            id="date{{ $record->id }}" name="date"
                                                            value="{{ $record->date }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="payment_method{{ $record->id }}">Payment
                                                            Method</label>
                                                        <select class="form-control"
                                                            id="payment_method{{ $record->id }}"
                                                            name="payment_method">
                                                            <option value="Cash">Cash</option>
                                                            <option value="Credit Card">Credit Card</option>
                                                            <option value="Bank Transfer">Bank Transfer</option>
                                                            <option value="Check">Check</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="description{{ $record->id }}">Description
                                                            (Optional)
                                                        </label>
                                                        <textarea class="form-control" id="description{{ $record->id }}" name="description" rows="3">{{ $record->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Expense
                                                        Record</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> No protector records yet. Click the "Add Protector Record"
                        button to
                        start adding.
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Medical Record Modal -->
    <div class="modal fade" id="medicalProcessModal" tabindex="-1" aria-labelledby="medicalProcessModalLabel"
        aria-hidden="true">
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
                                    <option value="{{ $medicalCenter->name }}">{{ $medicalCenter->name }}
                                    </option>
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

    <!-- Protector Process Modal -->
    <div class="modal fade" id="protectorModal" tabindex="-1" aria-labelledby="protectorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="protectorModalLabel">Add Protector Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('protector.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                        <div class="form-group mb-3">
                            <label for="protector">Protector</label>
                            <select name="protector" id="protector" class="form-control">
                                <option value="">Select Protector</option>
                                <option value="PTN">PTN</option>
                                <option value="Allied Bank">Allied Bank</option>
                                <option value="NBP Form">NBP Form</option>
                                <option value="State Life Insurance">State Life Insurance</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group mb-3">
                            <label for="expenses">Expenses (Optional)</label>
                            <input type="text" class="form-control" id="expenses" name="expenses">
                        </div>
                        <div class="form-group mb-3">
                            <label for="notes">Notes (Optional)</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Protector Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- NAVTTC Modal -->
    <div class="modal fade" id="navttcModal" tabindex="-1" aria-labelledby="navttcModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="navttcModalLabel">Add NAVTTC Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('navttc.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                        <div class="form-group mb-3">
                            <label for="center_name">Center Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="center_name" name="center_name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="course">Course <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="course" name="course" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Select Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                                <option value="Failed">Failed</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="end_date">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="occupation_name_arabic">Occupation Name (Arabic) </label>
                            <input type="text" class="form-control" id="occupation_name_arabic"
                                name="occupation_name_arabic">
                        </div>
                        <div class="form-group mb-3">
                            <label for="occupation_name_english">Occupation Name (English) </label>
                            <input type="text" class="form-control" id="occupation_name_english"
                                name="occupation_name_english">
                        </div>
                        <div class="form-group mb-3">
                            <label for="occupation_code">Occupation Code </label>
                            <input type="text" class="form-control" id="occupation_code" name="occupation_code">
                        </div>
                        <div class="form-group mb-3">
                            <label for="test_center_city">Test Center City </label>
                            <input type="text" class="form-control" id="test_center_city"
                                name="test_center_city">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="test_date">Test Date</label>
                                    <input type="date" class="form-control" id="test_date" name="test_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="expected_result_date">Expected Result Date</label>
                                    <input type="date" class="form-control" id="expected_result_date"
                                        name="expected_result_date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="result_status">Result Status <span class="text-danger">*</span></label>
                            <select class="form-control" id="result_status" name="result_status" required>
                                <option value="">Select Result Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Passed">Passed</option>
                                <option value="Failed">Failed</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add NAVTTC Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Medical Process Modal -->
    <div class="modal fade" id="medicalProcessModal" tabindex="-1" aria-labelledby="medicalProcessModalLabel"
        aria-hidden="true">
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
                                    <option value="{{ $medicalCenter->name }}">{{ $medicalCenter->name }}
                                    </option>
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

    <!-- Expense Record Modal -->
    <div class="modal fade" id="expenseRecordModal" tabindex="-1" aria-labelledby="expenseRecordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="expenseRecordModalLabel">Add Expense Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('expenseRecord.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="amount">Amount <span class="text-danger">*</span></label>
                                    <input type="number" step="0.01" class="form-control" id="amount"
                                        name="amount" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="date">Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="date" name="date"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="expense_type">Expense Type</label>
                                    <select class="form-control"
                                                            id="expense_type"
                                                            name="expense_type">
                                                            <option value="E-NUMBER FEE (ONLINE)">
                                                                E-NUMBER FEE (ONLINE)</option>
                                                            <option value="VISA FEE (STAMPING/OBJECTION)">
                                                                VISA FEE (STAMPING/OBJECTION)</option>
                                                            <option value="ALLIDE BANK`s FEE">
                                                                ALLIDE BANK`s FEE</option>
                                                            <option value="NATIONAL BANK`s FEE WITH INSURANCE FEE">
                                                                NATIONAL BANK`s FEE WITH INSURANCE FEE</option>
                                                            <option value="PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)">
                                                                PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)</option>
                                                            <option value="TRANSPORTATION EXPENCES">
                                                                TRANSPORTATION EXPENCES</option>
                                                            <option value="SALARIES">
                                                                SALARIES</option>
                                                            <option value="HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)">
                                                                HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)</option>
                                                            <option value="MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)">
                                                                MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)</option>
                                                            <option value="PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)">
                                                                PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)</option>
                                                            <option value="TICKETS PAYMENT">
                                                                TICKETS PAYMENT</option>
                                                            <option value="OFFICE MAINTENANCE EXPENSES">
                                                                OFFICE MAINTENANCE EXPENSES</option>
                                                            <option value="STATIONARY">
                                                                STATIONARY</option>
                                                            <option value="ELECTRICITY BILL">
                                                                ELECTRICITY BILL</option>
                                                            <option value="PTCL BILLS">
                                                                PTCL BILLS</option>
                                                            <option value="CHARITY">
                                                                CHARITY</option>
                                                            <option value="COURIER EXPENSES">
                                                                COURIER EXPENSES</option>
                                                            <option value="COMPUTER ASSECORIES">
                                                                COMPUTER ASSECORIES</option>
                                                            <option value="CLEANING EXPENSES">
                                                                CLEANING EXPENSES</option>
                                                            <option value="OTHER EXPENSES">
                                                                OTHER EXPENSES</option>
                                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="payment_method">Payment Method</label>
                                    <select class="form-control" id="payment_method" name="payment_method">
                                        <option value="">Select Payment Method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                        <option value="Check">Check</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Expense Record</button>
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
            <a href="{{ route('finalRegistration.edit', $candidate->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('finalRegistration') }}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- Apply Job Modal -->
<div class="modal fade" id="applyJobModal" tabindex="-1" aria-labelledby="applyJobModalLabel"
    aria-hidden="true">
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
                                <input type="text" class="form-control" id="title" name="title"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    required>
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
