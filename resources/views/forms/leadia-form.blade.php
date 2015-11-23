<div class="form_out">
    <div class="form_lead">
        <div class="form_wrap">
            <div class="form_body">
                <div class="step_1">
                    <form id="step_1">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form_head">
                                    <img src="img/jurist_online.png" alt=""/>

                                    <h1 class="form_title">
                                        Задайте вопрос юристу,
                                    </h1>

                                    <h2 class="form_subtitle">
                                        и получите бесплатную консультацию в течение 5 минут.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea name="question" class="form-control question_area" rows="3" placeholder="Текст вашего вопроса"></textarea>

                                <div class="text_area_hint">
                                    <span>Пример:</span> Недавно оказал посредническую услугу как
                                    физическое лицо. Но все пошло не так. Я пытался вернуть свои
                                    деньги, но меня обвинили в мошенничестве, и теперь грозят подать
                                    иск в суд или в прокуратуру. Как мне быть в данной ситуации?
                                </div>
                            </div>
                        </div>
                        <div class="row bottom_block">
                            <div class="col-xs-4">
                                <div class="advantage_block">
                                                    <span class="fa-stack fa-lg">
                                                      <i class="fa fa-eye fa-stack-1x"></i>
                                                      <i class="fa fa-ban fa-stack-2x text-danger"></i>
                                                    </span>

                                    <h3 class="advantage_title">Конфиденциально</h3>

                                    <div class="advantage_text">
                                        Все данные будут переданы по защищенному каналу.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="advantage_block">
                                                    <span class="fa-stack fa-lg">
                                                      <i class="fa fa-circle fa-stack-2x"></i>
                                                      <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                                    </span>

                                    <h3 class="advantage_title">Быстро</h3>

                                    <div class="advantage_text">
                                        Заполните форму, и уже через 5 минут с вами свяжется юрист.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="but_nav" id="to_step_2">Задать вопрос
                                    <i class="fa fa-angle-right"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
                <!--step_1-->
                <div class="step_2" style="display:none">
                    <form id="step_2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form_head">
                                    <img src="img/jurist_quest.png" alt=""/>
                                    <h1 class="form_title">
                                        Юрист готов ответить на ваш вопрос!
                                    </h1>
                                    <h2 class="form_subtitle">
                                        Укажите ваши контакты, для того чтоб мы могли с вами
                                        связаться.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="region">Регион</label>
                                    <input name="region" type="text" class="form-control" id="city" placeholder="Ваш город">
                                </div>
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input name="first_last_name" type="text" class="form-control" id="name" placeholder="Сергей Пантелеймонов">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон</label>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="+7 (495) 123-45-67">
                                </div>

                            </div>
                        </div>
                        <div class="row bottom_block">
                            <div class="col-xs-4">
                                <div class="advantage_block">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-eye fa-stack-1x"></i>
                                      <i class="fa fa-ban fa-stack-2x text-danger"></i>
                                    </span>
                                    <h3 class="advantage_title">Конфиденциально</h3>
                                    <div class="advantage_text">
                                        Все данные будут переданы по защищенному каналу.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="advantage_block">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <h3 class="advantage_title">Быстро</h3>
                                    <div class="advantage_text">
                                        Заполните форму, и уже через 5 минут с вами свяжется юрист.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="but_nav" id="to_step_3">Задать вопрос
                                    <i class="fa fa-angle-right"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
                <!--step_2-->
                <div class="step_3" style="display:none">
                    <div class="success_block">
                        <div class="success_block_title">Спасибо, ваша заявка принята!</div>
                        <i class="fa fa-check"></i>

                        <div class="success_block_subtitle">Благодарим за вашу заявку. <br/> Наш
                            специалист обязательно свяжется с вами по
                            <br/>телефону в самое ближайшее время!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>