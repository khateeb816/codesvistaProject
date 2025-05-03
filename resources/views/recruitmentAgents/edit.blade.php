@include('components.header')
<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Recruitment Agent</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('recruitmentAgents.update', $recruitmentAgent->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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
                            <input id="name" class="form-control" value="{{ $recruitmentAgent->name }}"
                                data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="location">Location <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="location" class="form-control" value="{{ $recruitmentAgent->location }}"
                                data-validate-length-range="6" data-validate-words="1" name="location"
                                placeholder="Location" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="cnic">CNIC <span class="required text-danger">*</span>
                            </label>
                            <input id="cnic" class="form-control" value="{{ $recruitmentAgent->cnic }}"
                                data-validate-length-range="6" data-validate-words="1" name="cnic" placeholder="CNIC"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_email">Primary Email
                            </label>
                            <input id="primary_email" class="form-control" value="{{ $recruitmentAgent->primary_email }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_email"
                                placeholder="Primary Email"type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_email">Secondary Email
                            </label>
                            <input id="secondary_email" class="form-control" value="{{ $recruitmentAgent->secondary_email }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_email"
                                placeholder="Secondary Email" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_phone">Primary Phone
                            </label>
                            <input id="primary_phone" class="form-control" value="{{ $recruitmentAgent->primary_phone }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_phone"
                                placeholder="Primary Phone" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_phone">Secondary Phone
                            </label>
                            <input id="secondary_phone" class="form-control" value="{{ $recruitmentAgent->secondary_phone }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_phone"
                                placeholder="Secondary Phone" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 border" style="width: 100px; height: 300px;">
                            <img src="{{ asset('storage/' . $recruitmentAgent->file_path) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="file_path">Upload Picture(leave it blank if you don't want to change)
                            </label>
                            <input id="file_path" class="form-control" value="{{ $recruitmentAgent->file_path }}"
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
</div>
@include('components.footer')
