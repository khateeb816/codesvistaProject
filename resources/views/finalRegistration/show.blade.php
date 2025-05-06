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
                                @foreach ($qualifications as $qualification)
                                    <tr>
                                        <td>{{ $qualification['duration'] }}</td>
                                        <td>{{ $qualification['degree'] }}</td>
                                        <td>{{ $qualification['institute'] }}</td>
                                    </tr>
                                @endforeach
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
                                        <td>{{ $experience['main_category'] }}{{ isset($experience['sub_category']) ? ' - ' . $experience['sub_category'] : '' }}</td>
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
                    @if($candidate->resume)
                        <div class="file-preview">
                            <div class="file-preview-content">
                                <i class="fa fa-file-pdf-o file-icon"></i>
                                <div class="file-details">
                                    <span class="file-name">{{ basename($candidate->resume) }}</span>
                                </div>
                                <a href="{{ asset($candidate->resume) }}" class="btn btn-primary btn-download" download>
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

@include('components.footer')
