@extends('layouts.main')

@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @include('forms.leadia-form')
                </div>
            </div>
        </div>
    </section>
@stop

@section('javascripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.4/jquery.geocomplete.min.js"></script>
    <script type="text/javascript" src="/js/leadia.form.js"></script>
@stop