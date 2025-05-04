@include('components.header')
<div role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Manage Experience Ranges</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="POST" action="{{ route('experienceRanges.store') }}"
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

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name <span class="required text-danger">*</span>
                                        </label>
                                        <input id="name" class="form-control" value="{{ old('name') }}"
                                            name="name" placeholder="Name"
                                            required="required" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="description">Description <span class="required text-danger">*</span>
                                        </label>
                                        <textarea id="description" class="form-control" name="description" placeholder="Description"
                                            required="required" rows="3">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{ route('experienceRanges') }}" class="btn btn-default border">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Experience Range Listing</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="experienceRangeTable">
                                <thead>
                                    <tr>
                                        <th>Experience Range</th>
                                        <th>Description</th>
                                        <th width="150">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($experienceRanges as $experienceRange)
                                        <tr>
                                            <td>{{ $experienceRange->name }}</td>
                                            <td>{{ $experienceRange->description }}</td>
                                            <td>
                                                <a href="{{ route('experienceRanges.edit', $experienceRange->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('experienceRanges.destroy', $experienceRange->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this experience range?')">
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

@push('scripts')
<script>
    $(document).ready(function() {
        $('#experienceRangeTable').DataTable();
    });
</script>
@endpush

@include('components.footer')
