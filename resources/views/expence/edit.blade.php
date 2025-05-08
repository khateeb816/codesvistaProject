@include('components.header')
<div role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Expense</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('expenses.update', $expense->id) }}"
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
                    <input type="hidden" name="candidate_id" value="0">
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="amount">Amount <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="amount" class="form-control" value="{{ $expense->amount }}"
                                data-validate-length-range="6" data-validate-words="1" name="amount"
                                placeholder="Amount" required="required" type="text">
                        </div>

                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="date">Date <span class="required text-danger">*</span>
                            </label>
                            <input id="date" class="form-control" value="{{ $expense->date }}"
                                data-validate-length-range="6" data-validate-words="1" name="date" placeholder="Date"
                                required="required" type="date">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="expense_type">Expense Type <span
                                    class="required text-danger">*</span>
                            </label>
                            <select name="expense_type" id="expense_type" class="form-control">
                                <option value="E-NUMBER FEE (ONLINE)" {{ $expense->expense_type == 'E-NUMBER FEE (ONLINE)' ? 'selected' : '' }}>
                                    E-NUMBER FEE (ONLINE)</option>
                                <option value="VISA FEE (STAMPING/OBJECTION)" {{ $expense->expense_type == 'VISA FEE (STAMPING/OBJECTION)' ? 'selected' : '' }}>
                                    VISA FEE (STAMPING/OBJECTION)</option>
                                <option value="ALLIDE BANK`s FEE" {{ $expense->expense_type == 'ALLIDE BANK`s FEE' ? 'selected' : '' }}>
                                    ALLIDE BANK`s FEE</option>
                                <option value="NATIONAL BANK`s FEE WITH INSURANCE FEE" {{ $expense->expense_type == 'NATIONAL BANK`s FEE WITH INSURANCE FEE' ? 'selected' : '' }}>
                                    NATIONAL BANK`s FEE WITH INSURANCE FEE</option>
                                <option value="PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)" {{ $expense->expense_type == 'PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)' ? 'selected' : '' }}>
                                    PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)</option>
                                <option value="TRANSPORTATION EXPENCES" {{ $expense->expense_type == 'TRANSPORTATION EXPENCES' ? 'selected' : '' }}>
                                    TRANSPORTATION EXPENCES</option>
                                <option value="SALARIES" {{ $expense->expense_type == 'SALARIES' ? 'selected' : '' }}>
                                    SALARIES</option>
                                <option value="HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)" {{ $expense->expense_type == 'HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)' ? 'selected' : '' }}>
                                    HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)</option>
                                <option value="MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)" {{ $expense->expense_type == 'MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)' ? 'selected' : '' }}>
                                    MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)</option>
                                <option value="PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)" {{ $expense->expense_type == 'PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)' ? 'selected' : '' }}>
                                    PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)</option>
                                <option value="TICKETS PAYMENT" {{ $expense->expense_type == 'TICKETS PAYMENT' ? 'selected' : '' }}>
                                    TICKETS PAYMENT</option>
                                <option value="OFFICE MAINTENANCE EXPENSES" {{ $expense->expense_type == 'OFFICE MAINTENANCE EXPENSES' ? 'selected' : '' }}>
                                    OFFICE MAINTENANCE EXPENSES</option>
                                <option value="STATIONARY" {{ $expense->expense_type == 'STATIONARY' ? 'selected' : '' }}>
                                    STATIONARY</option>
                                <option value="ELECTRICITY BILL" {{ $expense->expense_type == 'ELECTRICITY BILL' ? 'selected' : '' }}>
                                    ELECTRICITY BILL</option>
                                <option value="PTCL BILLS" {{ $expense->expense_type == 'PTCL BILLS' ? 'selected' : '' }}>
                                    PTCL BILLS</option>
                                <option value="CHARITY" {{ $expense->expense_type == 'CHARITY' ? 'selected' : '' }}>
                                    CHARITY</option>
                                <option value="COURIER EXPENSES" {{ $expense->expense_type == 'COURIER EXPENSES' ? 'selected' : '' }}>
                                    COURIER EXPENSES</option>
                                <option value="COMPUTER ASSECORIES" {{ $expense->expense_type == 'COMPUTER ASSECORIES' ? 'selected' : '' }}>
                                    COMPUTER ASSECORIES</option>
                                <option value="CLEANING EXPENSES" {{ $expense->expense_type == 'CLEANING EXPENSES' ? 'selected' : '' }}>
                                    CLEANING EXPENSES</option>
                                <option value="OTHER EXPENSES" {{ $expense->expense_type == 'OTHER EXPENSES' ? 'selected' : '' }}>
                                    OTHER EXPENSES</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label" for="payment_method">Payment Method <span
                                    class="required text-danger">*</span>
                            </label>
                            <select class="form-control" id="payment_method" name="payment_method">
                                <option value="Cash" {{ $expense->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
                                <option value="Credit Card" {{ $expense->payment_method == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
                                <option value="Bank Transfer" {{ $expense->payment_method == 'Bank Transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                <option value="Check" {{ $expense->payment_method == 'Check' ? 'selected' : '' }}>Check</option>
                                <option value="Other" {{ $expense->payment_method == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $expense->description }}</textarea>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5 d-flex">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('expenses') }}" class="btn btn-default border">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
