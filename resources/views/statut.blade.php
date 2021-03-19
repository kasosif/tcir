@extends('layout')
@section('title') {{__('Our Documents')}}@endsection
@section('csspage')
    <style>
        /* CSS for responsive iframe */
        /* ========================= */

        /* outer wrapper: set max-width & max-height; max-height greater than padding-bottom % will be ineffective and height will = padding-bottom % of max-width */
        #Iframe-Master-CC-and-Rs {
            max-width: 512px;
            max-height: 100%;
            overflow: hidden;
        }

        /* inner wrapper: make responsive */
        .responsive-wrapper {
            position: relative;
            height: 0;    /* gets height from padding-bottom */

            /* put following styles (necessary for overflow and scrolling handling on mobile devices) inline in .responsive-wrapper around iframe because not stable in CSS:
              -webkit-overflow-scrolling: touch; overflow: auto; */

        }

        .responsive-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            margin: 0;
            padding: 0;
            border: none;
        }

        /* padding-bottom = h/w as % -- sets aspect ratio */
        /* YouTube video aspect ratio */
        .responsive-wrapper-wxh-572x612 {
            padding-bottom: 107%;
        }

        /* general styles */
        /* ============== */
        .set-border {
            border: 5px inset #4f4f4f;
        }
        .set-box-shadow {
            -webkit-box-shadow: 4px 4px 14px #4f4f4f;
            -moz-box-shadow: 4px 4px 14px #4f4f4f;
            box-shadow: 4px 4px 14px #4f4f4f;
        }
        .set-padding {
            padding: 40px;
        }
        .set-margin {
            margin: 30px;
        }
        .center-block-horiz {
            margin-left: auto !important;
            margin-right: auto !important;
        }

    </style>
@endsection
@section('content')
    <div class="large-gap contact-me contact-version-two" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-row">
                        <div class="widget-sidebar find-on-map">
                            <div class="widget-header">
                                <h4>{{__('Our Documents')}}</h4>
                            </div>
                            <div class="widget-container">
                                <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                                    <div class="responsive-wrapper responsive-wrapper-wxh-572x612"
                                         style="-webkit-overflow-scrolling: touch; overflow: auto;">

                                        <iframe src="{{asset('uploads/statut.pdf')}}">
                                            <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                                    An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
                                        </iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
