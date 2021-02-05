@extends('layout')
@section('title') {{__('Contact Us')}}@endsection

@section('content')
    <div class="large-gap contact-me contact-version-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-row">
                        <div class="widget-sidebar find-on-map">
                            <div class="widget-header">
                                <h4>{{__('Find Us')}}</h4>
                            </div>
                            <div class="widget-container">
                                <div id="map">
                                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tunis+(TCIR)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed&language={{app()->getLocale()}}" style="border:0; width: 100%; height: 360px; border: none;" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="widget-sidebar contact-me">
                        <div class="widget-header">
                            <h4>{{__('Leave a message')}}</h4>
                        </div>
                        <div class="widget-content">
                            <div class="contact-form">
                                <form id="contact" action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="{{__('Your email')}}..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="subject" type="text" class="form-control" id="subject" placeholder="{{__('Subject')}}..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="{{__('Your message')}}..." required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="filled-button">{{__('Send Message')}}</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar about-me">
                        <div class="widget-header">
                            <h4>{{__('Our Infos')}}</h4>
                        </div>
                        <div class="widget-content">
                            <a href="mailtto:contact@tcir.org"><i class="fa fa-envelope"></i> contact@tcir.org</a> <br>
                            <span><i class="fa fa-phone"></i> 12345678</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
