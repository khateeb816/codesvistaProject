@include('components.header')
<div role="main">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Expence</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" action="{{ route('expenses.store') }}"
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
                    <input type="hidden" name="candidate_id" value="0">
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="amount">Amount <span
                                    class="required text-danger">*</span>
                            </label>
                            <input id="amount" class="form-control" value="{{ old('amount') }}"
                                data-validate-length-range="6" data-validate-words="1" name="amount"
                                placeholder="Amount" required="required" type="text">
                        </div>

                    </div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="date">Date <span class="required text-danger">*</span>
                            </label>
                            <input id="date" class="form-control" value="{{ old('date') }}"
                                data-validate-length-range="6" data-validate-words="1" name="date" placeholder="Date"
                                required="required" type="date">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="expense_type">Expense Type <span
                                    class="required text-danger">*</span>
                            </label>
                            <select name="expense_type" id="expense_type" class="form-control">
                                <option value="E-NUMBER FEE (ONLINE)">
                                    E-NUMBER FEE (ONLINE)</option>
                                <option value="VISA FEE (STAMPING/OBJECTION)">
                                    VISA FEE (STAMPING/OBJECTION)</option>
                                <option value="ALLIDE BANK`s FEE">
                                    ALLIDE BANK`s FEE</option>
                                <option value="NATIONAL BANK`s FEE WITH INSURANCE FEE">
                                    NATIONAL BANK`s FEE WITH INSURANCE FEE</option>
                                <option value="PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)">
                                    PROTECTOR FEE (SOME TIME WITH EXTRA EXPENSES)</option>
                                <option value="TRANSPORTATION EXPENCES">
                                    TRANSPORTATION EXPENCES</option>
                                <option value="SALARIES">
                                    SALARIES</option>
                                <option value="HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)">
                                    HOTEL & KITCHEN EXPENSES (DAILY/WEEKLY/MONTHELY)</option>
                                <option value="MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)">
                                    MISCELLANEOUS EXPENSES (WITH MANUALLY ADDING OPTION)</option>
                                <option value="PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)">
                                    PERSONAL EXPENSES OF BOSS (WITH MANUALLY ADDING OPTION)</option>
                                <option value="TICKETS PAYMENT">
                                    TICKETS PAYMENT</option>
                                <option value="OFFICE MAINTENANCE EXPENSES">
                                    OFFICE MAINTENANCE EXPENSES</option>
                                <option value="STATIONARY">
                                    STATIONARY</option>
                                <option value="ELECTRICITY BILL">
                                    ELECTRICITY BILL</option>
                                <option value="PTCL BILLS">
                                    PTCL BILLS</option>
                                <option value="CHARITY">
                                    CHARITY</option>
                                <option value="COURIER EXPENSES">
                                    COURIER EXPENSES</option>
                                <option value="COMPUTER ASSECORIES">
                                    COMPUTER ASSECORIES</option>
                                <option value="CLEANING EXPENSES">
                                    CLEANING EXPENSES</option>
                                <option value="OTHER EXPENSES">
                                    OTHER EXPENSES</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label" for="payment_method">Payment Method <span
                                    class="required text-danger">*</span>
                            </label>
                            <select class="form-control" id="payment_method" name="payment_method">
                                <option value="">Select Payment Method</option>
                                <option value="Cash">Cash</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Check">Check</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
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
