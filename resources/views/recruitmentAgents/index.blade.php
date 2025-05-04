@include('components.header')
<div   role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage Recruitment Agents</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('recruitmentAgents.store') }}"
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
                            <label class="control-label" for="location">Location <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="location" class="form-control" value="{{ old('location') }}"
                                data-validate-length-range="6" data-validate-words="1" name="location"
                                placeholder="Location" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="cnic">CNIC <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="cnic" class="form-control" value="{{ old('cnic') }}"
                                data-validate-length-range="6" data-validate-words="1" name="cnic" placeholder="CNIC"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_email">Primary Email
                            </label>
                            <input id="primary_email" class="form-control" value="{{ old('primary_email') }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_email"
                                placeholder="Primary Email"type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_email">Secondary Email 
                            </label>
                            <input id="secondary_email" class="form-control" value="{{ old('secondary_email') }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_email"
                                placeholder="Secondary Email" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_phone">Primary Phone 
                            </label>
                            <input id="primary_phone" class="form-control" value="{{ old('primary_phone') }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_phone"
                                placeholder="Primary Phone" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_phone">Secondary Phone 
                            </label>
                            <input id="secondary_phone" class="form-control" value="{{ old('secondary_phone') }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_phone"
                                placeholder="Secondary Phone" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="file_path">Upload Picture 
                            </label>
                            <input id="file_path" class="form-control" value="{{ old('file_path') }}"
                                data-validate-length-range="6" data-validate-words="1" name="file_path"
                                placeholder="Picture" type="file">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('recruitmentAgents') }}" class="btn btn-default border">Cancel</a>
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
                        <h2>Recruitment Agent Listing</h2>
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
                                        <th>Location</th>
                                        <th>Primary Phone</th>
                                        <th>Secondary Phone</th>
                                        <th>Primary Email</th>
                                        <th>Secondary Email</th>
                                        <th>CNIC</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recruitmentAgents as $recruitmentAgent)
                                        <tr>
                                            <td>{{ $recruitmentAgent->name }}</td>
                                            <td>{{ $recruitmentAgent->location }}</td>
                                            <td>{{ $recruitmentAgent->primary_phone }}</td>
                                            <td>{{ $recruitmentAgent->secondary_phone }}</td>
                                            <td>{{ $recruitmentAgent->primary_email }}</td>
                                            <td>{{ $recruitmentAgent->secondary_email }}</td>
                                            <td>{{ $recruitmentAgent->cnic }}</td>
                                            <td>
                                                <a href="{{ route('recruitmentAgents.edit', $recruitmentAgent->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('recruitmentAgents.destroy', $recruitmentAgent->id) }}" method="POST" class="d-inline">
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


<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name"> Role Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="email">Permissions</label>
                        <select class="form-control" id="permissions" name="permissions[]" multiple required>
                            @foreach($permissions as $permission)
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Role</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


@include('components.footer')
