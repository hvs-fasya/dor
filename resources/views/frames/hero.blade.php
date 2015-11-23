<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/application.css" rel="stylesheet">
    <link href="/css/iframe.css" rel="stylesheet">
    <link rel="stylesheet" href="/js/jquery-counter/jquery.counter-analog.css"/>
    <link rel="stylesheet" href="/js/jquery-counter/jquery.counter-analog2.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>

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
</section>

@include('_partials.hero.internal')

@include('_partials.info')

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

@yield('javascript')

</body>
</html>