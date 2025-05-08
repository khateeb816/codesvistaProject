@include('components.header')

<div   role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Role</h3>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update Role Information</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="form-horizontal form-label-left" method="POST" action="{{ route('roles.update', $role->id) }}" enctype="multipart/form-data">
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="role" name="role" class="form-control col-md-7 col-xs-12" value="{{ old('role', $role->name) }}" placeholder="Role">
                                </div>
                            </div>  

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5 d-flex">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('roles') }}" class="btn btn-default border">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
