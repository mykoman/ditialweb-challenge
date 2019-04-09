@extends("main")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Dashboard</h2>
                <!-- <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button> -->
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-4">
            <a href="{{route('oneTimeDonatePage')}}">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>One Time Donation</h2>
                                <span></span>
                            </div>
                        </div>
                        {{--<div class="overview-chart">--}}
                        {{--<canvas id="widgetChart1"></canvas>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="{{route('recurrentDonatePage')}}">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="text">
                                <h2>Monthly Payment</h2>
                                <span></span>
                            </div>
                        </div>
                        {{--<div class="overview-chart">--}}
                        {{--<canvas id="widgetChart2"></canvas>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="{{route('paymentRecord')}}">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2>Payment Record</h2>
                                <span></span>
                            </div>
                        </div>
                        {{--<div class="overview-chart">--}}
                        {{--<canvas id="widgetChart3"></canvas>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </a>
        </div>
        {{--<div class="col-sm-6 col-lg-3">--}}
            {{--<a href="https://paystack.com/pay/v5dh9jg5kg">--}}
                {{--<div class="overview-item overview-item--c4">--}}
                    {{--<div class="overview__inner">--}}
                        {{--<div class="overview-box clearfix">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="zmdi zmdi-money"></i>--}}
                            {{--</div>--}}
                            {{--<div class="text">--}}
                                {{--<h2>10,000 Monthly</h2>--}}
                                {{--<span></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="overview-chart">--}}
                        {{--<canvas id="widgetChart4"></canvas>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
    </div>



@endsection