@extends('layouts.main')

@section('title'){{ config('custom_app.title_main') }} - {{ config('custom_app.title_additive') }}@endsection

@section('content')

    <div class="fast_links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">{{ config('custom_app.title_main') }}</h1>
                </div>

                @foreach($links->chunk(10) as $linkscollection)
                <div class="col-lg-6">
                    <ul class="list-group">
                        @foreach($linkscollection as $link)
                            <li class="list-group-item">
                                <a href="{{ route('site.keyword', ['keyword'=>$link->url]) }}">{{ capitalize_first($link->keyword) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                method: "POST",
                url: "/loadhero"
            }).done(function(data) {
                $('#header').after(data);
                afterAjaxLoadFormHandler();
            });
        });
    </script>
@stop