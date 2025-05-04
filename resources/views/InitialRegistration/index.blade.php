@include('components.header')
<div   role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Candidate Initial Registration</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('initialRegistration.store') }}"
                    enctype="multipart/form-data">
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

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="first_name">First Name <span class="required text-danger">*</span>
                            </label>
                            <input id="first_name" class="form-control" value="{{ old('first_name') }}"
                                data-validate-length-range="6" data-validate-words="1" name="first_name" placeholder="First Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="last_name">Last Name <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="last_name" class="form-control" value="{{ old('last_name') }}"
                                data-validate-length-range="6" data-validate-words="1" name="last_name"
                                placeholder="Last Name" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="email">Email
                            </label>
                            <input id="email" class="form-control" value="{{ old('email') }}"
                                data-validate-length-range="6" data-validate-words="1" name="email"
                                placeholder="Email" required="required" type="email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="mobile">Mobile <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="mobile" class="form-control" value="{{ old('mobile') }}"
                                data-validate-length-range="6" data-validate-words="1" name="mobile"
                                placeholder="Mobile" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="arlines_deals_with">Experience
                            </label>
                            <select id="Airline" name="arlines_deals_with" class="form-control select2 select2-offscreen" data-trackchange="true" data-required="required" data-validate="true" data-message="Airlines is required" tabindex="-1" title="">
                                <option> Select Experience </option>
                                    @foreach ($experiences as $experience)
                                    <option value="{{ $experience->name }}" data-custom="{{ $experience->id }}">{{ $experience->name }}</option>
                                    @endforeach
                            </select>
                        </div>

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="profession">Profession 
                            </label>
                            <input id="profession" class="form-control" value="{{ old('profession') }}"
                                data-validate-length-range="6" data-validate-words="1" name="profession"
                                placeholder="Profession"type="text">
                        </div>
                    </div>

                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="address">Address 
                            </label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
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
    <!-- Ensure these are included in your layout (usually in your blade template head/footer) -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>

<div   role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title d-flex justify-content-between">
                        <h2>Candidate Initial Registration</h2>
                    </div>
                    <div class="x_content">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table">
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
                                    @foreach($candidates as $candidate)
                                        <tr>
                                            <td>{{ $candidate->id }}</td>
                                            <td>{{ $candidate->first_name }}</td>
                                            <td>{{ $candidate->last_name }}</td>
                                            <td>{{ $candidate->mobile }}</td>
                                            <td>{{ $candidate->experience }}</td>
                                            <td>
                                                <a href="{{ route('initialRegistration.edit', $candidate->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('initialRegistration.destroy', $candidate->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
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
   new DataTable('#table');
</script>
</div>


@include('components.footer')
