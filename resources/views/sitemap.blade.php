@extends('layouts.main')

{{--Карта сайта - <присадка>--}}
@section('title')Карта сайта {{ config('custom_app.http_host') }} - {{ config('custom_app.title_additive') }}@endsection

@section('content')
    <section id="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12">

                    <h5 style="margin-top: 50px"> Всего страниц: {{ $pageCount }}</h5>

                    <ul class="pagination">
                        @if($number == 0 || $number == 1)
                            <li class="disabled">
                                <a href="{{ route('site.sitemap') }}">Назад</a>
                        @else
                            <li>
                                @if($number-1 <= 1)
                                    <a href="{{ route('site.sitemap') }}">Назад</a>
                                @else
                                    <a href="{{ route('site.sitemap_paged', ['number' => ($number-1)]) }}">Назад</a>
                                @endif
                        @endif
                            </li>
                            <li class="{{ $number == $pageCount ? 'disabled' : '' }}">
                                <a href="{{ route('site.sitemap_paged', ['number' => ($number >= $pageCount) ? $pageCount : $number+1]) }}">Вперед</a>
                            </li>
                    </ul>

                    <ul class="list-group">
                        @foreach ($links as $link)
                            <li class="list-group-item aside_list_item"><a href="{{ route('site.keyword', ['keyword' => $link->url]) }}">{{ $link->keyword }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    {{--<script type="text/javascript" src="https://forms.leadsup.com/init.js"></script>
    <script type="text/javascript">MonsterForm({"webmaster" : 10078,"tpl" : "payday_short","values" : {},"click_id" : "","tags" : {},layout:"custom",style:"standalone"});</script>--}}
@stop