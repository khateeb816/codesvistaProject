@include('components.header')
<div   role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Candidate Initial Registration</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('initialRegistration.update', $candidate->id) }}"
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
                            <label class="control-label" for="first_name">First Name <span class="required text-danger">*</span>
                            </label>
                            <input id="first_name" class="form-control" value="{{ $candidate->first_name }}"
                                data-validate-length-range="6" data-validate-words="1" name="first_name" placeholder="First Name"
                                required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="last_name">Last Name <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="last_name" class="form-control" value="{{ $candidate->last_name }}"
                                data-validate-length-range="6" data-validate-words="1" name="last_name"
                                placeholder="Last Name" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="email">Email
                            </label>
                            <input id="email" class="form-control" value="{{ $candidate->email }}"
                                data-validate-length-range="6" data-validate-words="1" name="email"
                                placeholder="Email" required="required" type="email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="mobile">Mobile <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="mobile" class="form-control" value="{{ $candidate->mobile }}"
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
                                    <option value="{{ $experience->name }}" data-custom="{{ $experience->id }}" {{ $candidate->experience == $experience->name ? 'selected' : '' }}>{{ $experience->name }}</option>
                                    @endforeach
                            </select>
                        </div>

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="profession">Profession 
                            </label>
                            <input id="profession" class="form-control" value="{{ $candidate->profession }}"
                                data-validate-length-range="6" data-validate-words="1" name="profession"
                                placeholder="Profession"type="text">
                        </div>
                    </div>

                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="address">Address 
                            </label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ $candidate->address }}</textarea>
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
</div>


@include('components.footer')
