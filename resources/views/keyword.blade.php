@extends('layouts.main')

{{--<ключ> - <присадка>--}}
@section('title'){{ capitalize_first($data->keyword) }} - {{ config('custom_app.title_additive') }}@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
            @include('_partials.breadcrumbs', ['breadcrumbs' => [
                    ['label'=>capitalize_first($data->keyword), 'url'=>'', 'active'=>true],
                ]
            ])
            </div>
        </div>
    </div>

	<section id="questions">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="question_list_head">{{ capitalize_first($data->keyword)  }}</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="questions_wrap">
				<div class="row">
					<div class="col-md-9">
						<ul class="user-question-list">
							@if (count($data->content))
								@foreach($data->content as $comment)
                                    @if(!empty($comment->banswer) && !empty($comment->answer))
									<li class="user-question-list-item">
										<div class="user-question-list-item-name">{{ $comment->user->name }}@if(isset($comment->region)) ({{ $comment->region }})@endif</div>
										<img src="/img/avatars/{{ $comment->user->face }}" alt="" class="user-question-list-item-avatar">
										<div class="user-question-list-item-text">
											<p class="user-question-list-item-text-question">{{ capitalize_first($comment->question) }}</p>
											<p class="best_answer_u">{{ $comment->banswer }}</p>
											<p class="last_answer_u hide">{{ $comment->answer }}</p>
											<button type="button" class="read_more" data-toggle="modal" data-target="#myModal">Читать полностью <i class="fa fa-angle-right"></i></button>
										</div>
									</li>
                                    @endif
								@endforeach
							@endif
						</ul>
					</div>
					<div class="col-md-3">
						<div class="aside_list">
							{{--<h3>Смотрите также:</h3>--}}
                            @if (count($data->links) > 0)
                            <ul class="list-group">
                                @foreach($data->links as $link)
                                <li class="list-group-item aside_list_item">
                                    <a href="{{ route('site.keyword', ['keyword'=>$link['url']]) }}">
                                        {{ capitalize_first($link['keyword']) }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="container_modal_body">
                    <div class="ask_block_modal">
                        <span class="modal_user_main modal_user_name"></span>
                        <div class="inset_block_ask">
                            <img src="" alt="" class="avatar_modal_user modal_user_face">
                            <p class="modal_user_ask"></p>
                        </div>
                    </div>
                    <div class="answer_block">
                        <div class="rating_answer stars">
                            <span>Рейтинг ответа:</span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span class="modal_user_main modal_user_name2"></span>
                        <div class="inset_block_ask">
                            <img src="" alt="" class="avatar_modal_user modal_user_face2">
                            <p class="modal_best_answer"></p>
                        </div>
                    </div>
                    <div id="double_answer" class="answer_block">
                        <div class="rating_answer stars_2">
                            <span>Рейтинг ответа:</span>
                            <i class="fa fa-star orange"></i>
                            <i class="fa fa-star orange"></i>
                            <i class="fa fa-star orange"></i>
                            <i class="fa fa-star orange"></i>
                            <i class="fa fa-star orange"></i>
                        </div>
                        <span class="modal_user_main modal_user_name3"></span>
                        <div class="inset_block_ask">
                            <img src="" alt="" class="avatar_modal_user modal_user_face3">
                            <p class="modal_last_answer"></p>
                        </div>
                    </div>
                    <div class="jurist_answer">
                        <div id="stars" class="rating_answer">
                            <span>Рейтинг ответа:</span>
                            <span class="jurist_answer"> <i class="fa fa-trophy"></i> Луший ответ</span>
                        </div>
                        <span class="modal_user_main modal_jurist_name"></span>
                        <div class="inset_block_ask">
                            <img src="" alt="" class="avatar_modal_user modal_jurist_face">
                            <p class="modal_jurist_answer">Оказана консультация по телефону. С уважением, ваш юрист.</p>
                        </div>
                    </div>
                    <div class="modal_ask_block">
                        <h6 class="title_modal_form">Вы тоже можете получить бесплатную консультацию!</h6>
                        <p class="desription_modal_form">Отправьте заявку или позвоните и юрист Вас проконсультирует.</p>

                        <div class="modal_form_block">
                            <div class="tab-pane active step" id="consult" data-step="1-1">
                                <form data-form="consult" data-next-step="contacts" data-target="STEP1" data-callback="step1">

                                    <h3 class="form_title">
                                        <img src="/img/jurist_online.png" alt=""/>
                                        Введите ваш вопрос,<br/> в течение <strong>5 минут</strong> вам ответит юрист.
                                    </h3>

                                    <div class="textarea-wrap">
                                        <textarea class="description form-control" cols="30" rows="6" placeholder="Текст вашего вопроса" data-form-field="question" data-necessary="true" id="free_quest"></textarea>
                                        <div class="consult-example">
                                            <strong>Пример:</strong> Оказал посредническую услугу как физическое лицо. Потом у них что то не сложилось и пытаясь вернуть свои деньги, они обвинили меня в мошенничестве и грозят подать иск в суд или в прокуратуру. Как мне быть и как себя вести?
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <div class="text-center">
                                            <button type="submit" class="btn form_btn" href="javascript:void(0);" data-form-submit="consult">Отправить &rarr;</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="step tab-pane" data-step="contacts">
                                <form data-form="contacts" data-send-lead="true" data-next-step="finish" data-target="LEAD" data-callback="lead-sent">

                                    <div class="second_step_head">
                                        <i class="icon-check"></i>
                                        <div class="second_step_title">Юрист получил ваш вопрос и готов на него ответить!</div>
                                        <div class="second_step_subtitle">Укажите ваши контакты для того, чтобы мы могли с вами связаться.</div>
                                    </div>

                                    <div class="col first">
                                        <div class="form-group">
                                            <label for="">* Имя</label>
                                            <input type="text" data-necessary="true" data-form-field="first_last_name" placeholder="Иван Иванов" class="input-text form-control">
                                        </div>


                                        <div class="form-group">
                                            <label for="">* Телефон</label>
                                            <input type="text" data-necessary="true" data-form-field="phone" placeholder="8 (495) 555-55-55" class="input-text form-control">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">* Город</label>

                                            <div id="form-place">
                                                <input type="text" data-necessary="true"  data-form-field="region" autocomplete="off" placeholder="Укажите город, где вы находитесь" class="city-input form-input input-text form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="email_label">Email</label>
                                            <input type="text" data-necessary="false" data-form-field="email" placeholder="my.email@gmail.com" class="input-text form-control">
                                        </div>
                                    </div>

                                    <div class="form-footer text-center">
                                        <div class="text-center">
                                            <button type="submit" class="btn form_btn" data-form-submit="true">Готово <i class="icon-ok"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="step tab-pane finish" data-step="finish">
                                <div class="success-message">
                                    Спасибо! Ваша заявка принята, в ближайшее время с вами свяжется наш специалист.
                                    <i class="icon-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    <script type="text/javascript">
        var fakefaces = $.parseJSON('<?=json_encode(\App\Services\FakeUserService::exportToJS())?>');
        var jurfakeFaces = $.parseJSON('<?=json_encode(\App\Services\FakeUserService::exportJurists())?>');
    </script>
    <script src="/js/jquery.mCustomScrollbar.js"></script>
    <script src="/js/read-more-modal.js"></script>
@stop