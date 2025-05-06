@include('components.header')
<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage Medical Centers</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('medicalCenters.store') }}"
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
                            <label class="control-label" for="name">Name <span class="required text-danger">*</span>
                            </label>
                            <input id="name" class="form-control" value="{{ old('name') }}"
                                data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="city">City 
                            </label>
                            <input id="city" class="form-control" value="{{ old('city') }}"
                                data-validate-length-range="6" data-validate-words="1" name="city"
                                placeholder="City" type="text">
                        </div>
                    </div>
                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="name">Phone Number 
                            </label>
                            <input id="name" class="form-control" value="{{ old('phone') }}"
                                data-validate-length-range="6" data-validate-words="1" name="phone" placeholder="Phone"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="contact_person">Contact Person 
                            </label>
                            <input id="contact_person" class="form-control" value="{{ old('contact_person') }}"
                                data-validate-length-range="6" data-validate-words="1" name="contact_person"
                                placeholder="Contact Person" type="text">
                        </div>
                    </div>
                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="fax">Fax 
                            </label>
                            <input id="fax" class="form-control" value="{{ old('fax') }}"
                                data-validate-length-range="6" data-validate-words="1" name="fax" placeholder="Fax"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="email">Email <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="email" class="form-control" value="{{ old('email') }}"
                                data-validate-length-range="6" data-validate-words="1" name="email"
                                placeholder="Email" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="location">Location 
                            </label>
                            <input id="location" class="form-control" value="{{ old('location') }}"
                                data-validate-length-range="6" data-validate-words="1" name="location" placeholder="Location"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="address">Address 
                            </label>
                            <input id="address" class="form-control" value="{{ old('address') }}"
                                data-validate-length-range="6" data-validate-words="1" name="address"
                                placeholder="Address" type="text">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('medicalCenters') }}" class="btn btn-default border">Cancel</a>
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

<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title d-flex justify-content-between">
                        <h2>Medical Centers Listing</h2>
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
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($medicalCenters as $medicalCenter)
                                        <tr>
                                            <td>{{ $medicalCenter->name }}</td>
                                            <td>{{ $medicalCenter->city }}</td>
                                            <td>{{ $medicalCenter->phone }}</td>
                                            <td>
                                                <a href="{{ route('medicalCenters.edit', $medicalCenter->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('medicalCenters.destroy', $medicalCenter->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this medical center?')">
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
