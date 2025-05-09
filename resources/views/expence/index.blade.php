@include('components.header')
<!-- Ensure these are included in your layout (usually in your blade template head/footer) -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
<div role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title d-flex justify-content-between">
                        <h2>Expense Listing</h2>
                        <a href="{{ route('expenses.create') }}" class="btn btn-primary">Add New Expense</a>
                    </div>

                    <div class="x_content">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <!-- Filter Form -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Filter Expenses</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('expenses') }}" method="GET" class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="filter_type">Filter Type</label>
                                        <select name="filter_type" id="filter_type" class="form-control" onchange="toggleFilterFields()">
                                            <option value="all" {{ $filterType == 'all' ? 'selected' : '' }}>All Expenses</option>
                                            <option value="yearly" {{ $filterType == 'yearly' ? 'selected' : '' }}>Yearly</option>
                                            <option value="monthly" {{ $filterType == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                            <option value="weekly" {{ $filterType == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3" id="year-field">
                                        <label for="year">Year</label>
                                        <select name="year" id="year" class="form-control">
                                            @for ($i = date('Y'); $i >= 1970; $i--)
                                                <option value="{{ $i }}" {{ $year == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3" id="month-field">
                                        <label for="month">Month</label>
                                        <select name="month" id="month" class="form-control">
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}" {{ $month == $i ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3" id="week-field">
                                        <label for="week">Week</label>
                                        <select name="week" id="week" class="form-control">
                                            @for ($i = 1; $i <= 52; $i++)
                                                <option value="{{ $i }}" {{ $week == $i ? 'selected' : '' }}>Week {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Apply Filter</button>
                                        <a href="{{ route('expenses') }}" class="btn btn-secondary">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Total Amount Card -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Total Amount</h5>
                                <h3 class="text-primary">{{ number_format($totalAmount, 2) }}</h3>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Expense Type</th>
                                        <th>Payment Method</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <td>{{ $expense->amount }}</td>
                                            <td>{{ $expense->date }}</td>
                                            <td>{{ $expense->expense_type }}</td>
                                            <td>{{ $expense->payment_method }}</td>
                                            <td>{{ $expense->description }}</td>
                                            <td>
                                                <a href="{{ route('expenses.edit', $expense->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('expenses.destroy', $expense->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this expense?')">
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
    
    // Function to toggle filter fields based on selection
    function toggleFilterFields() {
        const filterType = document.getElementById('filter_type').value;
        const yearField = document.getElementById('year-field');
        const monthField = document.getElementById('month-field');
        const weekField = document.getElementById('week-field');
        
        // Show/hide fields based on filter type
        if (filterType === 'all') {
            yearField.style.display = 'none';
            monthField.style.display = 'none';
            weekField.style.display = 'none';
        } else if (filterType === 'yearly') {
            yearField.style.display = 'block';
            monthField.style.display = 'none';
            weekField.style.display = 'none';
        } else if (filterType === 'monthly') {
            yearField.style.display = 'block';
            monthField.style.display = 'block';
            weekField.style.display = 'none';
        } else if (filterType === 'weekly') {
            yearField.style.display = 'block';
            weekField.style.display = 'block';
            monthField.style.display = 'none';
        }
    }
    
    // Run on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleFilterFields();
    });
</script>

@include('components.footer')
