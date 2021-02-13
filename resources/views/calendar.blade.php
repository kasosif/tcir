@extends('layout')
@section('title') {{$cat->name}} @endsection
@section('csspage')
    <link rel="stylesheet" href="{{asset('scripts/vendors/fullcalendar/fullcalendar.min.css')}}">
@endsection
@section('content')
    <div class="medium-gap contact-me contact-version-two" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-row">
                        <div class="widget-sidebar find-on-map">
                            <div class="widget-header">
                                <h4>{{$cat->name}}</h4>
                            </div>
                            <div class="widget-container">
                                <div id="fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jspage')
    <script src="{{asset('scripts/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('scripts/vendors/fullcalendar/fullcalendar.min.js')}}"></script>
    <script>
        // sample calendar events data

        var curYear = moment().format('YYYY');
        var curMonth = moment().format('MM');
        var today = moment().day();


        // initialize the calendar
        $('#fullcalendar').fullCalendar({
            header: {
                left: 'prev,today,next',
                center: 'title',
                right: 'month,listMonth'
            },
            firstDay: today,
            selectConstraint: {
                start: today
            },
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            dragRevertDuration: 0,
            defaultView: 'month',
            eventLimit: true, // allow "more" link when too many events
            events: [],
            eventClick:  function(event, jsEvent, view) {

            },
            dayClick: function(date, jsEvent, view) {
                if (date.diff(moment()) > 0) {
                    $('#deadline').val(date.format());
                    $("#createReportModal").modal("show");
                }
            },

            drop: function() {
              // is the "remove after drop" checkbox checked?
              if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
              }
            },
            eventDragStop: function( event, jsEvent, ui, view ) {
            }
        });
    </script>
@endsection
