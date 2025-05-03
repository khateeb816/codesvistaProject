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
    }
    
    .file-icon {
        font-size: 2em;
        margin-right: 15px;
        color: #3498db;
    }
    
    .file-details {
        display: flex;
        flex-direction: column;
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
    
    /* Make tabs responsive */
    @media (max-width: 768px) {
        .registration-tabs, #skills-tabs {
            flex-wrap: wrap;
        }

        .registration-tabs li, #skills-tabs li {
            flex: 1 0 auto;
        }
    }
</style>

<!-- Candidate Registration Form -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Candidate Final Registration</h2>
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
                    action="{{ route('finalRegistration.store') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
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
                                            class="required text-danger">*</span></label>
                                    <input id="username" class="form-control" value="{{ old('username') }}"
                                        name="username" placeholder="Username" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="password">Password <span
                                            class="required text-danger">*</span></label>
                                    <input id="password" class="form-control" value="{{ old('password') }}"
                                        name="password" placeholder="Password" required type="password">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="candidate_type">Candidate Type <span
                                            class="required text-danger">*</span></label>
                                    <select id="candidate_type" name="candidate_type" class="form-control" required>
                                        <option value="">Select Candidate Type</option>
                                        <option value="UnSkilled">UnSkilled</option>
                                        <option value="Skilled">Skilled</option>
                                        <option value="Professional">Professional</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="religion">Religion</label>
                                    <input id="religion" class="form-control" value="{{ old('religion') }}"
                                        name="religion" placeholder="Religion" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="title">Title <span
                                            class="required text-danger">*</span></label>
                                    <select id="title" name="title" class="form-control" required>
                                        <option value="">Select Title</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="wages_salary">Wages/Salary</label>
                                    <input id="wages_salary" class="form-control" value="{{ old('wages_salary') }}"
                                        name="wages_salary" placeholder="Wages/Salary" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="first_name">First Name <span
                                            class="required text-danger">*</span></label>
                                    <input id="first_name" class="form-control" value="{{ old('first_name') }}"
                                        name="first_name" placeholder="First Name" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="material_status">Material Status</label>
                                    <select id="material_status" name="material_status" class="form-control">
                                        <option value="">Select Material Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="last_name">Last Name <span
                                            class="required text-danger">*</span></label>
                                    <input id="last_name" class="form-control" value="{{ old('last_name') }}"
                                        name="last_name" placeholder="Last Name" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="education">Education</label>
                                    <select id="education" name="education" class="form-control">
                                        <option value="">Select Education</option>
                                        <option value="High School">High School</option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Master">Master</option>
                                        <option value="PhD">PhD</option>
                                        <option value="Computer Science">Computer Science</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="cnic">CNIC <span
                                            class="required text-danger">*</span></label>
                                    <input id="cnic" class="form-control" value="{{ old('cnic') }}"
                                        name="cnic" placeholder="CNIC" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="profession">Profession</label>
                                    <input id="profession" class="form-control" value="{{ old('profession') }}"
                                        name="profession" placeholder="Profession" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="father_name">Father Name <span
                                            class="required text-danger">*</span></label>
                                    <input id="father_name" class="form-control" value="{{ old('father_name') }}"
                                        name="father_name" placeholder="Father Name" required type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="experience">Experience</label>
                                    <select id="experience" name="experience" class="form-control">
                                        <option value="">Select Experience</option>
                                        @foreach ($experiences as $experience)
                                            <option value="{{ $experience->name }}"
                                                data-custom="{{ $experience->id }}">
                                                {{ $experience->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="gender">Gender <span
                                            class="required text-danger">*</span></label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="job_type">Job Type</label>
                                    <select id="job_type" name="job_type" class="form-control">
                                        <option value="">Select Job Type</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Freelance">Freelance</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="date_of_birth">Date of Birth <span
                                            class="required text-danger">*</span></label>
                                    <input id="date_of_birth" class="form-control"
                                        value="{{ old('date_of_birth') }}" name="date_of_birth"
                                        placeholder="Date of Birth" required type="date">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="job_applied_for">Job Applied For</label>
                                    <input id="job_applied_for" class="form-control"
                                        value="{{ old('job_applied_for') }}" name="job_applied_for"
                                        placeholder="Job Applied For" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="age">Age</label>
                                    <input id="age" class="form-control" value="{{ old('age') }}"
                                        name="age" placeholder="Age" type="number">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="plan">Plan</label>
                                    <select id="plan" name="plan" class="form-control">
                                        <option value="">Select Plan</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Gold">Gold</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="place_of_birth">Place Of Birth</label>
                                    <input id="place_of_birth" class="form-control"
                                        value="{{ old('place_of_birth') }}" name="place_of_birth"
                                        placeholder="Place Of Birth" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="nationality">Nationality <span
                                            class="required text-danger">*</span></label>
                                    <input id="nationality" class="form-control" value="{{ old('nationality') }}"
                                        name="nationality" placeholder="Nationality" required type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="email">Email <span
                                            class="required text-danger">*</span></label>
                                    <input id="email" class="form-control" value="{{ old('email') }}"
                                        name="email" placeholder="Email" required type="email">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="mobile">Mobile <span
                                            class="required text-danger">*</span></label>
                                    <input id="mobile" class="form-control" value="{{ old('mobile') }}"
                                        name="mobile" placeholder="Mobile" required type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="address">Address</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="5">{{ old('address') }}</textarea>
                                </div>
                            </div>

                        </div><!-- End Basic Info Tab -->

                        <!-- Passport Info Tab -->
                        <div class="tab-pane" id="passport-info">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_number">Passport Number</label>
                                    <input id="passport_number" class="form-control"
                                        value="{{ old('passport_number') }}" name="passport_number"
                                        placeholder="Passport Number" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_issue_date">Issue Date</label>
                                    <input id="passport_issue_date" class="form-control"
                                        value="{{ old('passport_issue_date') }}" name="passport_issue_date"
                                        placeholder="Issue Date" type="date">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_expiry_date">Expiry Date</label>
                                    <input id="passport_expiry_date" class="form-control"
                                        value="{{ old('passport_expiry_date') }}" name="passport_expiry_date"
                                        placeholder="Expiry Date" type="date">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="passport_issue_place">Issue Place</label>
                                    <input id="passport_issue_place" class="form-control"
                                        value="{{ old('passport_issue_place') }}" name="passport_issue_place"
                                        placeholder="Issue Place" type="text">
                                </div>
                            </div>
                        </div><!-- End Passport Info Tab -->

                        <!-- Residence Info Tab -->
                        <div class="tab-pane" id="residence-info">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_country">Country</label>
                                    <select name="residence_country" id="residence_country" class="form-control">
                                        <option value="">Select Country</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="India">India</option>
                                        <option value="China">China</option>
                                        <option value="Srilanka">Srilanka</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_state">State</label>
                                    <select name="residence_state" id="residence_state" class="form-control">
                                        <option value="">Select State</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                        <option value="Balochistan">Balochistan</option>
                                        <option value="Kashmir">Kashmir</option>
                                        <option value="FATA">FATA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_province">Province</label>
                                    <input id="residence_province" class="form-control"
                                        value="{{ old('residence_province') }}" name="residence_province"
                                        placeholder="Province" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_district">District</label>
                                    <input id="residence_district" class="form-control"
                                        value="{{ old('residence_district') }}" name="residence_district"
                                        placeholder="District" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_city">City</label>
                                    <input id="residence_city" class="form-control"
                                        value="{{ old('residence_city') }}" name="residence_city" placeholder="City"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_zip">Zip</label>
                                    <input id="residence_zip" class="form-control"
                                        value="{{ old('residence_zip') }}" name="residence_zip" placeholder="Zip"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_street">Street</label>
                                    <input id="residence_street" class="form-control"
                                        value="{{ old('residence_street') }}" name="residence_street"
                                        placeholder="Street" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_zip2">Zip</label>
                                    <input id="residence_zip2" class="form-control"
                                        value="{{ old('residence_zip') }}" name="residence_zip" placeholder="Zip"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_city2">City</label>
                                    <input id="residence_city2" class="form-control"
                                        value="{{ old('residence_city') }}" name="residence_city" placeholder="City"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="residence_address">Street</label>
                                    <input id="residence_address" class="form-control"
                                        value="{{ old('residence_address') }}" name="residence_address"
                                        placeholder="Street" type="text">
                                </div>
                            </div>
                        </div><!-- End Residence Info Tab -->

                        <!-- Contact Details Tab -->
                        <div class="tab-pane" id="contact-details">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="email">Email <span
                                            class="required text-danger">*</span></label>
                                    <input id="email" class="form-control" value="{{ old('email') }}"
                                        name="email" placeholder="Email" required type="email">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="mobile">Mobile <span
                                            class="required text-danger">*</span></label>
                                    <input id="mobile" class="form-control" value="{{ old('mobile') }}"
                                        name="mobile" placeholder="Mobile" required type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="alternate_phone">Alternate Phone</label>
                                    <input id="alternate_phone" class="form-control"
                                        value="{{ old('alternate_phone') }}" name="alternate_phone"
                                        placeholder="Alternate Phone" type="text">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="emergency_contact"> Fax</label>
                                    <input id="emergency_contact" class="form-control"
                                        value="{{ old('emergency_contact') }}" name="emergency_contact"
                                        placeholder="Fax" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label class="control-label" for="website"> Website</label>
                                    <input id="website" class="form-control"
                                        value="{{ old('website') }}" name="website"
                                        placeholder="Website" type="text">
                                </div>
                                
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="address"> Address</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="return_address">Return Address</label>
                                    <textarea name="return_address" id="return_address" class="form-control" cols="30" rows="10">{{ old('return_address') }}</textarea>
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
                                            <input id="degree" class="form-control" value="{{ old('degree') }}" name="degree" placeholder="Degree" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="institute">Institute</label>
                                            <input id="institute" class="form-control" value="{{ old('institute') }}" name="institute" placeholder="Institute" type="text">
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
                                                        <!-- Qualifications will be added here dynamically -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Qualifications Tab -->
                                
                                <!-- Professional Qualifications Tab -->
                                <div class="tab-pane" id="professional-qualifications">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="from_prof">From</label>
                                            <select id="from_prof" name="from_prof" class="form-control">
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
                                            <select id="to_prof" name="to_prof" class="form-control">
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
                                            <input id="degree_prof" class="form-control" value="{{ old('degree_prof') }}" name="degree_prof" placeholder="Degree" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="institute_prof">Institute</label>
                                            <input id="institute_prof" class="form-control" value="{{ old('institute_prof') }}" name="institute_prof" placeholder="Institute" type="text">
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
                                                        <!-- Professional Qualifications will be added here dynamically -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Professional Qualifications Tab -->
                                
                                <!-- Professional Experience Tab -->
                                <div class="tab-pane" id="professional-experience">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="company">Company</label>
                                            <input id="company" class="form-control" value="{{ old('company') }}" name="company" placeholder="Company" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="main_category">Main Category</label>
                                            <select id="main_category" name="main_category" class="form-control">
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
                                            <select id="working_category" name="working_category" class="form-control">
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
                                            <select id="from_exp" name="from_exp" class="form-control">
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
                                            <select id="to_exp" name="to_exp" class="form-control">
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
                                            <select id="sector" name="sector" class="form-control">
                                                <option value="">Sector</option>
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
                                                <option value="">Local</option>
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
                                                        <!-- Experience will be added here dynamically -->
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
                                    <label class="control-label" for="police_case">Have you ever convicted in police case in the cour of law</label>
                                    <select id="police_case" name="police_case" class="form-control">
                                        <option value="">No</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="political_affiliation">Do you have affiliation/membership with any political/religiuos party</label>
                                    <select id="political_affiliation" name="political_affiliation" class="form-control">
                                        <option value="">No</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="present_employment">Present Employment</label>
                                    <select id="present_employment" name="present_employment" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Employed">Employed</option>
                                        <option value="Unemployed">Unemployed</option>
                                        <option value="Self-Employed">Self-Employed</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="achievements">Achievements</label>
                                    <textarea id="achievements" class="form-control" name="achievements" placeholder="Achievements" rows="5">{{ old('achievements') }}</textarea>
                                </div>
                            </div>
                        </div><!-- End Present Status Tab -->

                        <!-- Candidate Dependents Tab -->
                        <div class="tab-pane" id="candidate-dependents">
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="dependent_type">Dependent</label>
                                    <select id="dependent_type" name="dependent_type" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Father">Father</option>
                                        <option value="Spouse">Spouse</option>
                                        <option value="Child">Child</option>
                                        <option value="Sibling">Sibling</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="dependent_gender">Gender</label>
                                    <select id="dependent_gender" name="dependent_gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label" for="dependent_age">Age</label>
                                    <input id="dependent_age" class="form-control" value="{{ old('dependent_age') }}" name="dependent_age" placeholder="Age" type="number">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                    <button type="button" class="btn btn-success add-dependent">Add</button>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dependents-table">
                                            <thead>
                                                <tr>
                                                    <th>Dependent</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="dependent_name[]"
                                                            class="form-control" placeholder="Name">
                                                    </td>
                                                    <td>
                                                        <select name="dependent_relation[]" class="form-control">
                                                            <option value="">Select Relation</option>
                                                            <option value="Spouse">Spouse</option>
                                                            <option value="Child">Child</option>
                                                            <option value="Parent">Parent</option>
                                                            <option value="Sibling">Sibling</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="dependent_age[]"
                                                            class="form-control" placeholder="Age">
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success add-dependent"><i
                                                                class="fa fa-plus"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Candidate Dependents Tab -->

                        <!-- Resumes Tab -->
                        <div class="tab-pane" id="resumes">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="control-label" for="resume_name">Resume Name</label>
                                            <input id="resume_name" class="form-control" name="resume_name" type="text" placeholder="Enter resume name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="dropzone-wrapper" id="resume-dropzone">
                                                <div class="dropzone-desc">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <p>Drag & drop files here or click to browse</p>
                                                </div>
                                                <input type="file" name="resume_file" class="dropzone-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div id="file-preview" class="file-preview" style="display: none;">
                                                <div class="file-preview-content">
                                                    <i class="fa fa-file-pdf-o file-icon"></i>
                                                    <div class="file-details">
                                                        <span id="file-name" class="file-name">No file selected</span>
                                                        <span id="file-size" class="file-size"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button type="button" id="add-resume" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="resumes-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Resume Name</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Resume files will be listed here -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                    {{-- <button type="button" class="btn btn-success add-resume">Add</button> --}}
                                </div>
                            </div>
                        </div><!-- End Resumes Tab -->
                    </div><!-- End Tab Content -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('initialRegistration') }}" class="btn btn-default border">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- DataTables CSS and JS -->
<!-- These scripts have been moved to the header component -->

<!-- Candidates List -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Candidate Initial Registration</h2>
                        <div class="clearfix"></div>
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile</th>
                                        <th>Experience</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            <td>{{ $candidate->id }}</td>
                                            <td>{{ $candidate->first_name }}</td>
                                            <td>{{ $candidate->last_name }}</td>
                                            <td>{{ $candidate->mobile }}</td>
                                            <td>{{ $candidate->experience }}</td>
                                            <td>
                                                <a href="{{ route('initialRegistration.edit', $candidate->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form
                                                    action="{{ route('initialRegistration.destroy', $candidate->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this candidate?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize DataTable (keeping jQuery for this as it's a jQuery plugin)
        if ($.fn.DataTable) {
            $('#candidatesTable').DataTable({
                responsive: true,
                pageLength: 10
            });
        } else {
            console.error('DataTable plugin not loaded properly');
        }

        // Main Tab switching functionality with simple vanilla JS
        // Skills Sub-Tab switching functionality
        const skillsTabButtons = document.querySelectorAll('.skills-tab-btn');
        const skillsTabPanes = document.querySelectorAll('#skills .tab-content .tab-pane');

        const tabButtons = document.querySelectorAll('.tab-btn');
        
        // Add dependent row functionality
        const addDependentButtons = document.querySelectorAll('.add-dependent');

        tabButtons.forEach(function(button) {
            button.onclick = function(e) {
                e.preventDefault();
                
                // Get the target tab ID
                let targetId = this.getAttribute('href');
                
                // Get all tab buttons' parent li elements
                let tabLis = document.querySelectorAll('.nav-tabs li');
                
                // Remove active class from all tabs
                tabLis.forEach(function(tabLi) {
                    tabLi.className = tabLi.className.replace('active', '');
                });
                
                // Add active class to current tab's parent li
                this.parentNode.className += ' active';
                
                // Get all tab panes
                let tabPanes = document.querySelectorAll('.tab-pane');
                
                // Hide all tab panes
                tabPanes.forEach(function(tabPane) {
                    tabPane.className = tabPane.className.replace('active', '');
                });
                
                // Show the target tab pane
                document.querySelector(targetId).className += ' active';
                
                return false;
            };
        });

        
        skillsTabButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                // Get the target tab ID from href attribute
                const targetId = this.getAttribute('href');

                // Remove active class from all skills tabs
                document.querySelectorAll('#skills-tabs li').forEach(function(tab) {
                    tab.classList.remove('active');
                });

                // Add active class to current skills tab's parent li
                this.parentElement.classList.add('active');

                // Hide all skills tab panes
                skillsTabPanes.forEach(function(pane) {
                    pane.classList.remove('active');
                });

                // Show the target skills tab pane
                document.querySelector(targetId).classList.add('active');
            });
        });

        addDependentButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get values from the input fields
                var dependentType = document.getElementById('dependent_type').value;
                var dependentGender = document.getElementById('dependent_gender').value;
                var dependentAge = document.getElementById('dependent_age').value;
                
                // Only add a row if all fields have values
                if (dependentType && dependentGender && dependentAge) {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${dependentType}</td>
                        <td>${dependentGender}</td>
                        <td>${dependentAge}</td>
                        <td>
                            <button type="button" class="btn btn-danger remove-dependent"><i class="fa fa-minus"></i></button>
                            <input type="hidden" name="dependent_type[]" value="${dependentType}">
                            <input type="hidden" name="dependent_gender[]" value="${dependentGender}">
                            <input type="hidden" name="dependent_age[]" value="${dependentAge}">
                        </td>
                    `;

                    document.querySelector('#dependents-table tbody').appendChild(newRow);
                    
                    // Clear the input fields
                    document.getElementById('dependent_type').value = '';
                    document.getElementById('dependent_gender').value = '';
                    document.getElementById('dependent_age').value = '';
                    
                    // Add event listener for the new remove button
                    const removeButtons = document.querySelectorAll('.remove-dependent');
                    removeButtons.forEach(function(removeBtn) {
                        removeBtn.addEventListener('click', function() {
                            this.closest('tr').remove();
                        });
                    });
                } else {
                    alert('Please fill in all dependent fields');
                }
            });
        });

        // Handle resume file upload
        const resumeDropzone = document.getElementById('resume-dropzone');
        const resumeInput = resumeDropzone.querySelector('.dropzone-input');
        const addResumeBtn = document.getElementById('add-resume');

        if (resumeDropzone && resumeInput) {
            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                resumeDropzone.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });

            // Highlight drop area when item is dragged over it
            ['dragenter', 'dragover'].forEach(eventName => {
                resumeDropzone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                resumeDropzone.addEventListener(eventName, unhighlight, false);
            });

            // Handle dropped files
            resumeDropzone.addEventListener('drop', handleDrop, false);

            // Handle file input change
            resumeInput.addEventListener('change', handleFiles, false);

            // Handle add resume button
            if (addResumeBtn) {
                addResumeBtn.addEventListener('click', addResume, false);
            }

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            function highlight() {
                resumeDropzone.style.borderColor = '#3498db';
                resumeDropzone.style.backgroundColor = '#2a2a2a';
            }

            function unhighlight() {
                resumeDropzone.style.borderColor = '#ccc';
                resumeDropzone.style.backgroundColor = '#1e1e1e';
            }

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                handleFiles(files);
            }

            function handleFiles(e) {
                let files = e.target ? e.target.files : e;
                if (files.length > 0) {
                    const file = files[0];
                    const filePreview = document.getElementById('file-preview');
                    const fileName = document.getElementById('file-name');
                    const fileSize = document.getElementById('file-size');
                    const fileIcon = document.querySelector('.file-icon');
                    
                    // Update the file name input with the file name (without extension)
                    document.getElementById('resume_name').value = file.name.split('.')[0];
                    
                    // Show the file preview
                    filePreview.style.display = 'block';
                    
                    // Update file details
                    fileName.textContent = file.name;
                    
                    // Format file size
                    const size = file.size;
                    let formattedSize;
                    if (size < 1024) {
                        formattedSize = size + ' bytes';
                    } else if (size < 1024 * 1024) {
                        formattedSize = (size / 1024).toFixed(2) + ' KB';
                    } else {
                        formattedSize = (size / (1024 * 1024)).toFixed(2) + ' MB';
                    }
                    fileSize.textContent = formattedSize;
                    
                    // Update icon based on file type
                    const fileExtension = file.name.split('.').pop().toLowerCase();
                    if (['pdf'].includes(fileExtension)) {
                        fileIcon.className = 'fa fa-file-pdf-o file-icon';
                    } else if (['doc', 'docx'].includes(fileExtension)) {
                        fileIcon.className = 'fa fa-file-word-o file-icon';
                    } else if (['xls', 'xlsx'].includes(fileExtension)) {
                        fileIcon.className = 'fa fa-file-excel-o file-icon';
                    } else if (['jpg', 'jpeg', 'png', 'gif'].includes(fileExtension)) {
                        fileIcon.className = 'fa fa-file-image-o file-icon';
                    } else {
                        fileIcon.className = 'fa fa-file-o file-icon';
                    }
                }
            }

            function addResume() {
                const resumeName = document.getElementById('resume_name').value;
                const resumeFile = resumeInput.files[0];
                
                if (resumeName && resumeFile) {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${resumeName}</td>
                        <td>${resumeFile.name}</td>
                        <td>
                            <button type="button" class="btn btn-danger remove-resume"><i class="fa fa-minus"></i></button>
                        </td>
                    `;

                    document.querySelector('#resumes-table tbody').appendChild(newRow);
                    
                    // Clear inputs
                    document.getElementById('resume_name').value = '';
                    resumeInput.value = '';
                    
                    // Add event listener for the new remove button
                    const removeButtons = document.querySelectorAll('.remove-resume');
                    removeButtons.forEach(function(removeBtn) {
                        removeBtn.addEventListener('click', function() {
                            this.closest('tr').remove();
                        });
                    });
                } else {
                    alert('Please provide a resume name and select a file');
                }
            }
        }

        // Add qualification row functionality
        var addQualificationBtn = document.querySelector('.add-qualification');
        if (addQualificationBtn) {
            addQualificationBtn.onclick = function() {
                var from = document.getElementById('from').value;
                var to = document.getElementById('to').value;
                var degree = document.getElementById('degree').value;
                var institute = document.getElementById('institute').value;
                
                if (degree && institute) {
                    var duration = from && to ? from + ' - ' + to : 'N/A';
                    var newRow = document.createElement('tr');
                    newRow.innerHTML = 
                        '<td>' + duration + '</td>' +
                        '<td>' + degree + '</td>' +
                        '<td>' + institute + '</td>' +
                        '<td>' +
                            '<button type="button" class="btn btn-danger remove-row"><i class="fa fa-minus"></i></button>' +
                            '<input type="hidden" name="qualification_duration[]" value="' + duration + '">' +
                            '<input type="hidden" name="qualification_degree[]" value="' + degree + '">' +
                            '<input type="hidden" name="qualification_institute[]" value="' + institute + '">' +
                        '</td>';
                    
                    document.querySelector('#qualifications-table tbody').appendChild(newRow);
                    
                    // Clear inputs
                    document.getElementById('from').value = '';
                    document.getElementById('to').value = '';
                    document.getElementById('degree').value = '';
                    document.getElementById('institute').value = '';
                } else {
                    alert('Please fill in all required fields');
                }
            };
            console.log('Add qualification button handler attached');
        } else {
            console.log('Add qualification button not found');
        }
        
        // Add professional qualification row functionality
        var addProfQualBtn = document.querySelector('.add-professional-qualification');
        if (addProfQualBtn) {
            addProfQualBtn.onclick = function() {
                var fromProf = document.getElementById('from_prof').value;
                var toProf = document.getElementById('to_prof').value;
                var degreeProf = document.getElementById('degree_prof').value;
                var instituteProf = document.getElementById('institute_prof').value;
                
                if (degreeProf && instituteProf) {
                    var duration = fromProf && toProf ? fromProf + ' - ' + toProf : 'N/A';
                    var newRow = document.createElement('tr');
                    newRow.innerHTML = 
                        '<td>' + duration + '</td>' +
                        '<td>' + degreeProf + '</td>' +
                        '<td>' + instituteProf + '</td>' +
                        '<td>' +
                            '<button type="button" class="btn btn-danger remove-row"><i class="fa fa-minus"></i></button>' +
                            '<input type="hidden" name="prof_qual_from[]" value="' + fromProf + '">' +
                            '<input type="hidden" name="prof_qual_to[]" value="' + toProf + '">' +
                            '<input type="hidden" name="prof_qual_degree[]" value="' + degreeProf + '">' +
                            '<input type="hidden" name="prof_qual_institute[]" value="' + instituteProf + '">' +
                        '</td>';
                    
                    document.querySelector('#professional-qualifications-table tbody').appendChild(newRow);
                    
                    // Clear inputs
                    document.getElementById('from_prof').value = '';
                    document.getElementById('to_prof').value = '';
                    document.getElementById('degree_prof').value = '';
                    document.getElementById('institute_prof').value = '';
                } else {
                    alert('Please fill in Degree and Institute fields');
                }
            };
            console.log('Add professional qualification button handler attached');
        } else {
            console.log('Add professional qualification button not found');
        }
        
        // Add experience row functionality
        var addExperienceBtn = document.querySelector('.add-experience');
        if (addExperienceBtn) {
            addExperienceBtn.onclick = function() {
                var company = document.getElementById('company').value;
                var mainCategory = document.getElementById('main_category').value;
                var subCategory = document.getElementById('sub_category').value;
                var workingCategory = document.getElementById('working_category').value;
                var fromExp = document.getElementById('from_exp').value;
                var toExp = document.getElementById('to_exp').value;
                var sector = document.getElementById('sector').value;
                var type = document.getElementById('type').value;
                
                if (company && mainCategory) {
                    var duration = fromExp && toExp ? fromExp + ' - ' + toExp : 'N/A';
                    var newRow = document.createElement('tr');
                    newRow.innerHTML = 
                        '<td>' + company + '</td>' +
                        '<td>' + mainCategory + '</td>' +
                        '<td>' + duration + '</td>' +
                        '<td>' +
                            '<button type="button" class="btn btn-danger remove-row"><i class="fa fa-minus"></i></button>' +
                            '<input type="hidden" name="experience_company[]" value="' + company + '">' +
                            '<input type="hidden" name="experience_main_category[]" value="' + mainCategory + '">' +
                            '<input type="hidden" name="experience_sub_category[]" value="' + subCategory + '">' +
                            '<input type="hidden" name="experience_working_category[]" value="' + workingCategory + '">' +
                            '<input type="hidden" name="experience_from[]" value="' + fromExp + '">' +
                            '<input type="hidden" name="experience_to[]" value="' + toExp + '">' +
                            '<input type="hidden" name="experience_sector[]" value="' + sector + '">' +
                            '<input type="hidden" name="experience_type[]" value="' + type + '">' +
                        '</td>';
                    
                    document.querySelector('#experience-table tbody').appendChild(newRow);
                    
                    // Clear inputs
                    document.getElementById('company').value = '';
                    document.getElementById('main_category').value = '';
                    document.getElementById('sub_category').value = '';
                    document.getElementById('working_category').value = '';
                    document.getElementById('from_exp').value = '';
                    document.getElementById('to_exp').value = '';
                    document.getElementById('sector').value = '';
                    document.getElementById('type').value = '';
                } else {
                    alert('Please fill in Company and Main Category fields');
                }
            };
            console.log('Add experience button handler attached');
        } else {
            console.log('Add experience button not found');
        }
        
        // Event delegation for remove buttons
        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-row') || 
                (e.target.parentElement && e.target.parentElement.classList.contains('remove-row'))) {
                const button = e.target.classList.contains('remove-row') ? e.target : e.target.parentElement;
                button.closest('tr').remove();
            }
        });

        // Style the tabs to match the design in the image
        document.querySelector('.nav-tabs').classList.add('registration-tabs');
        tabButtons.forEach(function(btn) {
            btn.classList.add('registration-tab-btn');
        });
    });
</script>

@include('components.footer')
