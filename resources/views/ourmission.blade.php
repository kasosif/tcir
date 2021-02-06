@extends('layout')
@section('title') {{__('Our Mission')}}@endsection
@section('content')
    <section class="large-gap about-me about-version-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar about-me">
                        <div class="widget-header">
                            <h4>{{__('Our Mission')}}</h4>
                        </div>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>{{__('Mission')}}</h4>
                                    <ol>
                                        <li style="margin-bottom: 15px">{{__('mission1')}}</li>
                                        <li style="margin-bottom: 15px">{{__('mission2')}}</li>
                                        @if(app()->getLocale() != "ar")
                                            <li>{{__('mission3')}}</li>
                                        @endif
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>{{__('Goals and Objectives')}}</h4>
                                    <ol>
                                        <li style="margin-bottom: 15px">{{__('goal1')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal2')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal3')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal4')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal5')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal6')}}</li>
                                        <li style="margin-bottom: 15px">{{__('goal7')}}</li>
                                        @if(app()->getLocale() == "ar")
                                            <li style="margin-bottom: 15px">{{__('goal8')}}</li>
                                            <li style="margin-bottom: 15px">{{__('goal9')}}</li>
                                            <li>{{__('goal10')}}</li>
                                        @else
                                            <li>{{__('goal8')}}</li>
                                        @endif
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

