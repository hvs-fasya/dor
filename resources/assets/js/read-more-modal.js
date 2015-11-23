$(document).ready(function () {

    //Рандомные лица юристов и пользователей
    function pickRandomProperty(obj) {
        var result;
        var count = 0;
        for (var prop in obj)
            if (Math.random() < 1 / ++count)
                result = prop;
        return result;
    }

    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function random_user_face() {
        var curSex = pickRandomProperty(fakefaces);
        var curPerson = randomIntFromInterval(0, fakefaces[curSex].length - 1);
        $('.modal_user_face2').attr('src', '/img/avatars' + fakefaces[curSex][curPerson].face);
        $('.modal_user_name2').text(fakefaces[curSex][curPerson].name);

        var cur2Sex = pickRandomProperty(fakefaces);
        var cur2Person = randomIntFromInterval(0, fakefaces[cur2Sex].length - 1);
        $('.modal_user_face3').attr('src', '/img/avatars' + fakefaces[cur2Sex][cur2Person].face);
        $('.modal_user_name3').text(fakefaces[curSex][cur2Person].name);

        var curWMSex = pickRandomProperty(jurfakeFaces);
        var curJurPerson = randomIntFromInterval(0, jurfakeFaces[curWMSex].length - 1);
        $('.modal_jurist_face').attr('src', '/img' + jurfakeFaces[curWMSex][curJurPerson].face);
        $('.modal_jurist_name').text(jurfakeFaces[curWMSex][curJurPerson].name);
    }

    //Генерация контента при подробнее
    $('.read_more').on('click', function (e) {
        var name_user = $(this).parents('.user-question-list-item').find('.user-question-list-item-name').text();
        var name_question = $(this).parents('.user-question-list-item').find('.user-question-list-item-text-question').text();
        var img_user = $(this).parents('.user-question-list-item').find('.user-question-list-item-avatar').attr('src');
        var best_answer = $(this).parents('.user-question-list-item').find('.best_answer_u').text();
        var last_answer = $(this).parents('.user-question-list-item').find('.last_answer_u').text();

        random_user_face();

        $('#myModal').find('.modal_user_ask').html(name_question);
        $('#myModal').find('.modal_user_name').html(name_user);
        $('#myModal').find('.modal_user_face').attr('src', img_user);
        $('#myModal').find('#doube_answer').css('display', 'block');
        $('#myModal').find('.fa-star').removeClass('orange');

        if (best_answer == '') {
            $('#myModal').find('.modal_best_answer').html(last_answer);
            $('#myModal').find('#double_answer').css('display', 'none');
        }
        else {
            $('#myModal').find('.modal_best_answer').html(best_answer);
            $('#myModal').find('.modal_last_answer').html(last_answer);
            if (last_answer == '') {
                $('#myModal').find('#double_answer').css('display', 'none');
            }
        }

        var starsNum = randomIntFromInterval(4, 5);
        var stars2Num = randomIntFromInterval(1, 4);
        $('.stars > i.fa:lt(' + starsNum + ')').addClass('orange');
        $('.stars_2 > i.fa:lt(' + stars2Num + ')').addClass('orange');
    });

    //Нестандартный скролл
    $('#myModal').find('.modal-body').mCustomScrollbar({
        axis:"y", // vertical and horizontal scrollbar
        theme:"dark-2"
    });
    
});
