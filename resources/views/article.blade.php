@extends('layouts.main')

@section('content')

	<style type="text/css">
		h1{
			font-size: 1.7em;
		}
		.article p {
			line-height: 1.7em;
			padding-top: 2px;
		}
		hr {
			color: #515151
		}
	</style>

	<div class="container">
		<div class="row article">
			<div class="col-xs-9" style="margin: 20px 0 40px;">
				@include($article)
			</div>
			@if ($urls)
				<div class="col-xs-3">
					<div class="list-group" style="margin: 50px 0px 15px">
						@foreach($urls as $url)
							<a href="{{ $url['href'] }}" class="list-group-item" title="{{ $url['title'] }}"> {{ $url['title'] }} </a>
						@endforeach
					</div>
				</div>
			@endif
		</div>
	</div>

@include('modals.article_modal')
@stop



@section('javascript')@stop

