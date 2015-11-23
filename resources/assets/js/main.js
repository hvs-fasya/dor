

function genCount() {
    var def = 460152;
    var ts = 1379591528;
    var ti = new Date().getTime();
    var tsi = parseInt(ti.toString().substring(0, 10));

    var rand = 5 + Math.floor(Math.random() * 10);

    var ta = def + parseInt((tsi - ts) / 5);
    jQuery('.counter').text(ta);
}

function step1Callback(){

    console.log('step one callback');

    //var leaveModalTimer = setTimeout(function(){

     //   console.log('timer');
        //var cookie = jQuery.cookie('show_modal');
        /*if (evt.toElement == null && evt.relatedTarget == null && window.my<50 && typeof(cookie) == 'undefined' && cookie != 'false' && !window.lead) {
             jQuery('#dontLeaveMe').modal('show');*/
        //}
       /* if (typeof(cookie) == 'undefined' && cookie != 'false'){
            jQuery('#dontLeaveMe').modal('show');
        }*/

        //jQuery('#dontLeaveMe').on('hide.bs.modal', function (e) {
         //   jQuery.cookie('show_modal', 'false');
        //});

   // }, 3000);

    window.my = 0;

    jQuery(document).mousemove(function(e){
        window.my = e.pageY - window.scrollY;
    });

    window.onmouseout = function(evt){
        var cookie = jQuery.cookie('show_modal');
        if (evt.toElement == null && evt.relatedTarget == null && window.my<50 && typeof(cookie) == 'undefined' && cookie != 'false' && !window.lead) {
            jQuery('#dontLeaveMe').modal('show');
        }

        jQuery('#dontLeaveMe').on('hide.bs.modal', function (e) {
            jQuery.cookie('show_modal', 'false');
        })
    }
}

function modalCallback(){
    jQuery('#dontLeaveMe').modal('hide');
}

function leadCallback(){
    window.lead = true;
    form.goto('finish');
}

function afterAjaxLoadFormHandler() {
    $('.city-input').addGeolocation();
}

jQuery(document).ready(function () {

    $('#free_quest').focus();

    var form = new LeadiaForm({
        url: '/lead.php',
        success: function (data) {
            console.log(data);
            form.goto('finish');
            jQuery('[data-toggle="tab"]').removeAttr('data-toggle');
        },
        callbacks: {
            'step1': step1Callback,
            'modal': modalCallback,
            'lead-sent': leadCallback
        }
    });

    genCount();
    setInterval(genCount, 6478);

    jQuery(document).on('keyup', '.city-input', function () {
        if (jQuery(this).val().toLowerCase() == 'москва') {
            jQuery('[data-form-field="district"]').removeAttr('disabled');
        }
    });

    jQuery(document).on('click', '.modal-about', function () {
        jQuery('#about').modal('show');
    });

    jQuery(document).on('click', '.do-consult', function () {
        var text = jQuery(this).data('text');
        var textarea = jQuery('#consult .description');
        textarea.val(text);
        jQuery('#form-tabs a[href="#consult"]').tab('show');
        jQuery('html, body').animate({
            scrollTop: 0
        }, 200);
    });

    jQuery(document).on('click', '.tab-control', function (e) {
        e.preventDefault();
        jQuery('.navbar-static-top li').removeClass('active');
        jQuery(this).parent().addClass('active');
        var tab = jQuery(this).attr('href');
        console.log(tab);
        jQuery('#form-tabs a[href="' + tab + '"]').tab('show');
        jQuery('html, body').animate({
            scrollTop: 0
        }, 200);
    });


    jQuery(document).on('click', '.wrong', function (e) {
        jQuery(this).hide();
        var cityinput = jQuery('.city-input');
        cityinput.removeAttr('disabled');
        cityinput.val('');
    });


    /*last_tab*/
    $('#question').prop('disabled', true);
    $('.question').hide();
    $(document).on('change', '#category', function () {
        $('#question').children('option').show();
        var currentCategory = $(this).children('option:selected').attr('class');
        $('#question').prop('selectedIndex', 0);
        if (currentCategory == 'init_option') {
            $('#question').prop('disabled', true)
        } else {
            $('#question').prop('disabled', false);
            var needQuestions = $('#question_all').children('option').filter('.' + currentCategory).clone();
            $('#question').html(needQuestions)
            //console.log(needQuestions)
        }
        if (currentCategory == 'custom_question') {
            jQuery('#form-tabs a[href="#consult"]').tab('show');
            jQuery('#category option').removeAttr('selected');
            jQuery('#category option:first-child').attr('selected', 'selected');
            jQuery('#question').attr('disabled', 'disabled');
            //$('#question, #category, .category_title, .question_title').hide();
            //$('.question').show();
            //$('.question_title').text('Задайте свой вопрос:')
        }
    })


    $('#free_consult a').on('click', function () {
        $('#free_quest').focus();
    })


    //Scrolling to Main Form
    $('#quest_jurist, #call_jurist').on('click',function(e){
        e.preventDefault();
        $("html, body").animate({ scrollTop: 135 }, 1000);
        $('#form-tabs').find('li').removeClass('active');
        $('#form-tabs').children('li.consult').addClass('active');
        //$('.tab-pane').removeClass('active');
        $('#consult').addClass('active');
        $('#free_quest').focus();
    });

    //Scrolling to Main Form (second_tab)
/*    $('#call_jurist').on('click',function(e){
        e.preventDefault();
        $("html, body").animate({ scrollTop: 135 }, 1000);
        $('#form-tabs').find('li').removeClass('active');
        $('#form-tabs').children('li.callmeback').addClass('active');
        $('.tab-pane').removeClass('active');
        $('#callmeback').addClass('active');
        $('#free_quest').focus();

    });*/

    //Replacing the Main form area
    $('#replace_val').on('click', function(){
        var bottomValue = $('#bottom_val').val();
        $("html, body").animate({ scrollTop: 135 }, 1000);
        $('#form-tabs').find('li').removeClass('active');
        $('#form-tabs').children('li.consult').addClass('active');
        //$('.tab-pane').removeClass('active');
        $('#consult').addClass('active');
        $('#free_quest').val(bottomValue).focus();
    });



// setTimeout(function(){
//     $('#questionModal').modal('show');
// }, 1000);


    $('#modalTab1').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab1"]').click();
    })

    $('#modalTab2').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab2"]').click();
    })

    $('#modalTab3').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab3"]').click();
    })

    $('#modalTab4').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab4"]').click();
    })

    $('#modalTab5').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab5"]').click();
    })

    $('#modalTab6').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab6"]').click();
    })

    $('#modalTab7').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab7"]').click();
    })

    $('#modalTab8').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab8"]').click();
    })

    $('#modalTab9').on('click', function(){
        $('#questionModal').modal('hide');
        $('#question_tabs .tab_list').children('li').find('a[href="#tab9"]').click();
    })


    // Автокомплит для регионов для Ajax
    $.fn.addGeolocation = function () {
        this.geocomplete({country: "RU", types: ["(cities)"]}).bind('geocode:result',
        function (event, result) {
            if ($.trim(result.name) === '')
                $('.city-input').val('Москва');
            else {
                $('.city-input').val(result.name);
            }
        });
    };

    // Автокомплит для регионов
    //var geocomplete = $('.city-input').geocomplete({
    //    country: "RU",
    //    types: ["(cities)"]
    //});

    //geocomplete.bind('geocode:result',
    //    function (event, result) {
    //        if ($.trim(result.name) === '')
    //            $('.city-input').val('Москва');
    //        else {
    //            $('.city-input').val(result.name);
    //        }
    //});

    $('#myCarousel').carousel({
        interval: 10000
    });

    $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

     /*   if (next.next().length>0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }*/
    });

});