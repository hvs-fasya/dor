<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/application.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>

<body data-user-id="<?php echo $config['wmid']?>" data-client-ip="{{ GetUserIp() }}" data-subaccount="<?php echo isset($_GET['sub']) ? strip_tags($_GET['sub']) : '' ?>">

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="/" class="header_logo">
                    <img src="/img/logo.jpg" alt="" class="img-responsive"/>
                </a>
            </div>

            <div class="col-lg-9">
                <ul class="header_list">
                    <li>
                        <div class="header_head">Консультация с <br/> юристом по телефону</div>
                    </li>
                    <li>
                        <img src="/img/contact.jpg" alt="" class="number_header"/>
                    </li>
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

@yield('content')

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/logo-white.png" alt="" class="logo-footer"/>
                <strong>&laquo;{{ capitalize_first(config('custom_app.http_host')) }}&raquo;</strong>
                <strong>Центр юридической помощи</strong><br>

                <p>
                    <small>&copy; Разработано в <?php echo date('Y')?> году компанией "{{ config('custom_app.http_host') }}"</small>
                </p>
            </div>
            <div class="col-md-4">
                <p>Центр юридической помощи «{{ config('custom_app.http_host') }}» приглашает к сотрудничеству новых специалистов.<br /></p>
                <p><a href="{{ route('site.sitemap') }}">Карта сайта</a></p>
                <p><a href="{{ route('site.contact') }}">Контакты</a></p>
            </div>
            <div class="col-md-4">
                <div class="hot-phone">
                    <p>Телефоны горячей линии:</p>
                    <ul class="contacts-footer">
                        <li>
                            <img src="/img/contact_futer.jpg" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{--@include('_partials.metrika')--}}
@include('_partials.liveinternet')

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
    var thank_you_url = '/thank';
</script>

<!--<script type="text/javascript" src="http://api.leadiacloud.com/wnew.js?p=lawyer&amp;pos=right&amp;margin=&amp;color=blue&amp;w=6753&amp;ft=fabricform&amp;wc=leadia/default/science"></script>-->
<script type="text/javascript" src="http://api.leadiacloud.com/wnew.js?p=lawyer&pos=right&margin=0&color=blue&w=7590&ft=fabricform&wc=leadia/default/science"></script> 
@yield('javascript')

</body>
</html>
