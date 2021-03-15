@extends('layout')
@section('title') {{__('Our Status')}}@endsection

@section('content')
    <div class="large-gap contact-me contact-version-two" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-row">
                        <div class="widget-sidebar find-on-map">
                            <div class="widget-header">
                                <h4>{{__('Our Status')}}</h4>
                            </div>
                            <div class="widget-container">
                                <iframe src="{{asset('uploads/statut.pdf')}}" height="500" width="1000">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
