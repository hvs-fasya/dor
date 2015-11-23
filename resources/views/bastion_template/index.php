<?php
    require_once "config.php";

    function GetRealIp()
    {
        $Ip = $_SERVER ["REMOTE_ADDR"];
        if (isset ($_SERVER ["HTTP_X_FORWARDED_FOR"])) {
            if (isset ($_SERVER ["HTTP_X_REAL_IP"]))
                $Ip = $_SERVER ["HTTP_X_REAL_IP"];
            else
                $Ip = $_SERVER ["HTTP_X_FORWARDED_FOR"];
        }
        return $Ip;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="/js/jquery-counter/jquery.counter-analog.css"/>
	<link rel="stylesheet" href="/js/jquery-counter/jquery.counter-analog2.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body data-user-id="<?php echo $config['wmid']?>" data-client-ip="<?php echo GetRealIp()?>" data-subaccount="<?php echo isset($_GET['sub']) ? strip_tags($_GET['sub']) : '' ?>">

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
                <a href="#" class="header_logo">
                    <img src="/img/logo.png" alt="" class="img-responsive"/>
				</a>
			</div>

			<div class="col-lg-9">
				<ul class="header_list">
					<li>
						<div class="header_head">Консультация с <br/> юристом по телефону</div>
					</li>
                    <?php foreach ($config['phones'] as $phone): ?>
                        <li>
                            <div class="city_contact">
                                <div class="city_contact_top">
                                    <i class="icon-map-marker"></i>
                                    <?php echo $phone['region'] ?>
                                </div>
                                <div class="city_contact_phone">
                                    <?php echo $phone['phone'] ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
					<li>
						<div class="city_contact">
							<div class="city_contact_top">
								<i class="icon-time"></i>
								Без выходных
							</div>
							<div class="city_contact_shedule">
								9:00 до 24:00
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>
</header><!--#header-->

<section id="question_tabs">
	<div class="container">
			<ul role="tablist" class="nav nav-tabs list-unstyled tab_list">
				<li role="presentation" class="active">

						<a class="question_tab_link" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
							<span>Консультация с юристом</span>
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
							Консультация по телефону
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
							Услуги для юридических лиц
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
							Лучшие юристы в вашем городе!
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">
							Вы нарушили закон? Защитим ваши интересы
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">
							Ваши права были нарушены? Возместим ущерб!
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">
							Хотите составить иск, жалобу, заявление?
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">
							Сомневаетесь в законности ваших действий?
						</a>

				</li>
				<li role="presentation">

						<a class="question_tab_link" href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">
							Как оспорить сделку, договор, решение суда?
						</a>

				</li>
			</ul>

		</div>
	</div>
</section>

<div class="hero">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 site-description">
				<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab1">
							<h1 class="tab_pane_title">
								<span>
									Нужна помощь юриста?
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Воспользуйтесь бесплатной консультацией без предоплаты и очередей.
							</p>
							<h2 class="tab_pane_call">
								Введите вопрос в форме и получите <b>незамедлительную помощь!</b>
							</h2>
							<ul class="tab_advantages">
								<li>Работаем без выходных <b>24/7</b></li>
								<li>Наши филиалы расположены во <b>всех регионах России</b></li>
								<li>Оплата услуг производится <b>только после подписания <br/>договора</b></li>
								<li>Специализируемся во <b>всех областях права</b></li>
							</ul>
						</div>


						<div role="tabpanel" class="tab-pane" id="tab2">
							<h1 class="tab_pane_title">
								<span>
									Горячая линия юридической помощи!
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Позвоните по одному из номеров, и вас бесплатно проконсультирует юрист
							</p>
							<h2 class="tab_pane_call">
								Или введите вопрос в форме и юрист сам <b>перезвонит Вам!</b>
							</h2>
							<ul class="tab_advantages">
                                <?php foreach($config['phones'] as $phone): ?>
								    <li><?php echo $phone['region']?>: <b><?php echo $phone['phone']?></b> </li>
                                <?php endforeach; ?>
								<li>Работаем без выходных <b>24/7</b></li>
								<li>Принимаем звонки из <b>всех городов!</b></li>
							</ul>

						</div>


						<div role="tabpanel" class="tab-pane" id="tab3">
							<h1 class="tab_pane_title">
								<span>
									Юридические и бухгалтерские услуги
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Самые невероятные вершины бизнеса достижимы при выборе правильного пути!
							</p>
							<h2 class="tab_pane_call">
								Отправьте заявку с описанием вашей задачи, чтобы мы могли связаться с Вами и приступить к работе.
							</h2>
							<ul class="tab_advantages">
								<li>Открытие фирмы, регистрирация ООО, ИП, внесение изменений.</li>
								<li>Подбираем юридические адреса для регистрации фирм в Москве и Санкт-Петербурге.</li>
								<li>Оказываем услуги по юридическому и бухгалтерскому сопровождению бизнеса.</li>
								<li>Ликвидируем, проводим процедуру банкротства юридических <br/> лиц, в том числе и с долгами.</li>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="tab4">
							<h1 class="tab_pane_title">
								<span>
									Лучшие юристы в вашем городе.
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Мы работаем в 84 регионах и 116 городах РФ.
							</p>
							<h2 class="tab_pane_call">
								Заполните заявку с вопросом, чтобы наш юрист из вашего города проконсультировал вас.
							</h2>
							<ul class="tab_advantages">

								<li>Наши сотрудники профессионалы в области семейного, трудового, жилищного, гражданского, уголовного, административного права.</li>
								<li>Мы помогли наказать более 200 страховых компаний, работодателей, магазинов, недобросовестных бизнес-партнёров.</li>
								<li>Общая сумма исков, составленных нами более 1 млрд. рублей, выплаченных более 2000 клиентов.</li>
								<li>Мы объеденили 19 крупных юридических и нотариальных компаний.</li>
							</ul>

						</div>

						<div role="tabpanel" class="tab-pane" id="tab5">
							<h1 class="tab_pane_title">
								<span>
									Нарушили закон? Мы защитим ваши интересы.
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Обеспечим вашу защиту и добъемся Вашего оправдания!
							</p>
							<h2 class="tab_pane_call">
								Опишите кратко факт предъявленного вам обвинения и юрист примет первые действия по защите вас уже сегодня!
							</h2>
							<ul class="tab_advantages">


								<li>Мы грамотно выстроим позицию вашей защиты и будем представлять ваши интересы в полиции, прокуратуре, суде.</li>
								<li>Готовы защищать ваши права без выходных, праздников, круглосуточно.</li>
								<li>Добьёмся скорейшего разрешения вопроса без материальных и моральных убытков для вас, вашей семьи и вашего бизнеса.</li>
								<li>В случае вашего ареста, задержания добьёмся вашего освобождения в кратчайшие сроки.</li>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="tab6">
							<h1 class="tab_pane_title">
								<span>
									Ваши права были нарушены?
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Поможем вам восстановить справедливость и наказать виновных.
							</p>
							<h2 class="tab_pane_call">
								Опишите ситуацию нарушения ваших прав и наш юрист свяжется с вами в кратчайшие сроки!
							</h2>
							<ul class="tab_advantages">

								<li>Мы работаем без праздников, выходных, круглосуточно на страже ваших интересов.</li>
								<li>Наши юристы помогут вам возместить моральный и материальный ущерб даже в самых спорных ситуациях.</li>
								<li>В сферу нашей деятельности входят уголовные, административные, гражданские дела, защита прав потребителей, автоправо.</li>
								<li>В 50% случаев добиваемся выплаты ущерба двухкратно превыщающей сумму нарушенных прав.</li>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="tab7">
							<h1 class="tab_pane_title">
								<span>
									Хотите подать иск, заявление, жалобу?
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Подготовоим иск, заявление, жалобу, и подадим их в суд, прокуратуру и другие инстанции в течении 24 часов!
							</p>
							<h2 class="tab_pane_call">
								Опишите вашу ситуацию и юрист возьмётся за ваше дело уже сегодня!
							</h2>
							<ul class="tab_advantages">
								<li>Подготавливаем жалобы, заявления по защите ваших интересов в прокуратуру, суд.</li>
								<li>Осуществляем сбор доказательств по самым различным вопросам: развод и алименты, уголовные, административные, жилищные, гражданские дела, автоправо.</li>
								<li>Подготавливаем иски в суды первой инстанции, а так же апелляционные, кассационные жалобы.</li>
								<li>Будем вашими представителями на всех этапах <br/>судопроизводства и исполнения судебного решения.</li>

							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="tab8">
							<h1 class="tab_pane_title">
								<span>
									Сомневаетесь в законности ваших действий?
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								Вы хотите что-то построить, произвести, открыть, совершить, но сомневаетесь законно ли это?
							</p>
							<h2 class="tab_pane_call">
								Мы осуществим правовой анализ ситуации и поможем узаконить ваши действия.
							</h2>
							<ul class="tab_advantages">
								<li>Добьёмся выдачи разрешений, лицензий, сертификатов и иных документов для осуществления ваших действий.</li>
								<li>Обезопасим юридически ваши постройки, бизнес, деятельность.</li>
								<li>Поможем избежать в дальнейшем нарушения закона.</li>
								<li>В случае выявления нарушений закона, соберём <br/>доказательства в вашу пользу, представим ваши интересы в проверяющих органах.</li>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="tab9">
							<h1 class="tab_pane_title">
								<span>
							Как оспорить сделку, договор, решение суда?
								</span>
							</h1>
							<p class="tab_pane_subtitle">
								В 87% случаях оспариваем сделки, договора, решения судов в пользу наших клиентов.
							</p>
							<h2 class="tab_pane_call">
								Опишите, что вы хотите оспорить и мы предложим вам успешное решение вашего вопроса.
							</h2>
							<ul class="tab_advantages">
								<li>Добьёмся изменения либо расторжения договора дарения, купли-продажи квартиры, земли, машины, завещания, либо иной сделки. Отменим решение суда.</li>
								<li>Подготовим необходимые доказательства, документы, подадим их в нужные инстанции.</li>
								<li>Будем представлять ваши интересы в суде.</li>
								<li>Оплата лишь по факту успешного вынесения решения в вашу пользу.</li>

							</ul>
						</div>

				</div>
				<img src="/img/c_j.png" alt="" class="c_j"/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-wrap">
				<div class="form">
					<div class="tab-content">
						<div class="form_head">Online консультация</div>
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

						<div class="tab-pane step" id="callmeback">


							<form data-form="callmeback" data-next-step="contacts" data-target="STEP1" data-callback="step1">


								<div class="specialist">
									<h3>Срочно нужно проконсультироваться с юристом по телефону? Выберите область права, которая Вас интересует, и наш специалист перезвонит Вам всего через 15 минут!</h3>

									<div class="form-group">
										<label>Выберите интересующую область права</label>
										<select name="" id="" class="form-control" data-form-field="question" data-necessary="true">


											<option value="">Выберите область</option>

											<optgroup label="Конституционное право">
												<option value="Здравствуйте, мне нужна консультация в области: Конституционное право, перезвоните мне пожалуйста.">Конституционное право</option>
											</optgroup>

											<optgroup label="Гражданское право">
												<option value="Здравствуйте, мне нужна консультация в области: Договорное право, перезвоните мне пожалуйста.">Договорное право</option>
												<option value="Здравствуйте, мне нужна консультация в области: Право собственности, перезвоните мне пожалуйста.">Право собственности</option>
												<option value="Здравствуйте, мне нужна консультация в области: Взыскание задолженности, перезвоните мне пожалуйста.">Взыскание задолженности</option>
											</optgroup>

											<optgroup label="Семейное право">
												<option value="Здравствуйте, мне нужна консультация в области: Заключение и расторжение брака, перезвоните мне пожалуйста.">Заключение и расторжение брака</option>
												<option value="Здравствуйте, мне нужна консультация в области: Алименты, перезвоните мне пожалуйста.">Алименты</option>
												<option value="Здравствуйте, мне нужна консультация в области: Раздел имущества, перезвоните мне пожалуйста.">Раздел имущества</option>
												<option value="Здравствуйте, мне нужна консультация в области: Усыновление, опека, попечительство, перезвоните мне пожалуйста.">Усыновление, опека, попечительство</option>
											</optgroup>


											<optgroup label="Недвижимость">
												<option value="Здравствуйте, мне нужна консультация в области: Жилищное право, перезвоните мне пожалуйста.">Жилищное право</option>
												<option value="Здравствуйте, мне нужна консультация в области: Ипотека, перезвоните мне пожалуйста.">Ипотека</option>
												<option value="Здравствуйте, мне нужна консультация в области: Долевое участие в строительстве, перезвоните мне пожалуйста.">Долевое участие в строительстве</option>
												<option value="Здравствуйте, мне нужна консультация в области: Приватизация, перезвоните мне пожалуйста.">Приватизация</option>
												<option value="Здравствуйте, мне нужна консультация в области: Земельное право, перезвоните мне пожалуйста.">Земельное право</option>
											</optgroup>


											<optgroup label="Трудовое право">
												<option value="Здравствуйте, мне нужна консультация в области: Защита прав работников, перезвоните мне пожалуйста.">Защита прав работников</option>
												<option value="Здравствуйте, мне нужна консультация в области: Защита прав работодателя, перезвоните мне пожалуйста.">Защита прав работодателя</option>
											</optgroup>

											<optgroup label="Защита прав потребителей">
												<option value="Здравствуйте, мне нужна консультация в области: Защита прав потребителей, перезвоните мне пожалуйста.">Защита прав потребителей</option>
											</optgroup>

											<optgroup label="Нотариат">
												<option value="Здравствуйте, мне нужна консультация в области: Нотариат, перезвоните мне пожалуйста.">Нотариат</option>
											</optgroup>

											<optgroup label="Наследство">
												<option value="Здравствуйте, мне нужна консультация в области: Наследство, перезвоните мне пожалуйста.">Наследство</option>
											</optgroup>

											<optgroup label="Уголовное право">
												<option value="Здравствуйте, мне нужна консультация в области: Уголовное право, перезвоните мне пожалуйста.">Уголовное право</option>
											</optgroup>

											<optgroup label="Административное право">
												<option value="Здравствуйте, мне нужна консультация в области: ДТП, ГИБДД, ПДД, перезвоните мне пожалуйста.">ДТП, ГИБДД, ПДД</option>
												<option value="Здравствуйте, мне нужна консультация в области: Произвол чиновников, перезвоните мне пожалуйста.">Произвол чиновников</option>
											</optgroup>

											<optgroup label="Военное право">
												<option value="Здравствуйте, мне нужна консультация в области: Военное право, перезвоните мне пожалуйста.">Военное право</option>
											</optgroup>

											<optgroup label="Социальное обеспечение">
												<option value="Здравствуйте, мне нужна консультация в области: Пенсии и пособия, перезвоните мне пожалуйста.">Пенсии и пособия</option>
												<option value="Здравствуйте, мне нужна консультация в области: Гарантии, льготы, компенсации, перезвоните мне пожалуйста.">Гарантии, льготы, компенсации</option>
											</optgroup>

											<optgroup label="Страхование">
												<option value="Здравствуйте, мне нужна консультация в области: Страхование, перезвоните мне пожалуйста.">Страхование</option>
											</optgroup>

											<optgroup label="Гражданство">
												<option value="Здравствуйте, мне нужна консультация в области: Гражданство, перезвоните мне пожалуйста.">Гражданство</option>
											</optgroup>

											<optgroup label="Исполнительное производство">
												<option value="Здравствуйте, мне нужна консультация в области: Исполнительное производство, перезвоните мне пожалуйста.">Исполнительное производство</option>
											</optgroup>

											<optgroup label="Арбитраж">
												<option value="Здравствуйте, мне нужна консультация в области: Арбитраж, перезвоните мне пожалуйста.">Арбитраж</option>
											</optgroup>

											<optgroup label="Корпоративное право">
												<option value="Здравствуйте, мне нужна консультация в области: Регистрация юридических лиц, перезвоните мне пожалуйста.">Регистрация юридических лиц</option>
												<option value="Здравствуйте, мне нужна консультация в области: Банкротство, перезвоните мне пожалуйста.">Банкротство</option>
											</optgroup>

											<optgroup label="Налоговое право">
												<option value="Здравствуйте, мне нужна консультация в области: Налоговое право, перезвоните мне пожалуйста.">Налоговое право</option>
											</optgroup>

											<optgroup label="Таможенное право">
												<option value="Здравствуйте, мне нужна консультация в области: Таможенное право, перезвоните мне пожалуйста.">Таможенное право</option>
											</optgroup>

											<optgroup label="Бухгалтерский учет">
												<option value="Здравствуйте, мне нужна консультация в области: Бухгалтерский учет, перезвоните мне пожалуйста.">Бухгалтерский учет</option>
											</optgroup>

											<optgroup label="Лицензирование">
												<option value="Здравствуйте, мне нужна консультация в области: Лицензирование, перезвоните мне пожалуйста.">Лицензирование</option>
											</optgroup>

											<optgroup label="Интеллектуальная собственность">
												<option value="Здравствуйте, мне нужна консультация в области: Авторские и смежные права, перезвоните мне пожалуйста.">Авторские и смежные права</option>
												<option value="Здравствуйте, мне нужна консультация в области: Интернет и право, перезвоните мне пожалуйста.">Интернет и право</option>
												<option value="Здравствуйте, мне нужна консультация в области: Товарные знаки, патенты, перезвоните мне пожалуйста.">Товарные знаки, патенты</option>
												<option value="Здравствуйте, мне нужна консультация в области: Программы ЭВМ и базы данных, перезвоните мне пожалуйста.">Программы ЭВМ и базы данных</option>
											</optgroup>

										</select>
									</div>

								</div>
								<div class="form-footer">
									<div class="steps pull-left"><i class="icon-plus-sign-alt"></i> Шаг 1 из 2</div>
									<div class="pull-right">
										<button type="submit" class="btn btn-next" href="javascript:void(0);" data-form-submit="consult">Отправить вопрос &rarr;</button>
									</div>
								</div>
							</form>
						</div>

						<div class="step tab-pane" id="service">
							<form data-form="service" data-next-step="contacts" data-target="STEP1"  data-callback="step1">
								<h3>Мне нужна юридическая помощь по следующему вопросу:</h3>
								<label class="category_title">Выберите категорию:</label>
								<select name="" id="category" class="form-control">
									<option class="init_option">Выберите категорию</option>
									<option class="cat1">Авто</option>
									<option class="cat2">Авторское право</option>
									<option class="cat3">Алименты</option>
									<option class="cat4">Амнистия</option>
									<option class="cat5">Армия</option>
									<option class="cat6">Банковская деятельность</option>
									<option class="cat7">Бухгалтерия</option>
									<option class="cat8">Возмещение ущерба</option>
									<option class="cat9">Вымогательство</option>
									<option class="cat10">Выселение</option>
									<option class="cat11">Гражданство</option>
									<option class="cat12">Дарение/ дарственная</option>
									<option class="cat13">Доверенность</option>
									<option class="cat14">Договор</option>
									<option class="cat15">Долги</option>
									<option class="cat16">Доля</option>
									<option class="cat17">Жалоба</option>
									<option class="cat18">Жилье</option>
									<option class="cat19">ЖКХ</option>
									<option class="cat20">Завещание</option>
									<option class="cat21">Закон</option>
									<option class="cat22">Защита прав потребителей</option>
									<option class="cat23">Заявление</option>
									<option class="cat24">Имею ли я право?</option>
									<option class="cat25">Инвалидность</option>
									<option class="cat26">Инфляция</option>
									<option class="cat27">Ипотека</option>
									<option class="cat28">Компенсация</option>
									<option class="cat29">Кредит</option>
									<option class="cat30">Ликвидация</option>
									<option class="cat31">Материнский капитал</option>
									<option class="cat32">Медицина</option>
									<option class="cat33">Налоги</option>
									<option class="cat34">Наследство</option>
									<option class="cat35">Недвижимость</option>
									<option class="cat36">Паспорт</option>
									<option class="cat37">Пенсия</option>
									<option class="cat38">Покупка</option>
									<option class="cat39">Пошлина</option>
									<option class="cat40">Право собственности</option>
									<option class="cat41">Приватизация</option>
									<option class="cat42">Регистрация</option>
									<option class="cat43">Семейное право</option>
									<option class="cat44">Срок давности</option>
									<option class="cat45">Страхование</option>
									<option class="cat46">Суд</option>
									<option class="cat47">Судебные приставы</option>
									<option class="cat48">Трудовое право</option>
									<option class="cat49">Условно-досрочное освобождение</option>
									<option class="cat50">Юридические лица</option>
									<option class="custom_question">Другая категория</option>
								</select>
								<label class="question_title">Выберите вопрос:</label>
								<select name="" id="question" class="form-control" data-form-field="question" data-necessary="true">
									<option value="">Выберите вопрос</option>
								</select>
								<select name="" id="question_all" class="form-control" style="display: none;">
									<option class="init_option" value="">Выберите вопрос</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Авто." class="cat1">Авто</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возврат водительских прав." class="cat1">Возврат водительских прав</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Доверенность." class="cat1">Доверенность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Езда без прав." class="cat1">Езда без прав</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законен ли штраф?." class="cat1">Законен ли штраф?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Кто виноват в ДТП?." class="cat1">Кто виноват в ДТП?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Лишение водительских прав." class="cat1">Лишение водительских прав</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Наезд на пешехода." class="cat1">Наезд на пешехода</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Продажа автомобиля." class="cat1">Продажа автомобиля</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Прохождение техосмотра." class="cat1">Прохождение техосмотра</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: ГИБДД." class="cat1">ГИБДД</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Водительские права/ удостоверение." class="cat1">Водительские права/ удостоверение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возврат прав." class="cat1">Возврат прав</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возмещение ущерба при ДТП." class="cat1">Возмещение ущерба при ДТП</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: ДТП." class="cat1">ДТП</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Замена водительского удостоверения." class="cat1">Замена водительского удостоверения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Лишение прав." class="cat1">Лишение прав</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Техосмотр." class="cat1">Техосмотр</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ущерб при ДТП." class="cat1">Ущерб при ДТП</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Штрафы ГИБДД." class="cat1">Штрафы ГИБДД</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Штрафы за нарушения." class="cat1">Штрафы за нарушения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Экспертиза ДТП." class="cat1">Экспертиза ДТП</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Авторское право." class="cat2">Авторское право</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Интеллектуальная собственность." class="cat2">Интеллектуальная собственность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты." class="cat3">Алименты</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алиментные обязательства." class="cat3">Алиментные обязательства</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты в твердой денежной сумме." class="cat3">Алименты в твердой денежной сумме</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты на ребенка." class="cat3">Алименты на ребенка</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты после 18 лет." class="cat3">Алименты после 18 лет</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты на жену." class="cat3">Алименты на жену</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты с безработного." class="cat3">Алименты с безработного</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Алименты с продажи квартиры." class="cat3">Алименты с продажи квартиры</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Взыскание алиментов." class="cat3">Взыскание алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Выплата алиментов." class="cat3">Выплата алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Задолженность по алиментам." class="cat3">Задолженность по алиментам</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Заявление на алименты." class="cat3">Заявление на алименты</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Изменение размера алиментов." class="cat3">Изменение размера алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Неустойка по алиментам." class="cat3">Неустойка по алиментам</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Неуплата алиментов." class="cat3">Неуплата алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образец на алименты." class="cat3">Образец на алименты</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отказ от алиментов." class="cat3">Отказ от алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Перерасчет алиментов." class="cat3">Перерасчет алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Подать на алименты." class="cat3">Подать на алименты</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Размер алиментов." class="cat3">Размер алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Снижение размера алиментов." class="cat3">Снижение размера алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Соглашение об уплате алиментов." class="cat3">Соглашение об уплате алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Сумма алиментов." class="cat3">Сумма алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Увеличение алиментов." class="cat3">Увеличение алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уменьшение алиментов." class="cat3">Уменьшение алиментов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уплата алиментов." class="cat3">Уплата алиментов</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Амнистия." class="cat4">Амнистия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Дачная амнистия." class="cat4">Дачная амнистия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уголовная амнистия." class="cat4">Уголовная амнистия</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Армия." class="cat5">Армия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Военный билет." class="cat5">Военный билет</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возьмут ли/ заберут ли в армию?." class="cat5">Возьмут ли/ заберут ли в армию?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Медкомиссия в военкомате." class="cat5">Медкомиссия в военкомате</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отсрочка от армии." class="cat5">Отсрочка от армии</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Служба в армии." class="cat5">Служба в армии</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Служба по контракту." class="cat5">Служба по контракту</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Срок службы в армии." class="cat5">Срок службы в армии</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Банковская деятельность." class="cat6">Банковская деятельность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возврат кредита/ налога." class="cat6">Возврат кредита/ налога</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Выплата кредита." class="cat6">Выплата кредита</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Погашение/ досрочное погашение кредита." class="cat6">Погашение/ досрочное погашение кредита</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Задолженность по кредиту." class="cat6">Задолженность по кредиту</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законно ли требование/ действия банка/ коллекторов/ судебных приставов?." class="cat6">Законно ли требование/ действия банка/ коллекторов/ судебных приставов?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Кредитная карта." class="cat6">Кредитная карта</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Кредитный договор." class="cat6">Кредитный договор</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Поручительство." class="cat6">Поручительство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Просроченный кредит." class="cat6">Просроченный кредит</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Бухгалтерия." class="cat7">Бухгалтерия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Бухгалтерский учет." class="cat7">Бухгалтерский учет</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Возмещение материального/ страхового ущерба/ вреда." class="cat8">Возмещение материального/ страхового ущерба/ вреда</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возмещение морального ущерба/ вреда." class="cat8">Возмещение морального ущерба/ вреда</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Порядок возмещения ущерба." class="cat8">Порядок возмещения ущерба</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Вымогательство." class="cat9">Вымогательство</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Выселение." class="cat10">Выселение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законно ли выселение?." class="cat10">Законно ли выселение?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Принудительное выселение." class="cat10">Принудительное выселение</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Гражданство." class="cat11">Гражданство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Выезд за границу." class="cat11">Выезд за границу</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Двойное гражданство." class="cat11">Двойное гражданство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Получить гражданство." class="cat11">Получить гражданство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Упрощенное получение гражданства." class="cat11">Упрощенное получение гражданства</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: УФМС." class="cat11">УФМС</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Дарение/ дарственная." class="cat12">Дарение/ дарственная</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Дарственная или завещание." class="cat12">Дарственная или завещание</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Договор дарения." class="cat12">Договор дарения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Налог на дарение." class="cat12">Налог на дарение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оспорить дарственную." class="cat12">Оспорить дарственную</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оформление дарственной." class="cat12">Оформление дарственной</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образец договора дарения." class="cat12">Образец договора дарения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отмена дарения." class="cat12">Отмена дарения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Право дарения." class="cat12">Право дарения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация дарения." class="cat12">Регистрация дарения</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Форма дарения." class="cat12">Форма дарения</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Доверенность." class="cat13">Доверенность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Бланк доверенности." class="cat13">Бланк доверенности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Генеральная доверенность." class="cat13">Генеральная доверенность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Нужна ли доверенность?." class="cat13">Нужна ли доверенность?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образец доверенности." class="cat13">Образец доверенности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оформление доверенности." class="cat13">Оформление доверенности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Форма доверенности." class="cat13">Форма доверенности</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Договор." class="cat14">Договор</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Бланк договора." class="cat14">Бланк договора</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Виды договоров." class="cat14">Виды договоров</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Заключение договора." class="cat14">Заключение договора</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образцы договоров." class="cat14">Образцы договоров</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Признаки договора." class="cat14">Признаки договора</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Расторжение договора." class="cat14">Расторжение договора</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация договора." class="cat14">Регистрация договора</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Условия договора." class="cat14">Условия договора</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Долги." class="cat15">Долги</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Взыскание долга." class="cat15">Взыскание долга</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Деньги в долг." class="cat15">Деньги в долг</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Долг за квартиру/ по алиментам/ по кредиту/ по расписке." class="cat15">Долг за квартиру/ по алиментам/ по кредиту/ по расписке</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Долговая расписка." class="cat15">Долговая расписка</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Доля." class="cat16">Доля</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Долевая собственность." class="cat16">Долевая собственность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Долевое участие." class="cat16">Долевое участие</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Первый пай." class="cat16">Первый пай</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Жалоба." class="cat17">Жалоба</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Виды жалоб." class="cat17">Виды жалоб</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Написать жалобу." class="cat17">Написать жалобу</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образец жалобы." class="cat17">Образец жалобы</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Рассмотрение жалобы." class="cat17">Рассмотрение жалобы</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Срок подачи жалобы." class="cat17">Срок подачи жалобы</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Жилье." class="cat18">Жилье</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Выселение." class="cat18">Выселение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Жилищный сертификат." class="cat18">Жилищный сертификат</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Улучшение жилищных условий." class="cat18">Улучшение жилищных условий</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: ЖКХ." class="cat19">ЖКХ</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Аварийное жилье." class="cat19">Аварийное жилье</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Доступное жилье." class="cat19">Доступное жилье</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Жилищное право." class="cat19">Жилищное право</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Жилищный вопрос." class="cat19">Жилищный вопрос</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Коммунальные услуги." class="cat19">Коммунальные услуги</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Муниципальное жилье." class="cat19">Муниципальное жилье</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оплата." class="cat19">Оплата</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Перепланировка." class="cat19">Перепланировка</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Приватизация." class="cat19">Приватизация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Социальное жилье." class="cat19">Социальное жилье</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Завещание." class="cat20">Завещание</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Завещание или дарственная." class="cat20">Завещание или дарственная</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Закон." class="cat21">Закон</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законы РФ." class="cat21">Законы РФ</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Федеральный закон." class="cat21">Федеральный закон</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законно ли?." class="cat21">Законно ли?</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Законно ли?." class="cat21">Законно ли?</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Защита прав потребителей." class="cat22">Защита прав потребителей</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возврат денег/ товара." class="cat22">Возврат денег/ товара</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возмещение ущерба." class="cat22">Возмещение ущерба</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Замена товара." class="cat22">Замена товара</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Защита прав потребителя." class="cat22">Защита прав потребителя</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Моральный вред/ ущерб." class="cat22">Моральный вред/ ущерб</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Мошенничество." class="cat22">Мошенничество</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Обмен товара." class="cat22">Обмен товара</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Признание сделки недействительной." class="cat22">Признание сделки недействительной</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Заявление." class="cat23">Заявление</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Бланки заявлений." class="cat23">Бланки заявлений</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Заполнение заявлений." class="cat23">Заполнение заявлений</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Исковое заявление." class="cat23">Исковое заявление</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Образцы заявлений." class="cat23">Образцы заявлений</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Форма заявления." class="cat23">Форма заявления</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Имею ли я право?." class="cat24">Имею ли я право?</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Инвалидность." class="cat25">Инвалидность</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Инфляция." class="cat26">Инфляция</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Ипотека." class="cat27">Ипотека</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ипотечный кредит Как (…)?." class="cat27">Ипотечный кредит Как (…)?</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Компенсация." class="cat28">Компенсация</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Кредит." class="cat29">Кредит</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Погашение кредита." class="cat29">Погашение кредита</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Проценты по кредиту." class="cat29">Проценты по кредиту</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Ликвидация." class="cat30">Ликвидация</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Материнский капитал." class="cat31">Материнский капитал</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Медицина." class="cat32">Медицина</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Больничный." class="cat32">Больничный</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отказ в выборе врача." class="cat32">Отказ в выборе врача</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Налоги." class="cat33">Налоги</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Налоговая инспекция." class="cat33">Налоговая инспекция</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Налоговый вычет." class="cat33">Налоговый вычет</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: НДФЛ." class="cat33">НДФЛ</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ставки налогов." class="cat33">Ставки налогов</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уплата налогов." class="cat33">Уплата налогов</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Наследство." class="cat34">Наследство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Вступить в наследство." class="cat34">Вступить в наследство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Восстановление наследства." class="cat34">Восстановление наследства</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Завещание." class="cat34">Завещание</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отказ от наследства." class="cat34">Отказ от наследства</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оспорить завещание." class="cat34">Оспорить завещание</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Порядок наследования." class="cat34">Порядок наследования</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Права на наследство." class="cat34">Права на наследство</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Недвижимость." class="cat35">Недвижимость</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Агентства недвижимости." class="cat35">Агентства недвижимости</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Аренда недвижимости." class="cat35">Аренда недвижимости</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Земля." class="cat35">Земля</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Сделки с недвижимостью." class="cat35">Сделки с недвижимостью</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Оформление недвижимости." class="cat35">Оформление недвижимости</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Паспорт." class="cat36">Паспорт</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Загранпаспорт." class="cat36">Загранпаспорт</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсия." class="cat37">Пенсия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсионеры." class="cat37">Пенсионеры</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсионное законодательство." class="cat37">Пенсионное законодательство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсионный стаж." class="cat37">Пенсионный стаж</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсионный фонд." class="cat37">Пенсионный фонд</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Покупка." class="cat38">Покупка</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Пошлина." class="cat39">Пошлина</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Госпошлина." class="cat39">Госпошлина</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Право собственности." class="cat40">Право собственности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Защита права собственности." class="cat40">Защита права собственности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Приобретение права собственности." class="cat40">Приобретение права собственности</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация права собственности." class="cat40">Регистрация права собственности</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Приватизация." class="cat41">Приватизация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отказ от приватизации." class="cat41">Отказ от приватизации</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Сроки приватизации." class="cat41">Сроки приватизации</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация." class="cat42">Регистрация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Вид на жительство." class="cat42">Вид на жительство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Временная прописка." class="cat42">Временная прописка</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Временная регистрация." class="cat42">Временная регистрация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Документы для прописки." class="cat42">Документы для прописки</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Право прописки." class="cat42">Право прописки</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Прописка." class="cat42">Прописка</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрационный учет." class="cat42">Регистрационный учет</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация." class="cat42">Регистрация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Снятие с регистрационного учета." class="cat42">Снятие с регистрационного учета</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Семейное право." class="cat43">Семейное право</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Беременность и роды." class="cat43">Беременность и роды</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Брак." class="cat43">Брак</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Бракоразводный процесс." class="cat43">Бракоразводный процесс</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Опекунство." class="cat43">Опекунство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ребенок." class="cat43">Ребенок</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Раздел имущества." class="cat43">Раздел имущества</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Размен имущества." class="cat43">Размен имущества</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Усыновление." class="cat43">Усыновление</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Собственность." class="cat43">Собственность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Собственность." class="cat43">Собственность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Арест имущества." class="cat43">Арест имущества</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Право собственности." class="cat43">Право собственности</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Срок давности." class="cat44">Срок давности</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Страхование." class="cat45">Страхование</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Выплата страховки." class="cat45">Выплата страховки</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: КАСКО." class="cat45">КАСКО</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: ОСАГО." class="cat45">ОСАГО</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Страховая компания." class="cat45">Страховая компания</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Страховая премия." class="cat45">Страховая премия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Страховой полис." class="cat45">Страховой полис</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Страховой случай." class="cat45">Страховой случай</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Страховые выплаты." class="cat45">Страховые выплаты</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Фонд страхования." class="cat45">Фонд страхования</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Суд." class="cat46">Суд</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Административное правонарушение." class="cat46">Административное правонарушение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Встречный иск." class="cat46">Встречный иск</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Госпошлина." class="cat46">Госпошлина</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Гражданский иск." class="cat46">Гражданский иск</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Доказательства." class="cat46">Доказательства</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Исковое заявление." class="cat46">Исковое заявление</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Исполнительное производство." class="cat46">Исполнительное производство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Мировое соглашение." class="cat46">Мировое соглашение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Мировой суд." class="cat46">Мировой суд</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Надзорная жалоба." class="cat46">Надзорная жалоба</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Надзорная инстанция." class="cat46">Надзорная инстанция</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Обжалование." class="cat46">Обжалование</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Обращение в суд." class="cat46">Обращение в суд</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Повестка в суд." class="cat46">Повестка в суд</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Погашение судимости." class="cat46">Погашение судимости</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Подача иска." class="cat46">Подача иска</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Подача кассационной жалобы." class="cat46">Подача кассационной жалобы</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Подсудность." class="cat46">Подсудность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Поправки в УК РФ." class="cat46">Поправки в УК РФ</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Постановление суда." class="cat46">Постановление суда</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Представительство в суде." class="cat46">Представительство в суде</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Протокол судебного заседания." class="cat46">Протокол судебного заседания</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Решение суда." class="cat46">Решение суда</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Составление искового заявления." class="cat46">Составление искового заявления</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Судебные приставы." class="cat47">Судебные приставы</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Исполнительный лист." class="cat47">Исполнительный лист</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Опись имущества." class="cat47">Опись имущества</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Судебное решение." class="cat47">Судебное решение</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Трудовое право." class="cat48">Трудовое право</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Беременность и роды." class="cat48">Беременность и роды</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Больничный." class="cat48">Больничный</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Зарплата." class="cat48">Зарплата</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Отпуск." class="cat48">Отпуск</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Пенсия." class="cat48">Пенсия</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Трудовая деятельность." class="cat48">Трудовая деятельность</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Увольнение." class="cat48">Увольнение</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Условно-досрочное освобождение." class="cat49">Условно-досрочное освобождение</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уголовное право." class="cat49">Уголовное право</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Испытательный срок." class="cat49">Испытательный срок</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Уголовное дело." class="cat49">Уголовное дело</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Условный срок." class="cat49">Условный срок</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ходатайство на УДО." class="cat49">Ходатайство на УДО</option>


									<option value="Мне нужна юридическая помощь по следующему вопросу: Юридические лица." class="cat50">Юридические лица</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Банкротство." class="cat50">Банкротство</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Возврат госпошлины." class="cat50">Возврат госпошлины</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Закрытие." class="cat50">Закрытие</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Ликвидация." class="cat50">Ликвидация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Регистрация." class="cat50">Регистрация</option>
									<option value="Мне нужна юридическая помощь по следующему вопросу: Реорганизация." class="cat50">Реорганизация</option>
								</select>


								<div class="question">
									<div class="textarea-wrap">
										<textarea data-necessary="true" data-form-field="question" placeholder="Ваш вопрос" rows="6" cols="30" class="description form-control"></textarea>
										<div class="consult-example">
											<strong>Пример:</strong> Оказал посредническую услугу как физическое лицо. Потом у них что то не сложилось и пытаясь вернуть свои деньги, они обвинили меня в мошенничестве и грозят подать иск в суд или в прокуратуру. Как мне быть и как себя вести?
										</div>
									</div>
								</div>

								<div class="form-footer clearfix">
									<div class="steps pull-left"><i class="icon-plus-sign-alt"></i> Шаг 1 из 2</div>
									<div class="pull-right">
										<button data-form-submit="consult" href="javascript:void(0);" class="btn btn-next" type="submit">Отправить вопрос →</button>
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
									<button type="submit" class="btn form_btn" data-form-submit="true">Готово <i class="icon-ok"></i></button>
								</div>
							</form>
						</div>

						<div class="step tab-pane finish" data-step="finish">
							<div class="success-message">
								Спасибо! Ваша заявка принята, в ближайшее время с вами свяжется наш специалист.
								<i class="icon-check"></i>
							</div>

						</div>

						<div class="tab-pane" id="data">
							<h3>Заполните пожалуйста</h3>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>

</div>
<!--hero-->





<div class="info">

	<div class="container">
		<div class="row">
			<div class="col-md-4 pro pro1">
				<i class="icon-money"></i>
				<h4 id="free_consult"><a href="#">Первая консультация - бесплатно!</a></h4>
				<div class="desc">
					Задайте вопрос юристу и получите квалифицированную консультацию совершенно бесплатно.
				</div>

			</div>
			<div class="col-md-4 pro pro3">
				<i class="icon-check"></i>
				<h4>№1 в России</h4>
				<div class="desc">
					<p>Наш проект объединяет более 2 000 юридических компаний и адвокатов.</p>
					Люди, которым мы помогли: <br>
					<span class="counter"></span>
				</div>
			</div>
			<div class="col-md-4 pro pro2">

				<i class="icon-time"></i>
				<h4>Быстро и удобно</h4>

				<div class="desc">
					С нами Вы сэкономите массу времени и денег, ведь компетентный юрист свяжется с Вами уже через 15 минут.
				</div>
			</div>

		</div>
	</div>
</div>

<div class="slider_questions">
	<div class="container">
		<div class="row">
			<h2 class="slider_questions_head">
				Недавно оказанные бесплатные консультации
			</h2>
			<h4 class="slider_questions_subhead">
				Посмотрите последние вопросы и ответы наших специалистов
			</h4>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div id="myCarousel" class="carousel slide">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
					</ol>


					<div class="carousel-inner">
						<div class="item active">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> Подскажите как взыскать алименты на ребенка за прошлые годы, если бывший муж нигде не работает и не работал?
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span> Согласно статье 107 Семейного кодекса РФ, взыскать алименты за прошедший период вы можете только при условии, что докажете уклонение вашего мужа от их уплаты. Например, вы уже подавали в суд на алименты или у вас было нотариально заверенное соглашение об уплате алиментов, но вы их не получали. Если вы не подавали в суд и соглашения у вас нет, то взыскать алименты за прошедший период не получится. Если вашему ребенку еще не исполнилось 18 лет, вы можете подать на алименты иск мировому судье и получать алименты в твердой денежной сумме, раз ваш муж нигде не работает.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> У моего мужа долг по огромному кредиту! Мне уже один раз позвонили коллекторы. Может ли банк взыскать долг с меня?
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span> Банк может взыскать долг с вас в следующих случаях: если кредит был взят во время брака и если вы были поручителем у мужа. В первом случае, согласно статье 45 Семейного Кодекса РФ, кредитор может требовать «выдела доли супруга-должника, которая причиталась бы супругу-должнику при разделе общего имущества супругов, для обращения на нее взыскания». Во втором случае велика вероятность, что долг придется оплачивать целиком вам. Если кредит взят до брака и вы не были поручителем – ни один банк не сможет заставить вас оплачивать долги мужа. Если кредит взят в браке, лучше не дождаться угроз коллекторов и обратиться к юристу.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> Куда обратиться, если муж не платит алименты? Долг по исполнительному листу составляет уже больше 200 000 рублей. Как взыскать?
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span> Для того чтобы взыскать долг по исполнительному листу, вам нужно обратиться к приставам и выяснить какие меры они предприняли, чтобы взыскать долг. Если станет понятно, что никаких – смело пишите жалобу на бездействие приставов вышестоящему приставу, в прокуратуру или в суд. Будет лучше, если эту жалобу составит юрист, чтобы вы смогли получить алименты и долг по ним быстрее. Если окажется, что приставы не могут найти должника, понадобиться объявить его в розыск. Для ускорения процесса вы можете сами попробовать разыскать мужа через общих знакомых и родных.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> Сдала квартиру незнакомым людям. Через 2 месяца зашла к ним, а они обои испачкали, сантехнику испортили. Как расторгнуть договор?
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span> Изучите договор на аренду. Действуйте исходя из условий расторжения, указанных в договоре. Если в заключенном договоре не оговорены условия досрочного расторжения, просто известите квартиросъемщиков, что вы расторгаете договор и они должны съехать в течение 2 недель. Кстати, не лишним будет сделать фотографии квартиры и прийти в квартиру со свидетелем. Если дело дойдет до суда, вы сможете доказать причину выселения. Если квартиранты захотят подать на вас в суд, вам будет гораздо легче защититься. Рекомендуем впредь составлять договор вместе с юристом, чтобы потом вы точно знали свои права и обязанности.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> Можно ли вернуть в магазин ноутбук? Продавец сказал, что этого нельзя сделать, так как 20 дней уже прошло с покупки!!!
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span> Это зависит от того, по какой причине вы хотите его вернуть. Поскольку прошло уже 20 дней, вы можете вернуть ноутбук только в следующих ситуациях: присутствует неустранимый дефект, его нельзя устранить без серьезных затрат, он появляется даже после ремонта. Чтобы вернуть ноутбук в таких ситуациях, нужно написать претензию в магазин. Если же причина возврата никак не связана с исправностью ноутбука и он просто вам не подошел, вы не сможете ни обменять его, ни вернуть за него деньги, так как он входит в перечень технически сложных товаров надлежащего качества, не подлежащих возврату или обмену.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-xs-6">
								<div class="slider_unit">
									<h4 class="slider_unit_question">
										<span class="slider_unit_question_mark">Вопрос:</span> Мне уже 3 месяца не платят зарплату. Я уволилась и даже после этого мне ничего не выплатили. Как получить свои деньги?
									</h4>
									<div class="slider_unit_answer">
										<span class="slider_unit_answer_mark">Ответ:</span>
										Если вы были трудоустроены официально, то у вас очень высокие шансы получить деньги в полном объеме. Но для этого придется обратиться в суд по месту нахождения организации с исковым заявлением о взыскании задолженности по заработной плате. Причем делать это нужно как можно скорее, потому что срок исковой давности по таким делам составляет 3 месяца, и для того чтобы продлить его, нужны веские причины.  Если вы были трудоустроены не официально – получить зарплату в полном объеме будет крайне сложно. Перед тем как подать в суд вы можете написать жалобу в Трудовую инспекцию.
										<i class="fa fa-quote-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<i class="fa fa-angle-left glyphicon-chevron-left"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<i class="fa fa-angle-right glyphicon-chevron-right"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>



		<div class="row mobile_question_block">
			<div class="col-xs-12">
				<dl class="mobile_question_list">
					<dt class="mobile_question_question">
						<span>Вопрос:</span> Подскажите как взыскать алименты на ребенка за прошлые годы, если бывший муж нигде не работает и не работал?
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Согласно статье 107 Семейного кодекса РФ, взыскать алименты за прошедший период вы можете только при условии, что докажете уклонение вашего мужа от их уплаты. Например, вы уже подавали в суд на алименты или у вас было нотариально заверенное соглашение об уплате алиментов, но вы их не получали. Если вы не подавали в суд и соглашения у вас нет, то взыскать алименты за прошедший период не получится. Если вашему ребенку еще не исполнилось 18 лет, вы можете подать на алименты иск мировому судье и получать алименты в твердой денежной сумме, раз ваш муж нигде не работает.
					</dd>
					<dt class="mobile_question_question">
						<span>Вопрос:</span> У моего мужа долг по огромному кредиту! Мне уже один раз позвонили коллекторы. Может ли банк взыскать долг с меня?
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Банк может взыскать долг с вас в следующих случаях: если кредит был взят во время брака и если вы были поручителем у мужа. В первом случае, согласно статье 45 Семейного Кодекса РФ, кредитор может требовать «выдела доли супруга-должника, которая причиталась бы супругу-должнику при разделе общего имущества супругов, для обращения на нее взыскания». Во втором случае велика вероятность, что долг придется оплачивать целиком вам. Если кредит взят до брака и вы не были поручителем – ни один банк не сможет заставить вас оплачивать долги мужа. Если кредит взят в браке, лучше не дождаться угроз коллекторов и обратиться к юристу.
					</dd>
					<dt class="mobile_question_question">
						<span>Вопрос:</span> Куда обратиться, если муж не платит алименты? Долг по исполнительному листу составляет уже больше 200 000 рублей. Как взыскать?
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Для того чтобы взыскать долг по исполнительному листу, вам нужно обратиться к приставам и выяснить какие меры они предприняли, чтобы взыскать долг. Если станет понятно, что никаких – смело пишите жалобу на бездействие приставов вышестоящему приставу, в прокуратуру или в суд. Будет лучше, если эту жалобу составит юрист, чтобы вы смогли получить алименты и долг по ним быстрее. Если окажется, что приставы не могут найти должника, понадобиться объявить его в розыск. Для ускорения процесса вы можете сами попробовать разыскать мужа через общих знакомых и родных.
					</dd>
					<dt class="mobile_question_question">
						<span>Вопрос:</span> Сдала квартиру незнакомым людям. Через 2 месяца зашла к ним, а они обои испачкали, сантехнику испортили. Как расторгнуть договор?
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Изучите договор на аренду. Действуйте исходя из условий расторжения, указанных в договоре. Если в заключенном договоре не оговорены условия досрочного расторжения, просто известите квартиросъемщиков, что вы расторгаете договор и они должны съехать в течение 2 недель. Кстати, не лишним будет сделать фотографии квартиры и прийти в квартиру со свидетелем. Если дело дойдет до суда, вы сможете доказать причину выселения. Если квартиранты захотят подать на вас в суд, вам будет гораздо легче защититься. Рекомендуем впредь составлять договор вместе с юристом, чтобы потом вы точно знали свои права и обязанности.
					</dd>
					<dt class="mobile_question_question">
						<span>Вопрос:</span> Можно ли вернуть в магазин ноутбук? Продавец сказал, что этого нельзя сделать, так как 20 дней уже прошло с покупки!!!
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Это зависит от того, по какой причине вы хотите его вернуть. Поскольку прошло уже 20 дней, вы можете вернуть ноутбук только в следующих ситуациях: присутствует неустранимый дефект, его нельзя устранить без серьезных затрат, он появляется даже после ремонта. Чтобы вернуть ноутбук в таких ситуациях, нужно написать претензию в магазин. Если же причина возврата никак не связана с исправностью ноутбука и он просто вам не подошел, вы не сможете ни обменять его, ни вернуть за него деньги, так как он входит в перечень технически сложных товаров надлежащего качества, не подлежащих возврату или обмену.
					</dd>
					<dt class="mobile_question_question">
						<span>Вопрос:</span> Мне уже 3 месяца не платят зарплату. Я уволилась и даже после этого мне ничего не выплатили. Как получить свои деньги?
					</dt>
					<dd class="mobile_question_answer">
						<span>Ответ:</span> Если вы были трудоустроены официально, то у вас очень высокие шансы получить деньги в полном объеме. Но для этого придется обратиться в суд по месту нахождения организации с исковым заявлением о взыскании задолженности по заработной плате. Причем делать это нужно как можно скорее, потому что срок исковой давности по таким делам составляет 3 месяца, и для того чтобы продлить его, нужны веские причины.  Если вы были трудоустроены не официально – получить зарплату в полном объеме будет крайне сложно. Перед тем как подать в суд вы можете написать жалобу в Трудовую инспекцию.
					</dd>
				</dl>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12 col-lg-12">
				<ul class="list-unstyled lawyer_list list_button">
					<li class="button_item text-center">
						<button class="btn-add btn-add_quest" type="button"  id="call_jurist">
							Задать вопрос юристу
							<i class="icon-question-sign"></i>
						</button>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div><!--slider_questions-->

<div class="button_block" id="jurist_block">
    <div class="container">
        <div class="row">
            <div class=" col-md-12 col-lg-12">
                <h2 class="text-center">Вам помогут наши лучшие юристы. <span>Задайте вопрос прямо сейчас!</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <img src="/img/lawyer.png" alt="" class="lawyer"/>
                <ul class="list-unstyled lawyer_list editable-inline">
                    <li class="lawyer_name" contenteditable="true">Проскуряков Михаил<br contenteditable="false"/> Константинович</li>
                    <li contenteditable="true">Стаж более 20 лет.</li>
                    <li>Специализация:
                        <span class="thematics" contenteditable="true">ДТП, ОСАГО, ГИБДД,  Кредиты и займы,  Налоги,  Возмещение вреда,  Страховое право,  Административное право,  Потребительское право</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/img/lawyer3.png" alt="" class="lawyer"/>
                <ul class="list-unstyled lawyer_list">
                    <li class="lawyer_name">Карпова Елена <br/>Николаевна</li>
                    <li>Стаж более 14 лет.</li>
                    <li>Специализация:
                        <span class="thematics">Гражданство,  Загранпаспорта, визы,  Договорное право,  Потребительское право,  Воинский учет,  Правоведение,  Уголовное право,  Семейное право</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/img/lawyer4.png" alt="" class="lawyer"/>
                <ul class="list-unstyled lawyer_list">
                    <li class="lawyer_name">Пильчевский Юрий<br/> Карлович</li>
                    <li>Стаж более 25 лет.</li>
                    <li>Специализация:
                        <span class="thematics">ООО, АО, ИП, Договорное право,  Потребительское право,  Семейное право,  Недвижимость,  Трудовое право,  ДТП, ОСАГО, ГИБДД</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/img/lawyer2.png" alt="" class="lawyer"/>
                <ul class="list-unstyled lawyer_list">
                    <li class="lawyer_name">Сазонова Наталья <br/> Викторовна</li>
                    <li>Стаж более 13 лет.</li>
                    <li>Специализация:
                        <span class="thematics">Семейное право,  Недвижимость,  Трудовое право,  Договорное право,  Потребительское право,  ДТП, ОСАГО, ГИБДД,  Наследство</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <ul class="list-unstyled lawyer_list list_button">
                    <li class="button_item text-center">
                        <button class="btn-add" type="button" id="quest_jurist">
                            Задать вопрос юристу
                            <i class="icon-question-sign"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="top">
	<div class="container">

		<div class="row text-center">
			<h2>В каких направлениях мы работаем</h2>
		</div>

		<div class="row directions">
			<div class="col-lg-6 text-right">
				<h4>Для физических лиц</h4>
				<ul>
					<li><a href="#">Участие в переговорах</a></li>
					<li><a href="#">Сопровождение сделок</a></li>
					<li><a href="#">Обслуживание фирм</a></li>
					<li><a href="#">Страховые споры</a></li>
					<li><a href="#">Корпоративные споры</a></li>
					<li><a href="#">Регистрация и ликвидация юрлиц</a></li>
					<li><a href="#">Арбитраж</a></li>
					<li><a href="#">Взыскание долгов</a></li>
				</ul>
			</div>

			<div class="col-lg-6">
				<h4>Для юридических лиц</h4>
				<ul>
					<li><a href="#">Участие в переговорах</a></li>
					<li><a href="#">Сопровождение сделок</a></li>
					<li><a href="#">Обслуживание фирм</a></li>
					<li><a href="#">Страховые споры</a></li>
					<li><a href="#">Корпоративные споры</a></li>
					<li><a href="#">Регистрация и ликвидация юрлиц</a></li>
					<li><a href="#">Арбитраж</a></li>
					<li><a href="#">Взыскание долгов</a></li>
				</ul>
			</div>
		</div>


	</div>
</div>


<div class="how_it_works">

	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">Как мы работаем?</h2>
				</div>
			</div>

			<div class="col-lg-12">
				<ul class="list-inline text-center about_list">
					<li>
						<img alt="" src="/img/about_1.png">
						<span>Отправьте вопрос или позвоните нам</span>
					</li>
					<li class="divider_arrow">
						<img alt="" src="/img/about_divider.png">
					</li>
					<li>
						<img alt="" src="/img/about_2.png">
						<span>Мы окажем бесплатную консультацию</span>
					</li>
					<li class="divider_arrow">
						<img alt="" src="/img/about_divider.png">
					</li>
					<li>
						<img alt="" src="/img/about_3.png">
						<span>Ваша проблема будет решена</span>
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>
<!--how_it_works-->

<div class="cases">
    <div class="container">

        <div class="text-center">
            <h3>Что говорят о нас клиенты</h3>
        </div>

        <div class="row feedback">
            <div class="col-md-3">
                <div class="text-center">
                    <img src="/img/pic1.jpg" class="img-circle">
                    <h4>Кристина, <span>домохозяйка</span></h4>

                    <p>Бывший муж наотрез отказывался выплачивать алименты. Отчаявшись, я пришла за консультацией на ваш сайт.
                    </p>

                    <p>Адвокат Роман дал очень конструктивные советы, а впоследствии представлял мои интересы в суде. Ему удалось выиграть дело и отсудить достойные алименты. Огромное спасибо за помощь!</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="/img/pic2.jpg" class="img-circle">
                    <h4>Светлана, <span>офисный работник</span></h4>

                    <p>Когда меня уволили без предупреждения и выплаты зарплаты, я была шокирована. К сожалению, в нашей стране такое случается нередко, и многие не знают, что делать. Мне повезло – я нашла в Интернете ваш сайт и заказала звонок юриста, который позвонил почти тут же.</p>

                    <p>Внимательно выслушал, поддержал и дал очень содержательную консультацию. Благодаря его советам бывшее начальство выплатило мне компенсацию, и я смогла спокойно найти новую работу.</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="/img/pic4.jpg" class="img-circle">
                    <h4>Виктор, <span>пенсионер</span></h4>

                    <p>Уже не раз обращался к вам за помощью. В нашей стране правонарушения случаются на каждом шагу, поэтому важно знать, у кого спросить совета. Большое спасибо вашим юристам за оперативность и профессионализм. Буду рекомендовать ваш сайт знакомым.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="/img/pic3.jpg" class="img-circle">
                    <h4>Александр, <span>предприниматель</span></h4>

                    <p>
                        У меня были серьезные проблемы при оформлении недвижимости. Дело казалось гиблым, но пошло на лад после того, как я получил полноценную консультацию вашего юриста. Виталий оказался настоящим профессионалом. Он объяснил все нюансы доступным языком и оказал неоценимую поддержку.
                    </p>

                    <p>
                        Спасибо за быстрый и четкий ответ. Если появятся еще какие-нибудь юридические вопросы, буду знать, куда обращаться за помощью.
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="button_block bottom_button">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Тысячам людей уже оказана юридическая помощь. <span>Отправьте вопрос, мы поможем и вам!</span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<div class="bottom_area_wrap">
					<img src="/img/arrow.png" alt="" class="bottom_arrow"/>
					<textarea class="form-control" rows="3" placeholder="Текст вашего вопроса..." id="bottom_val"></textarea>

					<div class="add_button text-center">
					<span class="button_wrap">
						<button class="btn-add btn_bottom" type="button" id="replace_val">
							Задать вопрос юристу
							<i class="icon-question-sign"></i>
						</button>
					</span>
					</div>
				</div>
				<!--bottom_area_wrap-->
			</div>
		</div>
	</div>
</div>


<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="/img/logo-white.png" alt="" class="logo-footer"/>
				<strong>&laquo;Бастион&raquo;</strong>
				<strong>Центр юридической помощи</strong><br>

				<p>Cамая крупная система в области оказания правовой помощи гражданам России, Украины и Белоруссии.</p>

				<p>
					<small>&copy; Разработано в <?php echo date('Y')?> году компанией "Бастион"</small>
				</p>
			</div>
			<div class="col-md-4">
				<p>Центр юридической помощи «Бастион» приглашает к сотрудничеству новых специалистов.<br /><a href="http://jur-group.ru" target="_blank">Вакансии для юристов.</a></p>
			</div>
			<div class="col-md-4">
				<div class="hot-phone">
					<p>Телефоны горячей линии:</p>
					<ul class="contacts-footer">
                        <?php foreach ($config['phones'] as $phone): ?>
                            <li>
                                <h5><?php echo $phone['region']?></h5>
                                <span class="phone"><?php echo $phone['phone']?></span>
                                <span class="working-hours">Пн-Вс (9:00-21:00)</span>
                            </li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="dontLeaveMe">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Наш юрист получил ваш вопрос!</h4>
            </div>
            <div class="modal-body">
	            <div class="text-center">

	                <!--<img src="img/about_2.png" alt=""/>-->
                    <h4 class="modal_form_head">Мы готовы проконсультировать <br/>Вас прямо сейчас.
	                    <span>Укажите телефон и время когда вам удобно получить консультацию.</span></h4>
                        <form data-form="callmeback" class="modal_form" data-next-step="finish" data-target="LEAD" data-send-lead="true" data-callback="modal">
                            <input type="hidden" data-form-field="first_last_name" data-necessary="true" value="Без имени"/>
					            <div class="form-group">
						            <label for="modal_time">В какое время вам перезвонить?</label>
						            <select class="form-control" id="modal_time" data-form-field="time" data-necessary="true" data-form-field-desc="Перезвоните мне">
							            <option>Прямо сейчас</option>
							            <option>9:00 - 12:00</option>
							            <option>12:00 - 15:00</option>
							            <option>15:00 - 18:00</option>
							            <option>18:00 - 21:00</option>
						            </select>
					            </div>
								<div class="form-group">
									<label for="modal_phone">Укажите ваш телефон</label>
									<input type="text" class="form-control" id="modal_phone" placeholder="Ваш номер*" data-form-field="phone" data-necessary="true">
								</div>
					            <div class="form-group">
						            <label for="modal_city">Из какого вы города?</label>
						            <input type="text" class="form-control" id="modal_city" placeholder="Ваш город*" data-form-field="region" data-necessary="true" data-geo-location="true">
					            </div>
			                    <div class="form-group form_group_button">
						            <button type="submit" data-form-submit="true" class="btn-add btn_bottom">
							            Отправить &rarr;
						            </button>
			                     </div>
		                </form>
	            </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Выберите, пожалуйста, что Вас интересует</h4>
			</div>
			<div class="modal-body">
				<ul class="category_select">
					<li>
						<a href="#" id="modalTab1">
							<img src="/img/modal_img/modal_chat.png" alt=""/>
							Консультация <br/>с юристом
						</a>
					</li>
					<li>
						<a href="#" id="modalTab2">
							<img src="/img/modal_img/modal_phone.png" alt=""/>
							Консультация <br/>по телефону
						</a>
					</li>
					<li>
						<a href="#" id="modalTab3">
							<img src="/img/modal_img/modal_case.png" alt=""/>
							Услуги для <br/>юридических лиц
						</a>
					</li>
					<li>
						<a href="#" id="modalTab4">
							<img src="/img/modal_img/modal_rating.png" alt=""/>
							Лучшие юристы <br/>в вашем городе!
						</a>
					</li>
					<li>
						<a href="#" id="modalTab5">
							<img src="/img/modal_img/modal_shield.png" alt=""/>
							Вы нарушили закон? <br/>Защитим ваши интересы
						</a>
					</li>
					<li>
						<a href="#" id="modalTab6">
							<img src="/img/modal_img/modal_wallet.png" alt=""/>
							Ваши права были нарушены? Возместим ущерб!
						</a>
					</li>
					<li>
						<a href="#" id="modalTab7">
							<img src="/img/modal_img/modal_file.png" alt=""/>
							Хотите составить иск, <br/>жалобу, заявление?
						</a>
					</li>
					<li>
						<a href="#" id="modalTab8">
							<img src="/img/modal_img/modal_face.png" alt=""/>
							Сомневаетесь в законности ваших действий?
						</a>
					</li>
					<li>
						<a href="#" id="modalTab9">
							<img src="/img/modal_img/modal_vesi.png" alt=""/>
							Как оспорить сделку, <br/>договор, решение суда?
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>




<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="/js/jquery.geocomplete.min.js"></script>
<script src="/js/jquery.jcarousellite.min.js"></script>

<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="/js/jquery.cookie.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/lead.js"></script>-->
<script src="/js/leadia.form.js"></script>
<script src="/js/main.js"></script>

<script type="text/javascript">
    var thank_you_url = '/thank_you.php';
</script>

</body>
</html>