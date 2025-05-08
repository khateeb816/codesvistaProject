@include('components.header')
<div   role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Travel Agent</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('travelAgents.update', $travelAgent->id) }}"
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
                            <input id="name" class="form-control" value="{{ $travelAgent->name }}"
                                data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="location">Location <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="location" class="form-control" value="{{ $travelAgent->location }}"
                                data-validate-length-range="6" data-validate-words="1" name="location"
                                placeholder="Location" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="cnic">Airlines Deals With <span
                                    class="required text-danger">*</span>
                            </label>
                            <select id="Airline" name="arlines_deals_with" class="form-control select2 select2-offscreen" data-trackchange="true" data-required="required" data-validate="true" data-message="Airlines is required" tabindex="-1" title="">
                                <option> Select Airlines </option>
                                    <option value="Doha Air Line" data-custom="9" {{ $travelAgent->arlines_deals_with == 'Doha Air Line' ? 'selected' : '' }}>Doha Air Line</option>
                                    <option value="PIA" data-custom="10" {{ $travelAgent->arlines_deals_with == 'PIA' ? 'selected' : '' }}>PIA</option>
                                    <option value="Emirates Air Line" data-custom="11" {{ $travelAgent->arlines_deals_with == 'Emirates Air Line' ? 'selected' : '' }}>Emirates Air Line</option>
                                    <option value="Air India" data-custom="12" {{ $travelAgent->arlines_deals_with == 'Air India' ? 'selected' : '' }}>Air India</option>
                                    <option value="Thai Air" data-custom="13" {{ $travelAgent->arlines_deals_with == 'Thai Air' ? 'selected' : '' }}>Thai Air</option>
                                    <option value="Ittehad Air Lines" data-custom="14" {{ $travelAgent->arlines_deals_with == 'Ittehad Air Lines' ? 'selected' : '' }}>Ittehad Air Lines</option>
                                    <option value="Saudi Airline" data-custom="15" {{ $travelAgent->arlines_deals_with == 'Saudi Airline' ? 'selected' : '' }}>Saudi Airline</option>
                                    <option value="UAE " data-custom="16" {{ $travelAgent->arlines_deals_with == 'UAE' ? 'selected' : '' }}>UAE </option>
                                    <option value="s" data-custom="25" {{ $travelAgent->arlines_deals_with == 's' ? 'selected' : '' }}>s</option>
                                    <option value="asd" data-custom="30" {{ $travelAgent->arlines_deals_with == 'asd' ? 'selected' : '' }}>asd</option>
                                    <option value="SV" data-custom="31" {{ $travelAgent->arlines_deals_with == 'SV' ? 'selected' : '' }}>SV</option>
                                    <option value="PK" data-custom="32" {{ $travelAgent->arlines_deals_with == 'PK' ? 'selected' : '' }}>PK</option>
                                    <option value="Air Arabia" data-custom="53" {{ $travelAgent->arlines_deals_with == 'Air Arabia' ? 'selected' : '' }}>Air Arabia</option>
                                    <option value="PIA" data-custom="54" {{ $travelAgent->arlines_deals_with == 'PIA' ? 'selected' : '' }}>PIA</option>
                                    <option value="Air Blue" data-custom="55" {{ $travelAgent->arlines_deals_with == 'Air Blue' ? 'selected' : '' }}>Air Blue</option>
                                    <option value="Etihad Air" data-custom="56" {{ $travelAgent->arlines_deals_with == 'Etihad Air' ? 'selected' : '' }}>Etihad Air</option>
                                    <option value="Saudi Air" data-custom="57" {{ $travelAgent->arlines_deals_with == 'Saudi Air' ? 'selected' : '' }}>Saudi Air</option>
                                    <option value="Qatar AirWays" data-custom="58" {{ $travelAgent->arlines_deals_with == 'Qatar AirWays' ? 'selected' : '' }}>Qatar AirWays</option>
                                    <option value="Shaheen Air" data-custom="59" {{ $travelAgent->arlines_deals_with == 'Shaheen Air' ? 'selected' : '' }}>Shaheen Air</option>
                                    <option value="Emirates" data-custom="60" {{ $travelAgent->arlines_deals_with == 'Emirates' ? 'selected' : '' }}>Emirates</option>
                            </select>
                        </div>

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_email">Primary Email
                            </label>
                            <input id="primary_email" class="form-control" value="{{ $travelAgent->primary_email }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_email"
                                placeholder="Primary Email"type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_email">Secondary Email 
                            </label>
                            <input id="secondary_email" class="form-control" value="{{ $travelAgent->secondary_email }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_email"
                                placeholder="Secondary Email" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="primary_phone">Primary Phone 
                            </label>
                            <input id="primary_phone" class="form-control" value="{{ $travelAgent->primary_phone }}"
                                data-validate-length-range="6" data-validate-words="1" name="primary_phone"
                                placeholder="Primary Phone" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="secondary_phone">Secondary Phone 
                            </label>
                            <input id="secondary_phone" class="form-control" value="{{ $travelAgent->secondary_phone }}"
                                data-validate-length-range="6" data-validate-words="1" name="secondary_phone"
                                placeholder="Secondary Phone" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="file_path">Add Address 
                            </label>
                            <input id="file_path" class="form-control" value="{{ $travelAgent->address }}"
                                data-validate-length-range="6" data-validate-words="1" name="address"
                                placeholder="Address" type="text">
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 border" style="width: 100px; height: 300px;">
                            <img src="{{ asset('storage/' . $travelAgent->file_path) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="file_path">Upload Picture 
                            </label>
                            <input id="file_path" class="form-control" value="{{ $travelAgent->file_path }}"
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
