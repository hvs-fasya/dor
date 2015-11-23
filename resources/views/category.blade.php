@extends('layouts.main')

{{--<категория> - <присадка>--}}
@section('title'){{ capitalize_first($catModel->keyword) }} - {{ config('custom_app.title_additive') }}@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                @include('_partials.breadcrumbs', ['breadcrumbs' => [
                        ['label'=>capitalize_first($catModel->keyword), 'url'=>'', 'active'=>true],
                    ]
                ])
            </div>
        </div>
    </div>

	<section id="questions">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="question_list_head">{{ capitalize_first($catModel->keyword)  }}</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="questions_wrap">
				<div class="row">
					<div class="col-xs-9">
                        @if (count($data) > 0)
                            @foreach($data as $keyword)
                                <div class="element_category_block">
                                    <div class="">
                                        <a class="href" href="{{ route('site.keyword',
                                        ['cat_keyword'=>$catModel->url, 'keyword'=>$keyword['keyword']->url]) }}">
                                            {{ capitalize_first($keyword['keyword']->keyword) }}
                                        </a>
                                    </div>

                                    <div>
                                        <div>{{ $keyword['comment']->question or ''}} {{ $keyword['comment']->answer or ''}}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
					</div>
					<div class="col-xs-3">
                        @if (count($links) > 0)
                        <div class="aside_list">
                            <ul class="list-group">
                                @foreach($links as $link)
                                    <li class="list-group-item aside_list_item">
                                        <a href="{{ route('site.cat_keyword', ['cat_keyword'=>$link['url']]) }}">
                                            {{ capitalize_first($link['keyword']) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</section>

@stop

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