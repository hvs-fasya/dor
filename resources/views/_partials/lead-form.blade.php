<div class="row form_row">
    <div class="col-xs-4">
        <div class="h4">Как мы работаем?</div>
        <ul class="work_list">
            <li>
                <span>1</span>
                Оставьте вопрос или позвоните нам.
            </li>
            <li>
                <span>2</span>
                Мы перезвоним и бесплатно расскажем как решить проблему.
            </li>
            <li>
                <span>3</span>
                При необходимости изучим документы и начнем работу над Вашим делом.
            </li>
            <li>
                <span>4</span>
                Предоставим полное юридическое сопровождение и выиграем дело!
            </li>
        </ul>
    </div>
    <div class="col-xs-8">
        <div class="form_wrap">
        <div class="form_body">
            <div class="step_1 step active" data-step="1">
                <form action="" data-form="1" data-next-step="2">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form_head">
                                <img src="/assets/img/jurist_online.png" alt=""/>

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
                            <textarea class="form-control question_area" rows="3" placeholder="Текст вашего вопроса" data-form-field="question" data-necessary="true"></textarea>

                            <div class="text_area_hint">
                                <span>Пример:</span> Недавно оказал посредническую услугу как физическое лицо. Но все пошло не так. Я пытался вернуть свои деньги, но меня обвинили в мошенничестве, и теперь грозят подать иск в суд или в прокуратуру. Как мне быть в данной ситуации?
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
                            <button type="submit" class="but_nav" id="send_button">Задать вопрос
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
            <!--step_1-->

            <div class="step_2 step" data-step="2">
                <form action="" data-form="2" data-next-step="finish" data-send-lead="true">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form_head">
                                <img src="/assets/img/jurist_quest.png" alt=""/>

                                <h1 class="form_title">
                                    Юрист готов ответить на ваш вопрос!
                                </h1>

                                <h2 class="form_subtitle">
                                    Укажите ваши контакты, для того чтоб мы могли с вами связаться.
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="region">Регион</label>
                                <input type="text" class="form-control" id="region" placeholder="Ваш город" data-geo-location="true" data-form-field="region" data-necessary="true">
                            </div>
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" placeholder="Сергей Пантелеймонов" data-form-field="first_last_name" data-necessary="true">
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="text" class="form-control" id="phone" placeholder="+7 (495) 123-45-67" data-form-field="phone" data-necessary="true">
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
                            <button type="submit" class="but_nav" id="send_button" data-send-lead="true">Задать вопрос
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>

                    </div>

                </form>
            </div>
            <!--step_2-->

            <div class="step_modal_3 step" data-step="finish">
                <div class="success_message">
                    Спасибо! Ваш вопрос принят, в ближайшее время с вами свяжется наш специалист.
                    <i class="fa fa-check"></i>
                </div>
            </div><!--step_modal_3-->
        </div>
    </div>
    </div>
</div>