@include('components.header')
<div   role="main">
<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Add New Role</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form class="form-horizontal form-label-left" method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="role" class="form-control col-md-7 col-xs-12" value="{{ old('role') }}" data-validate-length-range="6" data-validate-words="1" name="role" placeholder="Role" required="required" type="text">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-5 d-flex">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('roles') }}" class="btn btn-default border">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('components.footer')
