@extends('layouts.main')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row" style="margin:70px 0">
                <div class="col-md-12">

                    <h1 style="text-align: center"> Страница не найдена </h1>
                    <img src="/img/404.jpg" style="display:block; max-width: 590px; max-height: 300px; margin: 0 auto"/>

                    <h5 style="text-align: center"> Смотрите также: </h5>
                    <ul>
                        @foreach($links as $link)
                            <li style="float: left;margin-left: 25px;"> <a href="{{ route('site.keyword', ['keyword'=>$link->url]) }}"> {{ $link->keyword }}</a> </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

@stop