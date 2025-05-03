@include('components.header')
<div class="right_col" role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Job Category</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('jobCategories.update', $jobCategory->id) }}"
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
                            <input id="name" class="form-control" value="{{ $jobCategory->name }}"
                                data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Name"
                                required="required" type="text">
                        </div>
                        
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('jobCategories') }}" class="btn btn-default border">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include('components.footer')
