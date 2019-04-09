@extends("main")

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Donation</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">One Time Donation</h3>
                    </div>
                    <hr>
                    <form action="{{route('oneTimeProcessPay')}}" method="post" novalidate="novalidate">
                        {{csrf_field()}}
                        <div class="form-group">
                            <!-- <label for="cc-payment" class="control-label mb-1">Payment amount</label> -->
                            <!-- <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00"> -->
                            <select class="form-control" name="amount">
                                <option value="">Select Amount</option>
                                <option value="1000">₦2000</option>
                                <option value="3000">₦3000</option>
                                <option value="5000">₦5000</option>
                                <option value="10000">₦10000</option>
                            </select>
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Proceed</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection