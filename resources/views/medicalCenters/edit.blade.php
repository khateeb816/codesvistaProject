@include('components.header')
<div   role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Medical Center</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('medicalCenters.update', $medicalCenter->id) }}"
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
                            <input id="name" class="form-control" value="{{ $medicalCenter->name }}"
                                data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="city">City 
                            </label>
                            <input id="city" class="form-control" value="{{ $medicalCenter->city }}"
                                data-validate-length-range="6" data-validate-words="1" name="city"
                                placeholder="City" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="phone">Phone Number 
                            </label>
                            <input id="phone" class="form-control" value="{{ $medicalCenter->phone }}"
                                data-validate-length-range="6" data-validate-words="1" name="phone" placeholder="Phone"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="contact_person">Contact Person 
                            </label>
                            <input id="contact_person" class="form-control" value="{{ $medicalCenter->contact_person }}"
                                data-validate-length-range="6" data-validate-words="1" name="contact_person"
                                placeholder="Contact Person" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="fax">Fax 
                            </label>
                            <input id="fax" class="form-control" value="{{ $medicalCenter->fax }}"
                                data-validate-length-range="6" data-validate-words="1" name="fax" placeholder="Fax"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="email">Email <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="email" class="form-control" value="{{ $medicalCenter->email }}"
                                data-validate-length-range="6" data-validate-words="1" name="email"
                                placeholder="Email" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="location">Location 
                            </label>
                            <input id="location" class="form-control" value="{{ $medicalCenter->location }}"
                                data-validate-length-range="6" data-validate-words="1" name="location" placeholder="Location"
                                type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="address">Address 
                            </label>
                            <input id="address" class="form-control" value="{{ $medicalCenter->address }}"
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
</div>
@include('components.footer')