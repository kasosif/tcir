@extends('layout')
@section('title') {{__('Our Documents')}}@endsection
@section('csspage')
@endsection
@section('content')
    <section class="medium-gap coming-soon">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="main-content">
                        <h6>{{__("We are coming soon")}} !</h6>
                        <div class="counter">
                            <div class="days">
                                <div class="value">00</div>
                                <span>{{__('Days')}}</span>
                            </div>
                            <div class="hours">
                                <div class="value">00</div>
                                <span>{{__('Hours')}}</span>
                            </div>
                            <div class="minutes">
                                <div class="value">00</div>
                                <span>{{__('Minutes')}}</span>
                            </div>
                            <div class="seconds">
                                <div class="value">00</div>
                                <span>{{__('Seconds')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('jspage')
    <script>
        (function init() {
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(endtime){
                var timeinterval = setInterval(function(){
                    var t = getTimeRemaining(endtime);
                    document.querySelector(".days > .value").innerText=t.days;
                    document.querySelector(".hours > .value").innerText=t.hours;
                    document.querySelector(".minutes > .value").innerText=t.minutes;
                    document.querySelector(".seconds > .value").innerText=t.seconds;
                    if(t.total<=0){
                        clearInterval(timeinterval);
                    }
                },1000);
            }
            initializeClock("{{date('Y-m-d',strtotime('+1 month'))}}")
        })()
    </script>

@endsection
