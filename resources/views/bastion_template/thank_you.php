<?php require_once "config.php"?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>

<body data-user-id="" data-subaccount="" data-template="lawyer-propiska" data-product="lawyer">



<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="/" class="header_logo">
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

<section id="thank_you">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Спасибо, ваша заявка принята!</h1>
                <h3>Благодарим за вашу заявку. Наш специалист обязательно <br/>
                    свяжется с вами по телефону в самое ближайшее время!</h3>
                <a href="/" class="btn btn-add">Задать другой вопрос юристу <i class="icon-question-sign"></i></a>
            </div>
        </div>
    </div>
</section><!--#thank_you-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/logo-white.png" alt="" class="logo-footer"/>
                <strong>&laquo;Ваш юрист&raquo;</strong>
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

<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="/js/jquery.geocomplete.min.js"></script>
<script src="/js/jquery.jcarousellite.min.js"></script>
<script src="/js/leadia.form.js"></script>
<script src="/js/main.js"></script>


</body>
</html>



