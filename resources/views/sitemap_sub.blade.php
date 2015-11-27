@extends('layouts.main')

{{--Карта сайта: <категория> - <присадка>--}}
@section('title')Карта сайта {{ config('custom_app.http_host') }}: {{ capitalize_first($catModel->keyword) }} - {{ config('custom_app.title_additive') }}@endsection

@section('content')
    <section id="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">

                    {{--<h5 style="margin-top: 50px"> Всего страниц: {{ $pageCount }}</h5>--}}

                    {{--<ul class="pagination">--}}
                        {{--<li class="{{ $number == 0 ? 'disabled' : ''  }}" ><a  href="{{ route('site.sitemap', ['number' => ($number - 1) < 0 ? 0 : ($number - 1)]) }}"> Назад </a></li>--}}
                        {{--<li class="{{ $number == $pageCount-1 ? 'disabled' : ''  }}"><a href="{{ route('site.sitemap', ['number' => ($number + 1) >= $pageCount ? $pageCount-1 : $number + 1]) }}"> Вперед </a></li>--}}
                    {{--</ul>--}}
                    <div style="margin-top: 50px"></div>

                    <ul class="list-group">
                        @foreach ($links as $link)
                            <li class="list-group-item aside_list_item"><a href="{{ route('site.keyword', ['cat_keyword' => $catModel->url, 'keyword' => $link->url]) }}">{{ $link->keyword }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    {{--<script type="text/javascript" src="https://forms.leadsup.com/init.js"></script>
    <script type="text/javascript">MonsterForm({"webmaster" : 10078,"tpl" : "payday_short","values" : {},"click_id" : "","tags" : {},layout:"custom",style:"standalone"});</script>--}}
@stop
