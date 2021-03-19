@extends('layout')
@section('title') {{__('Become a Member')}}@endsection
@section('csspage')
    <link rel="stylesheet" href="{{asset('scripts/vendors/iziToast/iziToast.min.css')}}">
@endsection
@section('content')
    <div class="large-gap contact-me contact-version-two" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar contact-me">
                        <div class="widget-header">
                            <h4>{{__('Become a Member')}}</h4>
                        </div>
                        <div class="widget-content">
                            <div class="contact-form">
                                <form action="{{route('doBecomeMember')}}" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="{{__('Full Name')}}..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="{{__('Your email')}}..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="{{__('Phone number')}}..." required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" class="filled-button">{{__('Submit')}}</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('jspage')
    <script src="{{asset('scripts/vendors/iziToast/iziToast.min.js')}}"></script>
    <script>
        @if($errors->all())
        @foreach($errors->all() as $message)
        iziToast.error({
            title: 'Erreur',
            message: '{{ $message }}',
            position: 'topCenter'
        });
        @endforeach

        @elseif(session()->has('message'))
        iziToast.success({
            title: 'Succès',
            message: '{{ session()->get('message') }}',
            position: 'bottomRight'
        });

        @elseif(session()->has('error'))
        iziToast.error({
            title: 'Erreur',
            message: '{{ session()->get('error') }}',
            position: 'topCenter'
        });
        @endif
        @if (session('status'))
        iziToast.success({
            title: 'Succès',
            message: '{{ session('status') }}',
            position: 'bottomRight'
        });
        @endif
        @if (session('success'))
        iziToast.success({
            title: 'Succès',
            message: '{{ session('success') }}',
            position: 'bottomRight'
        });
        @endif
    </script>

@endsection
