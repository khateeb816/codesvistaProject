@include('components.header')

<!-- Custom CSS for tabs -->
<style>
    .registration-tabs {
        display: flex;
        background-color: #1f2d3d;
        border-bottom: none;
        margin-bottom: 20px;
        overflow-x: auto;
        white-space: nowrap;
    }

    .registration-tabs li {
        margin-bottom: 0;
    }

    .registration-tabs li a {
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 0;
        margin-right: 0;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .registration-tabs li a:hover {
        background-color: #2c3e50;
        border: none;
    }

    .registration-tabs li.active a,
    .registration-tabs li.active a:hover,
    .registration-tabs li.active a:focus {
        background-color: #3498db !important;
        color: #fff !important;
        border: none !important;
        cursor: default !important;
        position: relative !important;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2) !important;
        font-weight: bold !important;
    }

    .registration-tabs li.active a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        /* Increased height */
        background-color: #ff0000;
        /* Brighter red color bar */
        box-shadow: 0 0 3px rgba(255, 0, 0, 0.5);
    }

    .tab-content {
        padding: 20px 0;
    }

    /* Skills sub-tabs styling */
    #skills-tabs {
        display: flex;
        background-color: #34495e;
        border-bottom: none;
        margin-bottom: 20px;
        overflow-x: auto;
        white-space: nowrap;
    }

    #skills-tabs li {
        margin-bottom: 0;
    }

    #skills-tabs li a {
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 0;
        margin-right: 0;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        font-size: 0.9em;
    }

    #skills-tabs li a:hover {
        background-color: #2c3e50;
        border: none;
    }

    #skills-tabs li.active a,
    #skills-tabs li.active a:hover,
    #skills-tabs li.active a:focus {
        background-color: #e74c3c !important;
        color: #fff !important;
        border: none !important;
        cursor: default !important;
        position: relative !important;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2) !important;
        font-weight: bold !important;
    }

    #skills-tabs li.active a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background-color: #ff0000;
        box-shadow: 0 0 3px rgba(255, 0, 0, 0.5);
    }

    /* Dropzone styling */
    .dropzone-wrapper {
        border: 2px dashed #ccc;
        color: #ccc;
        position: relative;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background-color: #1e1e1e;
    }

    .dropzone-desc {
        position: absolute;
        text-align: center;
        width: 100%;
        margin-top: 0;
        color: #ccc;
    }

    .dropzone-desc i {
        font-size: 3em;
        margin-bottom: 10px;
        color: #ccc;
    }

    .dropzone-input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        z-index: 10;
    }

    .dropzone-wrapper:hover {
        background-color: #2a2a2a;
        border-color: #3498db;
    }

    #resumes .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
        margin-bottom: 15px;
    }

    #resumes .btn-success {
        background-color: #1abc9c;
        border-color: #1abc9c;
    }

    #resumes-table {
        background-color: transparent;
        color: #fff;
    }

    #resumes-table th {
        background-color: #2a2a2a;
        color: #fff;
        border-color: #444;
    }

    /* File preview styling */
    .file-preview {
        background-color: #2a2a2a;
        border: 1px solid #444;
        border-radius: 4px;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 15px;
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
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .file-name {
        font-weight: bold;
        color: #fff;
        margin-bottom: 5px;
    }

    .file-size {
        color: #ccc;
        font-size: 0.9em;
    }

    .btn-download {
        margin-left: 15px;
        background-color: #3498db;
        border-color: #3498db;
        color: #fff;
    }

    .btn-download:hover {
        background-color: #2980b9;
        border-color: #2980b9;
        color: #fff;
    }

    /* Make tabs responsive */
    @media (max-width: 768px) {
        .registration-tabs, #skills-tabs {
            flex-wrap: wrap;
        }

        .registration-tabs li, #skills-tabs li {
            flex: 1 0 auto;
        }
    }

    .alert-info {
        background-color: #3498db;
        border-color: #3498db;
        color: #fff;
        padding: 10px 15px;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .alert-info i {
        margin-right: 5px;
    }

    #new-file-preview {
        display: none;
    }

    #new-file-preview.show {
        display: block;
    }
</style>

<!-- Candidate Registration Form -->
<div role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Candidate Final Registration</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <!-- Tab Navigation -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="registration-tabs">
                        <li class="active"><a href="#basic-info" data-toggle="tab" class="tab-btn">Basic Info</a></li>
                        <li><a href="#passport-info" data-toggle="tab" class="tab-btn">Passport Info</a></li>
                        <li><a href="#residence-info" data-toggle="tab" class="tab-btn">Residence Info</a></li>
                        <li><a href="#contact-details" data-toggle="tab" class="tab-btn">Contact Details</a></li>
                        <li><a href="#skills" data-toggle="tab" class="tab-btn">Skills</a></li>
                        <li><a href="#present-status" data-toggle="tab" class="tab-btn">Present Status</a></li>
                        <li><a href="#candidate-dependents" data-toggle="tab" class="tab-btn">Candidate Dependents</a>
                        </li>
                        <li><a href="#resumes" data-toggle="tab" class="tab-btn">Resumes</a></li>
                    </ul>
                </div>

                <form class="form-horizontal form-label-left" method="POST"
                    action="{{ route('finalRegistration.update', $candidate->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{!! is_array($error) ? json_encode($error) : $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Basic Info Tab -->
                        <div class="tab-pane active" id="basic-info">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="username">Username <span
                                            class="  text-danger">*</span></label>
                                    <input id="username" class="form-control" value="{{ $candidate->username }}"
                                        name="username" placeholder="Username" required  type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="password">Password (leave blank if not changing)</label>
                                    <input id="password" class="form-control" value="{{ old('password') }}"
                                        name="password" placeholder="Password"   type="password">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="candidate_type">Candidate Type <span
                                            class="  text-danger">*</span></label>
                                    <select id="candidate_type" name="candidate_type" class="form-control"  >
                                        <option value="">Select Candidate Type</option>
                                        <option value="UnSkilled" {{ $candidate->candidate_type == 'UnSkilled' ? 'selected' : '' }}>UnSkilled</option>
                                        <option value="Skilled" {{ $candidate->candidate_type == 'Skilled' ? 'selected' : '' }}>Skilled</option>
                                        <option value="Professional" {{ $candidate->candidate_type == 'Professional' ? 'selected' : '' }}>Professional</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="religion">Religion</label>
                                    <input id="religion" class="form-control" value="{{ $candidate->religion }}"
                                        name="religion" placeholder="Religion" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="title">Title <span
                                            class="  text-danger">*</span></label>
                                    <select id="title" name="title" class="form-control"  >
                                        <option value="">Select Title</option>
                                        <option value="Mr." {{ $candidate->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ $candidate->title == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Miss" {{ $candidate->title == 'Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Dr." {{ $candidate->title == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="wages_salary">Wages/Salary</label>
                                    <input id="wages_salary" class="form-control" value="{{ $candidate->wages_salary }}"
                                        name="wages_salary" placeholder="Wages/Salary" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="first_name">First Name <span
                                            class="  text-danger">*</span></label>
                                    <input id="first_name" class="form-control" value="{{ $candidate->first_name }}"
                                        name="first_name" placeholder="First Name" required  type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="marital_status">Marital Status</label>
                                    <select id="marital_status" name="marital_status" class="form-control">
                                        <option value="">Select Marital Status</option>
                                        <option value="Single" {{ $candidate->marital_status == 'Single' ? 'selected' : '' }}>Single</option>
                                        <option value="Married" {{ $candidate->marital_status == 'Married' ? 'selected' : '' }}>Married</option>
                                        <option value="Divorced" {{ $candidate->marital_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                        <option value="Widowed" {{ $candidate->marital_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="last_name">Last Name <span
                                            class="  text-danger">*</span></label>
                                    <input id="last_name" class="form-control" value="{{ $candidate->last_name }}"
                                        name="last_name" placeholder="Last Name" required  type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="education">Education</label>
                                    <select id="education" name="education" class="form-control">
                                        <option value="">Select Education</option>
                                        <option value="High School" {{ $candidate->education == 'High School' ? 'selected' : '' }}>High School</option>
                                        <option value="Bachelor" {{ $candidate->education == 'Bachelor' ? 'selected' : '' }}>Bachelor</option>
                                        <option value="Master" {{ $candidate->education == 'Master' ? 'selected' : '' }}>Master</option>
                                        <option value="PhD" {{ $candidate->education == 'PhD' ? 'selected' : '' }}>PhD</option>
                                        <option value="Computer Science" {{ $candidate->education == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="cnic">CNIC <span
                                            class="  text-danger">*</span></label>
                                    <input id="cnic" class="form-control" value="{{ $candidate->cnic }}"
                                        name="cnic" placeholder="CNIC" required  type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="profession">Profession</label>
                                    <input id="profession" class="form-control" value="{{ $candidate->profession }}"
                                        name="profession" placeholder="Profession" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="father_name">Father Name <span
                                            class="  text-danger">*</span></label>
                                    <input id="father_name" class="form-control" value="{{ $candidate->father_name }}"
                                        name="father_name" placeholder="Father Name" required  type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="experience">Experience</label>
                                    <select id="experience" name="experience" class="form-control">
                                        <option value="">Select Experience</option>
                                        @foreach ($experiences as $experience)
                                            <option value="{{ $experience->name }}"
                                                data-custom="{{ $experience->id }}" {{ $candidate->experience == $experience->name ? 'selected' : '' }}>
                                                {{ $experience->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="gender">Gender <span
                                            class="  text-danger">*</span></label>
                                    <select id="gender" name="gender" class="form-control"  required>
                                        <option value="" {{ $candidate->gender == '' ? 'selected' : '' }}>Select Gender</option>
                                        <option value="Male" {{ $candidate->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $candidate->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ $candidate->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="job_type">Job Type</label>
                                    <select id="job_type" name="job_type" class="form-control">
                                        <option value="" {{ $candidate->job_type == '' ? 'selected' : '' }}>Select Job Type</option>
                                        <option value="Full Time" {{ $candidate->job_type == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                        <option value="Part Time" {{ $candidate->job_type == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                        <option value="Contract" {{ $candidate->job_type == 'Contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="Freelance" {{ $candidate->job_type == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="date_of_birth">Date of Birth <span
                                            class="  text-danger">*</span></label>
                                    <input id="date_of_birth" class="form-control"
                                        value="{{ $candidate->date_of_birth }}" name="date_of_birth"
                                        placeholder="Date of Birth" required  type="date">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="job_applied_for">Job Applied For</label>
                                    <input id="job_applied_for" class="form-control"
                                        value="{{ $candidate->job_applied_for }}" name="job_applied_for"
                                        placeholder="Job Applied For" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="age">Age</label>
                                    <input id="age" class="form-control" value="{{ $candidate->age }}"
                                        name="age" placeholder="Age" type="number">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="plan">Plan</label>
                                    <select id="plan" name="plan" class="form-control">
                                        <option value="" {{ $candidate->plan == '' ? 'selected' : '' }}>Select Plan</option>
                                        <option value="Basic" {{ $candidate->plan == 'Basic' ? 'selected' : '' }}>Basic</option>
                                        <option value="Standard" {{ $candidate->plan == 'Standard' ? 'selected' : '' }}>Standard</option>
                                        <option value="Premium" {{ $candidate->plan == 'Premium' ? 'selected' : '' }}>Premium</option>
                                        <option value="Gold" {{ $candidate->plan == 'Gold' ? 'selected' : '' }}>Gold</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="place_of_birth">Place Of Birth</label>
                                    <input id="place_of_birth" class="form-control"
                                        value="{{ $candidate->place_of_birth }}" name="place_of_birth"
                                        placeholder="Place Of Birth" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="nationality">Nationality <span
                                            class="  text-danger">*</span></label>
                                    <input id="nationality" class="form-control" value="{{ $candidate->nationality }}"
                                        name="nationality" placeholder="Nationality" required  type="text">
                                </div>
                            </div>

                        </div><!-- End Basic Info Tab -->

                        <!-- Passport Info Tab -->
                        <div class="tab-pane" id="passport-info">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_number">Passport Number</label>
                                    <input id="passport_number" class="form-control"
                                        value="{{ $candidate->passport_number }}" name="passport_number"
                                        placeholder="Passport Number" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_issue_date">Issue Date</label>
                                    <input id="passport_issue_date" class="form-control"
                                        value="{{ $candidate->passport_issue_date }}" name="passport_issue_date"
                                        placeholder="Issue Date" type="date">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_expiry_date">Expiry Date</label>
                                    <input id="passport_expiry_date" class="form-control"
                                        value="{{ $candidate->passport_expiry_date }}" name="passport_expiry_date"
                                        placeholder="Expiry Date" type="date">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_issue_place">Issue Place</label>
                                    <input id="passport_issue_place" class="form-control"
                                        value="{{ $candidate->passport_issue_place }}" name="passport_issue_place"
                                        placeholder="Issue Place" type="text">
                                </div>
                            </div>
                        </div><!-- End Passport Info Tab -->

                        <!-- Residence Info Tab -->
                        <div class="tab-pane" id="residence-info">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="country">Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="" {{ $candidate->country == '' ? 'selected' : '' }}>Select Country</option>
                                        <option value="Pakistan" {{ $candidate->country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                        <option value="India" {{ $candidate->country == 'India' ? 'selected' : '' }}>India</option>
                                        <option value="China" {{ $candidate->country == 'China' ? 'selected' : '' }}>China</option>
                                        <option value="Srilanka" {{ $candidate->country == 'Srilanka' ? 'selected' : '' }}>Srilanka</option>
                                        <option value="Nepal" {{ $candidate->country == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                                        <option value="Bhutan" {{ $candidate->country == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                                        <option value="Bangladesh" {{ $candidate->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="state">State</label>
                                    <select name="state" id="state" class="form-control">
                                        <option value="" {{ $candidate->state == '' ? 'selected' : '' }}>Select State</option>
                                        <option value="Sindh" {{ $candidate->state == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                                        <option value="Punjab" {{ $candidate->state == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                                        <option value="Khyber Pakhtunkhwa" {{ $candidate->state == 'Khyber Pakhtunkhwa' ? 'selected' : '' }}>Khyber Pakhtunkhwa</option>
                                        <option value="Balochistan" {{ $candidate->state == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                                        <option value="Kashmir" {{ $candidate->state == 'Kashmir' ? 'selected' : '' }}>Kashmir</option>
                                        <option value="FATA" {{ $candidate->state == 'FATA' ? 'selected' : '' }}>FATA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="province">Province</label>
                                    <input id="province" class="form-control"
                                        value="{{ $candidate->province }}" name="province"
                                        placeholder="Province" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="district">District</label>
                                    <input id="district" class="form-control"
                                        value="{{ $candidate->district }}" name="district"
                                        placeholder="District" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="city">City</label>
                                    <input id="city" class="form-control"
                                        value="{{ $candidate->city }}" name="city" placeholder="City"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="zip">Zip</label>
                                    <input id="zip" class="form-control"
                                        value="{{ $candidate->zip }}" name="zip" placeholder="Zip"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="street">Street</label>
                                    <input id="street" class="form-control"
                                        value="{{ $candidate->street }}" name="street"
                                        placeholder="Street" type="text">
                                </div>
                            </div>
                        </div><!-- End Residence Info Tab -->

                        <!-- Contact Details Tab -->
                        <div class="tab-pane" id="contact-details">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="email">Email <span
                                            class="  text-danger">*</span></label>
                                    <input id="email" class="form-control" value="{{ $candidate->email }}"
                                        name="email" placeholder="Email" required  type="email">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="mobile">Mobile <span
                                            class="  text-danger">*</span></label>
                                    <input id="mobile" class="form-control" value="{{ $candidate->mobile }}"
                                        name="mobile" placeholder="Mobile" required  type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="alternate_phone">Alternate Phone</label>
                                    <input id="alternate_phone" class="form-control"
                                        value="{{ $candidate->alternate_mobile }}" name="alternate_mobile"
                                        placeholder="Alternate Phone" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="fax"> Fax</label>
                                    <input id="fax" class="form-control"
                                        value="{{ $candidate->fax }}" name="fax"
                                        placeholder="Fax" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="website"> Website</label>
                                    <input id="website" class="form-control"
                                        value="{{ $candidate->website }}" name="website"
                                        placeholder="Website" type="text">
                                </div>

                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="address"> Address</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ $candidate->address }}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="return_address">Return Address</label>
                                    <textarea name="return_address" id="return_address" class="form-control" cols="30" rows="10">{{ $candidate->return_address }}</textarea>
                                </div>
                            </div>
                        </div><!-- End Contact Details Tab -->

                        <!-- Skills Tab -->
                        <div class="tab-pane" id="skills">
                            <!-- Skills Sub-Navigation -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs" id="skills-tabs">
                                    <li><a href="#qualifications" data-toggle="tab" class="skills-tab-btn">Qualifications</a></li>
                                    <li><a href="#professional-qualifications" data-toggle="tab" class="skills-tab-btn">Professional Qualifications</a></li>
                                    <li><a href="#professional-experience" data-toggle="tab" class="skills-tab-btn">Professional Experience</a></li>
                                </ul>
                            </div>

                            <!-- Skills Sub-Tab Content -->
                            <div class="tab-content">
                                <!-- Qualifications Tab -->
                                <div class="tab-pane active" id="qualifications">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="from">From</label>
                                            <select id="from" name="from" class="form-control">
                                                <option value="">From Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="to">To</label>
                                            <select id="to" name="to" class="form-control">
                                                <option value="">To Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="degree">Degree</label>
                                            <input id="degree" class="form-control" value="" placeholder="Degree" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="institute">Institute</label>
                                            <input id="institute" class="form-control" value="" placeholder="Institute" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button type="button" class="btn btn-success add-qualification">Add</button>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="qualifications-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Duration</th>
                                                            <th>Degree</th>
                                                            <th>Institute</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($qualifications as $qualification)
                                                            <tr>
                                                                <td>{{ $qualification['duration'] }}</td>
                                                                <td>{{ $qualification['degree'] }}</td>
                                                                <td>{{ $qualification['institute'] }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger remove-row" data-table="qualifications-table">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                    <input type="hidden" name="qualification_duration[]" value="{{ $qualification['duration'] }}">
                                                                    <input type="hidden" name="qualification_degree[]" value="{{ $qualification['degree'] }}">
                                                                    <input type="hidden" name="qualification_institute[]" value="{{ $qualification['institute'] }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div id="qualification-inputs"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Qualifications Tab -->

                                <!-- Professional Qualifications Tab -->
                                <div class="tab-pane" id="professional-qualifications">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="from_prof">From</label>
                                            <select id="from_prof" class="form-control">
                                                <option value="">From Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="to_prof">To</label>
                                            <select id="to_prof" class="form-control">
                                                <option value="">To Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="degree_prof">Degree</label>
                                            <input id="degree_prof" class="form-control" value="" placeholder="Degree" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="institute_prof">Institute</label>
                                            <input id="institute_prof" class="form-control" value="" placeholder="Institute" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button type="button" class="btn btn-success add-professional-qualification">Add</button>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="professional-qualifications-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Certification</th>
                                                            <th>Issuing Organization</th>
                                                            <th>Issue Date</th>
                                                            <th>Expiry Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($professionalQualifications as $qualification)
                                                            <tr>
                                                                <td>{{ $qualification['degree'] }}</td>
                                                                <td>{{ $qualification['institute'] }}</td>
                                                                <td>{{ $qualification['from'] }}</td>
                                                                <td>{{ $qualification['to'] }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger remove-row" data-table="professional-qualifications-table">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                    <input type="hidden" name="prof_qual_degree[]" value="{{ $qualification['degree'] }}">
                                                                    <input type="hidden" name="prof_qual_institute[]" value="{{ $qualification['institute'] }}">
                                                                    <input type="hidden" name="prof_qual_from[]" value="{{ $qualification['from'] }}">
                                                                    <input type="hidden" name="prof_qual_to[]" value="{{ $qualification['to'] }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div id="professional-qualification-inputs"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Professional Qualifications Tab -->

                                <!-- Professional Experience Tab -->
                                <div class="tab-pane" id="professional-experience">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="company">Company</label>
                                            <input id="company" class="form-control" value="" placeholder="Company" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="main_category">Main Category</label>
                                            <select id="main_category" class="form-control">
                                                <option value="">Main Category</option>
                                                <option value="IT">IT</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Healthcare">Healthcare</option>
                                                <option value="Education">Education</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="sub_category">Sub Category</label>
                                            <select id="sub_category" name="sub_category" class="form-control">
                                                <option value="">Sub Category</option>
                                                <option value="Software Development">Software Development</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Mobile Development">Mobile Development</option>
                                                <option value="Database Administration">Database Administration</option>
                                                <option value="Network Administration">Network Administration</option>
                                                <option value="Cloud Computing">Cloud Computing</option>
                                                <option value="Cybersecurity">Cybersecurity</option>
                                                <option value="Data Science">Data Science</option>
                                                <option value="Artificial Intelligence">Artificial Intelligence</option>
                                                <option value="Machine Learning">Machine Learning</option>
                                                <option value="DevOps">DevOps</option>
                                                <option value="Quality Assurance">Quality Assurance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="working_category">Working Category</label>
                                            <select id="working_category" class="form-control">
                                                <option value="">Working Category</option>
                                                <option value="Full-time">Full-time</option>
                                                <option value="Part-time">Part-time</option>
                                                <option value="Contract">Contract</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Internship">Internship</option>
                                                <option value="Remote">Remote</option>
                                                <option value="Hybrid">Hybrid</option>
                                                <option value="On-site">On-site</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="from_exp">From</label>
                                            <select id="from_exp" class="form-control">
                                                <option value="">From Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="to_exp">To</label>
                                            <select id="to_exp" class="form-control">
                                                <option value="">To Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="sector">Sector</label>
                                            <select id="sector" class="form-control">
                                                <option value="">Select Sector</option>
                                                <option value="Public">Public</option>
                                                <option value="Private">Private</option>
                                                <option value="NGO">NGO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="type">Type</label>
                                            <select id="type" name="type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="Local">Local</option>
                                                <option value="International">International</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button type="button" class="btn btn-success add-experience">Add</button>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="experience-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Company</th>
                                                            <th>Position</th>
                                                            <th>Duration</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($professionalExperience as $experience)
                                                            <tr>
                                                                <td>{{ $experience['company'] }}</td>
                                                                <td>{{ $experience['main_category'] }}{{ isset($experience['sub_category']) ? ' - ' . $experience['sub_category'] : '' }}</td>
                                                                <td>{{ $experience['from'] }} - {{ $experience['to'] }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger remove-row" data-table="experience-table">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                    <input type="hidden" name="experience_company[]" value="{{ $experience['company'] }}">
                                                                    <input type="hidden" name="experience_main_category[]" value="{{ $experience['main_category'] }}">
                                                                    <input type="hidden" name="experience_sub_category[]" value="{{ $experience['sub_category'] ?? '' }}">
                                                                    <input type="hidden" name="experience_from[]" value="{{ $experience['from'] }}">
                                                                    <input type="hidden" name="experience_to[]" value="{{ $experience['to'] }}">
                                                                    <input type="hidden" name="experience_sector[]" value="{{ $experience['sector'] ?? '' }}">
                                                                    <input type="hidden" name="experience_type[]" value="{{ $experience['type'] ?? '' }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Professional Experience Tab -->
                            </div><!-- End Skills Sub-Tab Content -->
                        </div><!-- End Skills Tab -->

                        <!-- Present Status Tab -->
                        <div class="tab-pane" id="present-status">
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="any_police_case">Have you ever convicted in police case in the cour of law</label>
                                    <select id="any_police_case" name="any_police_case" class="form-control">
                                        <option value="" {{ $candidate->any_police_case == '' ? 'selected' : '' }}>select</option>
                                        <option value="Yes" {{ $candidate->any_police_case == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ $candidate->any_police_case == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="any_political_involvement">Do you have affiliation/membership with any political/religiuos party</label>
                                    <select id="any_political_involvement" name="any_political_involvement" class="form-control">
                                        <option value="" {{ $candidate->any_political_involvement == '' ? 'selected' : '' }}>select</option>
                                        <option value="Yes" {{ $candidate->any_political_involvement == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ $candidate->any_political_involvement == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="present_employment">Present Employment</label>
                                    <select id="present_employment" name="present_employment" class="form-control">
                                        <option value="" {{ $candidate->present_employment == '' ? 'selected' : '' }}>select</option>
                                        <option value="Employed" {{ $candidate->present_employment == 'Employed' ? 'selected' : '' }}>Employed</option>
                                        <option value="Unemployed" {{ $candidate->present_employment == 'Unemployed' ? 'selected' : '' }}>Unemployed</option>
                                        <option value="Self-Employed" {{ $candidate->present_employment == 'Self-Employed' ? 'selected' : '' }}>Self-Employed</option>
                                        <option value="Student" {{ $candidate->present_employment == 'Student' ? 'selected' : '' }}>Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="achievements">Achievements</label>
                                    <textarea id="achievements" class="form-control" name="achievements" placeholder="Achievements" rows="5">{{ $candidate->achievements }}</textarea>
                                </div>
                            </div>
                        </div><!-- End Present Status Tab -->

                        <!-- Candidate Dependents Tab -->
                        <div class="tab-pane" id="candidate-dependents">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Add Dependent</h4>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="dependent-type">Type</label>
                                            <select class="form-control" id="dependent-type">
                                                <option value="">Select Type</option>
                                                <option value="Father">Father</option>
                                                <option value="Mother">Mother</option>
                                                <option value="Spouse">Spouse</option>
                                                <option value="Child">Child</option>
                                                <option value="Sibling">Sibling</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dependent-name">Name</label>
                                            <input type="text" class="form-control" id="dependent-name" placeholder="Name">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dependent-age">Age</label>
                                            <input type="number" class="form-control" id="dependent-age" placeholder="Age">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dependent-relation">Relation</label>
                                            <select class="form-control" id="dependent-relation">
                                                <option value="">Select Relation</option>
                                                <option value="Parent">Parent</option>
                                                <option value="Child">Child</option>
                                                <option value="Spouse">Spouse</option>
                                                <option value="Sibling">Sibling</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1 mb-3" style="margin-top: 25px;">
                                            <button type="button" class="btn btn-primary" id="add-dependent-btn">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h4>Dependents List</h4>
                                    <table class="table table-bordered" id="dependents-table">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Relation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dependents as $dependent)
                                                <tr>
                                                    <td>{{ $dependent['type'] }}</td>
                                                    <td>{{ $dependent['name'] }}</td>
                                                    <td>{{ $dependent['age'] }}</td>
                                                    <td>{{ $dependent['relation'] }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger remove-row" data-table="dependents-table">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="hidden" name="dependent_type[]" value="{{ $dependent['type'] }}">
                                                        <input type="hidden" name="dependent_name[]" value="{{ $dependent['name'] }}">
                                                        <input type="hidden" name="dependent_age[]" value="{{ $dependent['age'] }}">
                                                        <input type="hidden" name="dependent_relation[]" value="{{ $dependent['relation'] }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Candidate Dependents Tab -->

                        <!-- Resumes Tab -->
                        <div class="tab-pane" id="resumes">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="dropzone-wrapper" id="resume-dropzone">
                                                <div class="dropzone-desc">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <p>Drag & drop files here or click to browse</p>
                                                </div>
                                                <input type="file" name="resumes" class="dropzone-input" id="resume-input">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- New file preview -->
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div id="new-file-preview" class="alert alert-info" style="display: none;">
                                                <i class="fa fa-info-circle"></i> New file selected: <span id="new-file-name"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Existing file preview -->
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div id="file-preview" class="file-preview">
                                                <div class="file-preview-content">
                                                    <i class="fa fa-file-pdf-o file-icon"></i>
                                                    <div class="file-details">
                                                        <span id="file-name" class="file-name">{{ basename($candidate->resume) }}</span>
                                                        <span id="file-size" class="file-size"></span>
                                                    </div>
                                                    @if($candidate->resume)
                                                        <a href="{{ asset($candidate->resume) }}" class="btn btn-primary btn-sm" download>
                                                            <i class="fa fa-download"></i> Download
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Resumes Tab -->
                    </div><!-- End Tab Content -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('finalRegistration') }}" class="btn btn-default border">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Main tabs
        const tabButtons = document.querySelectorAll('.tab-btn');
        tabButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                const tabContent = document.querySelector('.tab-content');
                const activeTab = tabContent.querySelector('.active');
                const newTab = tabContent.querySelector(target);

                // Update tab navigation
                tabButtons.forEach(btn => btn.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');

                // Update tab content
                if (activeTab) activeTab.classList.remove('active');
                if (newTab) newTab.classList.add('active');
            });
        });

        // Skills sub-tabs
        const skillsTabButtons = document.querySelectorAll('.skills-tab-btn');
        skillsTabButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                const skillsTabContent = document.querySelector('#skills .tab-content');
                const activeTab = skillsTabContent.querySelector('.active');
                const newTab = skillsTabContent.querySelector(target);

                // Update skills tab navigation
                skillsTabButtons.forEach(btn => btn.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');

                // Update skills tab content
                if (activeTab) activeTab.classList.remove('active');
                if (newTab) newTab.classList.add('active');
            });
        });

        // Form submission handling
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                // Validate form fields
                const requiredFields = document.querySelectorAll('input[required], select[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('error');
                    } else {
                        field.classList.remove('error');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                    return;
                }

                // Validate dynamic rows (all are optional)
                const tables = [
                    { id: 'experience-table', required: false },
                    { id: 'dependents-table', required: false }
                ];

                tables.forEach(table => {
                    const rows = document.querySelectorAll(`#${table.id} tbody tr`);
                    if (table.required && rows.length === 0) {
                        isValid = false;
                        alert(`Please add at least one ${table.id.replace('-table', '')} entry`);
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    return;
                }

                // Handle file uploads
                const resumeInput = document.getElementById('resumes');
                if (resumeInput && resumeInput.files.length > 0) {
                    const file = resumeInput.files[0];
                    if (file.size > 5242880) { // 5MB limit
                        e.preventDefault();
                        alert('Resume file size must be less than 5MB');
                        return;
                    }
                }

                // Process qualifications data
                const qualificationRows = document.querySelectorAll('#qualifications-table tbody tr');
                const qualifications = [];
                qualificationRows.forEach(row => {
                    const formData = {
                        from: row.querySelector('input[name="qualification_from[]"]').value,
                        to: row.querySelector('input[name="qualification_to[]"]').value,
                        degree: row.querySelector('input[name="qualification_degree[]"]').value,
                        institute: row.querySelector('input[name="qualification_institute[]"]').value,
                        duration: row.querySelector('input[name="qualification_duration[]"]').value
                    };

                    // Only add qualification if it has data
                    if (Object.values(formData).some(value => value.trim())) {
                        qualifications.push(formData);
                    }
                });

                // Store qualifications as JSON in hidden input
                const qualificationsInput = document.querySelector('input[name="qualification"]');
                if (qualificationsInput) {
                    qualificationsInput.value = JSON.stringify(qualifications);
                }
            });
        }

        // Add row functionality
        function addRow(tableId, formData) {
            const table = document.querySelector(`#${tableId} tbody`);
            if (!table) return;

            const newRow = document.createElement('tr');
            let rowHtml = '';

            // Determine which table we're adding to
            switch(tableId) {
                case 'qualifications-table':
                    rowHtml = `
                        <td>${formData.duration || 'N/A'}</td>
                        <td>${formData.degree || ''}</td>
                        <td>${formData.institute || ''}</td>
                        <td>
                            <button type="button" class="btn btn-danger remove-row" data-table="${tableId}">
                                <i class="fa fa-minus"></i>
                            </button>
                            <input type="hidden" name="qualification_from[]" value="${formData.from || ''}">
                            <input type="hidden" name="qualification_to[]" value="${formData.to || ''}">
                            <input type="hidden" name="qualification_degree[]" value="${formData.degree || ''}">
                            <input type="hidden" name="qualification_institute[]" value="${formData.institute || ''}">
                        </td>
                    `;
                    break;

                case 'professional-qualifications-table':
                    rowHtml = `
                        <td>${formData.certification || ''}</td>
                        <td>${formData.issuing_organization || ''}</td>
                        <td>${formData.issue_date || ''}</td>
                        <td>${formData.expiry_date || ''}</td>
                        <td>
                            <button type="button" class="btn btn-danger remove-row" data-table="${tableId}">
                                <i class="fa fa-minus"></i>
                            </button>
                            <input type="hidden" name="professional_qualification_certification[]" value="${formData.certification || ''}">
                            <input type="hidden" name="professional_qualification_issuing_organization[]" value="${formData.issuing_organization || ''}">
                            <input type="hidden" name="professional_qualification_issue_date[]" value="${formData.issue_date || ''}">
                            <input type="hidden" name="professional_qualification_expiry_date[]" value="${formData.expiry_date || ''}">
                        </td>
                    `;
                    break;

                default:
                    rowHtml = `
                        <td>${formData.company || ''}</td>
                        <td>${formData.main_category ? formData.main_category + (formData.sub_category ? ' - ' + formData.sub_category : '') : ''}</td>
                        <td>${formData.from ? formData.from + ' - ' + formData.to : ''}</td>
                        <td>
                            <button type="button" class="btn btn-danger remove-row" data-table="${tableId}">
                                <i class="fa fa-minus"></i>
                            </button>
                            ${Object.entries(formData).map(([key, value]) =>
                                `<input type="hidden" name="${key}[]" value="${value}">`
                            ).join('')}
                        </td>
                    `;
                    break;
            }

            newRow.innerHTML = rowHtml;
            table.appendChild(newRow);

            // Clear input fields
            Object.keys(formData).forEach(key => {
                const input = document.getElementById(key);
                if (input) input.value = '';
            });
        }

        // Add qualification row
        const addQualificationBtn = document.querySelector('.add-qualification');
        if (addQualificationBtn) {
            addQualificationBtn.addEventListener('click', function() {
                const formData = {
                    from: document.getElementById('from').value,
                    to: document.getElementById('to').value,
                    degree: document.getElementById('degree').value,
                    institute: document.getElementById('institute').value
                };

                // Check if any field has data
                const hasData = Object.values(formData).some(value => value.trim());
                if (!hasData) {
                    alert('Please fill in at least one qualification field');
                    return;
                }

                // Create duration string
                formData.duration = formData.from && formData.to ? `${formData.from} - ${formData.to}` :
                                  formData.from ? `${formData.from} - Present` : '';

                const table = document.querySelector('#qualifications-table tbody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${formData.duration}</td>
                    <td>${formData.degree}</td>
                    <td>${formData.institute}</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row" data-table="qualifications-table">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="hidden" name="qualification_from[]" value="${formData.from || ''}">
                        <input type="hidden" name="qualification_to[]" value="${formData.to || ''}">
                        <input type="hidden" name="qualification_degree[]" value="${formData.degree || ''}">
                        <input type="hidden" name="qualification_institute[]" value="${formData.institute || ''}">
                    </td>
                `;
                table.appendChild(newRow);

                // Clear input fields
                document.getElementById('from').value = '';
                document.getElementById('to').value = '';
                document.getElementById('degree').value = '';
                document.getElementById('institute').value = '';
            });
        }

        // Remove row functionality
        document.addEventListener('click', function(e) {
            if (e.target && (e.target.classList.contains('remove-row') || e.target.closest('.remove-row'))) {
                const button = e.target.classList.contains('remove-row') ? e.target : e.target.closest('.remove-row');
                const row = button.closest('tr');
                row.remove();
            }
        });

        // Add professional qualification row
        const addProfessionalQualificationBtn = document.querySelector('.add-professional-qualification');
        if (addProfessionalQualificationBtn) {
            addProfessionalQualificationBtn.addEventListener('click', function() {
                const formData = {
                    degree: document.getElementById('degree_prof').value,
                    institute: document.getElementById('institute_prof').value,
                    from: document.getElementById('from_prof').value,
                    to: document.getElementById('to_prof').value
                };

                // Check if any field has data
                const hasData = Object.values(formData).some(value => value.trim());
                if (!hasData) {
                    alert('Please fill in at least one professional qualification field');
                    return;
                }

                const table = document.querySelector('#professional-qualifications-table tbody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${formData.degree}</td>
                    <td>${formData.institute}</td>
                    <td>${formData.from}</td>
                    <td>${formData.to}</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row" data-table="professional-qualifications-table">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="hidden" name="prof_qual_degree[]" value="${formData.degree}">
                        <input type="hidden" name="prof_qual_institute[]" value="${formData.institute}">
                        <input type="hidden" name="prof_qual_from[]" value="${formData.from}">
                        <input type="hidden" name="prof_qual_to[]" value="${formData.to}">
                    </td>
                `;
                table.appendChild(newRow);

                // Clear input fields
                document.getElementById('degree_prof').value = '';
                document.getElementById('institute_prof').value = '';
                document.getElementById('from_prof').value = '';
                document.getElementById('to_prof').value = '';
            });
        }

        // Add experience row
        const addExperienceBtn = document.querySelector('.add-experience');
        if (addExperienceBtn) {
            addExperienceBtn.addEventListener('click', function() {
                const formData = {
                    company: document.getElementById('company').value,
                    main_category: document.getElementById('main_category').value,
                    sub_category: document.getElementById('sub_category').value,
                    from: document.getElementById('from_exp').value,
                    to: document.getElementById('to_exp').value,
                    sector: document.getElementById('sector').value,
                    type: document.getElementById('type').value
                };

                // Check if any field has data
                const hasData = Object.values(formData).some(value => value.trim());
                if (!hasData) {
                    alert('Please fill in at least one experience field');
                    return;
                }

                const table = document.querySelector('#experience-table tbody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${formData.company}</td>
                    <td>${formData.main_category}${formData.sub_category ? ' - ' + formData.sub_category : ''}</td>
                    <td>${formData.from} - ${formData.to}</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row" data-table="experience-table">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="hidden" name="experience_company[]" value="${formData.company}">
                        <input type="hidden" name="experience_main_category[]" value="${formData.main_category}">
                        <input type="hidden" name="experience_sub_category[]" value="${formData.sub_category}">
                        <input type="hidden" name="experience_from[]" value="${formData.from}">
                        <input type="hidden" name="experience_to[]" value="${formData.to}">
                        <input type="hidden" name="experience_sector[]" value="${formData.sector}">
                        <input type="hidden" name="experience_type[]" value="${formData.type}">
                    </td>
                `;
                table.appendChild(newRow);

                // Clear input fields
                document.getElementById('company').value = '';
                document.getElementById('main_category').value = '';
                document.getElementById('sub_category').value = '';
                document.getElementById('from_exp').value = '';
                document.getElementById('to_exp').value = '';
                document.getElementById('sector').value = '';
                document.getElementById('type').value = '';
            });
        }

        // Add dependent row
        const addDependentBtn = document.getElementById('add-dependent-btn');
        if (addDependentBtn) {
            addDependentBtn.addEventListener('click', function() {
                const type = document.getElementById('dependent-type').value;
                const name = document.getElementById('dependent-name').value;
                const age = document.getElementById('dependent-age').value;
                const relation = document.getElementById('dependent-relation').value;

                // Check if any field has data
                if (!type || !name || !age || !relation) {
                    alert('Please fill in all dependent fields');
                    return;
                }

                const table = document.querySelector('#dependents-table tbody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${type}</td>
                    <td>${name}</td>
                    <td>${age}</td>
                    <td>${relation}</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row" data-table="dependents-table">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input type="hidden" name="dependent_type[]" value="${type}">
                        <input type="hidden" name="dependent_name[]" value="${name}">
                        <input type="hidden" name="dependent_age[]" value="${age}">
                        <input type="hidden" name="dependent_relation[]" value="${relation}">
                    </td>
                `;
                table.appendChild(newRow);

                // Clear input fields
                document.getElementById('dependent-type').value = '';
                document.getElementById('dependent-name').value = '';
                document.getElementById('dependent-age').value = '';
                document.getElementById('dependent-relation').value = '';
            });
        }

        // Event delegation for remove buttons
        document.addEventListener('click', function(e) {
            // Handle remove-row buttons (for qualifications, professional qualifications, etc.)
            if (e.target && e.target.classList.contains('remove-row') ||
                (e.target.parentElement && e.target.parentElement.classList.contains('remove-row'))) {
                const button = e.target.classList.contains('remove-row') ? e.target : e.target.parentElement;
                button.closest('tr').remove();
            }

            // Handle delete-dependent buttons
            if (e.target && e.target.classList.contains('delete-dependent') ||
                (e.target.parentElement && e.target.parentElement.classList.contains('delete-dependent'))) {
                const button = e.target.classList.contains('delete-dependent') ? e.target : e.target.parentElement;
                const row = button.closest('tr');
                const index = Array.from(row.parentNode.children).indexOf(row);
                console.log('Removing dependent at index:', index);
                row.remove();

                // Note: We're not removing the hidden inputs here because it would be complex to match them up
                // The server will handle the array data correctly as long as we have the right number of inputs
            }
        });

        // Style the tabs to match the design in the image
        document.querySelector('.nav-tabs').classList.add('registration-tabs');
        tabButtons.forEach(function(btn) {
            btn.classList.add('registration-tab-btn');
        });

        // File preview functionality
        function showFilePreview(input) {
            const file = input.files[0];
            const newFilePreview = document.getElementById('new-file-preview');
            const newFileName = document.getElementById('new-file-name');

            if (file) {
                newFileName.textContent = file.name;
                newFilePreview.style.display = 'block';
            } else {
                newFilePreview.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('resume-input');
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    showFilePreview(this);
                });
            }
        });
    });
</script>

@include('components.footer')
