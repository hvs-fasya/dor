<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 23.09.2014
 * Time: 13:07
 */

namespace App\Services;


class FakeUserService {

    /**
     * Файковые пользователи
    */
    protected  static $users = array(
        'userWNames' => array(
            array(
                'name' => 'Оксана Красильникова',
                'face' => '/woman/THIS_IS_SANDYS_ICON_normal.png'
            ),

            array(
                'name' => 'Инга Гордеева',
                'face' => '/woman/776_normal.jpg'
            ),

            array(
                'name' => 'Ирина Самойлова',
                'face' => '/woman/jbwt_normal.jpg'
            ),

            array(
                'name' => 'Юля Князева',
                'face' => '/woman/PB100206_normal.JPG'
            ),

            array(
                'name' => 'Елена Беспалова',
                'face' => '/woman/IMG_1234_normal.JPG'
            ),

            array(
                'name' => 'Инна Уварова',
                'face' => '/woman/DSC04226reb3_normal.jpg'
            ),

            array(
                'name' => 'Катя Шашкова',
                'face' => '/woman/karyn1_normal.jpg'
            ),

            array(
                'name' => 'Екатерина Бобылева',
                'face' => '/woman/w_975c2fa1_normal.jpg'
            ),

            array(
                'name' => 'Анна Доронина',
                'face' => '/woman/12030305_normal.jpg'
            ),

            array(
                'name' => 'Ольга Белозерова',
                'face' => '/woman/____________012_normal.jpg'
            ),

            array(
                'name' => 'Лена Рожкова',
                'face' => '/woman/girls215_normal.gif'
            ),

            array(
                'name' => 'Света Самсонова',
                'face' => '/woman/DSC04226reb3_normal.jpg'
            ),

            array(
                'name' => 'Яна Мясникова',
                'face' => '/woman/74_normal.PNG'
            ),

            array(
                'name' => 'Людмила Лихачева',
                'face' => '/woman/IMG_3240____normal.jpg'
            ),

            array(
                'name' => 'Татьяна Бурова',
                'face' => '/woman/DSC04226reb3_normal.jpg'
            ),

            array(
                'name' => 'Аня Сысоева',
                'face' => '/woman/Shaista1-150x150_normal.png'
            ),


            array("name" => "Надежда Андреева",
                "face" => "/woman/-r7y9mhKG-8.jpg"
            ),
            array("name" => "Лидия Фролова",
                "face" => "/woman/366hfhhfh.jpg"
            ),
            array("name" => "Дарья Виноградова",
                "face" => "/woman/3f34fvxdfgdfgd.jpg"
            ),
            array("name" => "Лиана Осипова",
                "face" => "/woman/3g45g56h5.jpg"
            ),
            array("name" => "Лейла Сидорова",
                "face" => "/woman/3jgsHKJazwU.jpg"
            ),
            array("name" => "Василина Федорова",
                "face" => "/woman/3nYsM6vzc-8.jpg"
            ),
            array("name" => "Милена Андреева",
                "face" => "/woman/4dfd41hf.png"
            ),
            array("name" => "Камилла Михайлова",
                "face" => "/woman/50opgb6f.jpg"
            ),
            array("name" => "Камилла Дмитриева",
                "face" => "/woman/5252fe15g.jpg"
            ),
            array("name" => "Анна Титова",
                "face" => "/woman/534534f3f.jpg"
            ),
            array("name" => "Варвара Васильева",
                "face" => "/woman/5h7667h.jpg"
            ),
            array("name" => "Марина Молчанова",
                "face" => "/woman/63463636gg.jpg"
            ),
            array("name" => "Полина Соколова",
                "face" => "/woman/67h5fdg.jpg"
            ),
            array("name" => "Алиса Егорова",
                "face" => "/woman/6nGqTIfoOx0.jpg"
            ),
            array("name" => "Любовь Киселева",
                "face" => "/woman/6tWsK9APges.jpg"
            ),
            array("name" => "Мирослава Борисова",
                "face" => "/woman/7jj76j6j54.jpg"
            ),
            array("name" => "Евангелина Николаева",
                "face" => "/woman/7jn676h5h.jpg"
            ),
            array("name" => "Кира Ершова",
                "face" => "/woman/A1F6JakrzuY.jpg"
            ),
            array("name" => "Аделина Филиппова",
                "face" => "/woman/aC0XJk1Sudg.jpg"
            ),
            array("name" => "Клавдия Боброва",
                "face" => "/woman/Ah55AK2tcZs.jpg"
            ),
            array("name" => "Инна Медведева",
                "face" => "/woman/Ak05CokXG2M.jpg"
            ),
            array("name" => "Маргарита Фомина",
                "face" => "/woman/ATHHXR8XZ2w.jpg"
            ),
            array("name" => "Нелли Алексеева",
                "face" => "/woman/bSXrnj13EoY.jpg"
            ),
            array("name" => "Алина Дорофеева",
                "face" => "/woman/BtqK3yIW3zk.jpg"
            ),
            array("name" => "Ника Дмитриева",
                "face" => "/woman/cc37.jpg"
            ),
            array("name" => "Алиса Тарасова",
                "face" => "/woman/CN256ugMa4c.jpg"
            ),
            array("name" => "Мадина Романова",
                "face" => "/woman/dm9sWmUEkho.jpg"
            ),
            array("name" => "Вероника Алексеева",
                "face" => "/woman/dmyYDTwQVAo.jpg"
            ),
            array("name" => "Лилия Большакова",
                "face" => "/woman/dqLCzhTtAj4.jpg"
            ),
            array("name" => "Амелия Петрова",
                "face" => "/woman/d_2a155be8.jpg"
            ),
            array("name" => "Милана Степанова",
                "face" => "/woman/d_5e6562c9.jpg"
            ),
            array("name" => "Лина Михайлова",
                "face" => "/woman/d_5f93bea4.jpg"
            ),
            array("name" => "Марина Попова",
                "face" => "/woman/d_6556df9c.jpg"
            ),
            array("name" => "Полина Герасимова",
                "face" => "/woman/d_9364756d.jpg"
            ),
            array("name" => "Евгения Беляева",
                "face" => "/woman/d_97d33d5e.jpg"
            ),
            array("name" => "Надежда Дмитриева",
                "face" => "/woman/d_a334cf07.jpg"
            ),
            array("name" => "Илона Волкова",
                "face" => "/woman/d_bb913bc0.jpg"
            ),
            array("name" => "Лариса Герасимова",
                "face" => "/woman/d_c295807c.jpg"
            ),
            array("name" => "Дарья Орлова",
                "face" => "/woman/d_cb2e1eaa.jpg"
            ),
            array("name" => "Тамара Васильева",
                "face" => "/woman/d_cf0451fc.jpg"
            ),
            array("name" => "Наталья Маркова",
                "face" => "/woman/d_d393ded1.jpg"
            ),
            array("name" => "Василиса Суханова",
                "face" => "/woman/d_d7bbf735.jpg"
            ),
            array("name" => "Евгения Степанова",
                "face" => "/woman/Eg5RLM39WKI.jpg"
            ),
            array("name" => "Амина Медведева",
                "face" => "/woman/eqc4.png"
            ),
            array("name" => "Нина Маркова",
                "face" => "/woman/EyIeV-HkxtM.jpg"
            ),
            array("name" => "Агата Ковалёва",
                "face" => "/woman/e_6tSILNCto.jpg"
            ),
            array("name" => "Анна Лазарева",
                "face" => "/woman/f334f3y3y3y.jpg"
            ),
            array("name" => "Регина Павлова",
                "face" => "/woman/ffsd5omi88841.jpg"
            ),
            array("name" => "Амелия Казакова",
                "face" => "/woman/FthYsTGMIck.jpg"
            ),
            array("name" => "Оксана Полякова",
                "face" => "/woman/g334g34636.jpg"
            ),
            array("name" => "Анастасия Комарова",
                "face" => "/woman/g34g45g2dgd32.jpg"
            ),
            array("name" => "Алла Баранова",
                "face" => "/woman/g45g452f2.jpg"
            ),
            array("name" => "Яна Веселова",
                "face" => "/woman/g45g45gdgdg.jpg"
            ),
            array("name" => "Вероника Маркова",
                "face" => "/woman/g4gdfbfd3r226.jpg"
            ),
            array("name" => "Аида Казакова",
                "face" => "/woman/g5f93jed784.jpg"
            ),
            array("name" => "Алиса Максимова",
                "face" => "/woman/g5fdw23512sgd.jpg"
            ),
            array("name" => "Полина Путина",
                "face" => "/woman/h4h56h56h53.jpg"
            ),
            array("name" => "Вера Никифорова",
                "face" => "/woman/hgjSIa7MlUo.jpg"
            ),
            array("name" => "Олеся Титова",
                "face" => "/woman/hj48fhj83uyh3huyt2.jpg"
            ),
            array("name" => "Ирина Боброва",
                "face" => "/woman/Ho3Nf2ovN-U.jpg"
            ),
            array("name" => "Лилия Волкова",
                "face" => "/woman/IkRlXKfd6mQ.jpg"
            ),
            array("name" => "Инна Богданова",
                "face" => "/woman/IseayxkbgBA.jpg"
            ),
            array("name" => "Тамара Боброва",
                "face" => "/woman/iTIjYgnLDqo.jpg"
            ),
            array("name" => "Ева Фомина",
                "face" => "/woman/j78j7erdfhf.jpg"
            ),
            array("name" => "Злата Комарова",
                "face" => "/woman/jMpKlamfnNA.jpg"
            ),
            array("name" => "Лия Комарова",
                "face" => "/woman/Jqs8U6GUxzw.jpg"
            ),
            array("name" => "Ярослава Коновалова",
                "face" => "/woman/Kbn4Biw5iL0.jpg"
            ),
            array("name" => "Агата Ефимова",
                "face" => "/woman/kwdM4igffa8.jpg"
            ),
            array("name" => "Мила Пугачева",
                "face" => "/woman/L7JqHbSICok.jpg"
            ),
            array("name" => "Таисия Коновалова",
                "face" => "/woman/m2VVyvFXuko.jpg"
            ),
            array("name" => "Виктория Фролова",
                "face" => "/woman/n6n55n5.jpg"
            ),
            array("name" => "Ольга Пономарева",
                "face" => "/woman/NjcGPPOzRr0.jpg"
            ),
            array("name" => "Ариана Полякова",
                "face" => "/woman/NrdmmUI3ICw.jpg"
            ),
            array("name" => "Амелия Попова",
                "face" => "/woman/ntqgEuq0ok4.jpg"
            ),
            array("name" => "Нелли Комарова",
                "face" => "/woman/NwvoS9ol93A.jpg"
            ),
            array("name" => "Валерия Громова",
                "face" => "/woman/oflY73G7VNg.jpg"
            ),
            array("name" => "Владислава Маркова",
                "face" => "/woman/oiSijNeXNTs.jpg"
            ),
            array("name" => "Любовь Васильева",
                "face" => "/woman/oR4vi9Ip18s.jpg"
            ),
            array("name" => "Виолетта Тарасова",
                "face" => "/woman/OyFfMo0o5Go.jpg"
            ),
            array("name" => "Ника Боброва",
                "face" => "/woman/p85r.jpg"
            ),
            array("name" => "Эвелина Козлова",
                "face" => "/woman/q0Dr80fKSuc.jpg"
            ),
            array("name" => "Олеся Белоусова",
                "face" => "/woman/QkX0hAW0Xcs.jpg"
            ),
            array("name" => "Амина Пугачева",
                "face" => "/woman/qvAXr278u7M.jpg"
            ),
            array("name" => "Олеся Егорова",
                "face" => "/woman/qZQwqHHFTEo.jpg"
            ),
            array("name" => "Юлия Зайцева",
                "face" => "/woman/R6WJhN_RvkE.jpg"
            ),
            array("name" => "Лина Киселева",
                "face" => "/woman/t34g34g45g45g4.jpg"
            ),
            array("name" => "Любовь Федотова",
                "face" => "/woman/TW1Fbe4CB6g.jpg"
            ),
            array("name" => "Жанна Королева",
                "face" => "/woman/v5g045w.jpg"
            ),
            array("name" => "Нина Филиппова",
                "face" => "/woman/vfgfgc75.jpg"
            ),
            array("name" => "Владислава Шестакова",
                "face" => "/woman/Vxk-ydL-zgU.jpg"
            ),
            array("name" => "Эвелина Герасимова",
                "face" => "/woman/X2mebyyD8Rg.jpg"
            ),
            array("name" => "Валентина Сидорова",
                "face" => "/woman/xc4fd46gfdh.jpg"
            ),
            array("name" => "Наталья Лазарева",
                "face" => "/woman/xc4rff2q.jpg"
            ),
            array("name" => "Светлана Шестакова",
                "face" => "/woman/y6gf2462.jpg"
            ),
            array("name" => "Галина Ковалёва",
                "face" => "/woman/Y7OKFENCD24.jpg"
            ),
            array("name" => "Виолетта Коновалова",
                "face" => "/woman/ycrUd44ZLhs.jpg"
            ),
            array("name" => "Ева Медведева",
                "face" => "/woman/YP-blwhoP_c.jpg"
            ),
            array("name" => "Агния Анисимова",
                "face" => "/woman/yPcl7IAFsCQ.jpg"
            ),
            array("name" => "Марина Медведева",
                "face" => "/woman/YYByBRWLJ9g.jpg"
            ),
            array("name" => "Анна Большакова",
                "face" => "/woman/z9LZqgsMp5E.jpg"
            ),
            array("name" => "Агата Панина",
                "face" => "/woman/ZLTfzo0SVdI.jpg"
            )
        ),
        'userMNames' => array(
            array(
                'name' => 'Егор Устинов',
                'face' => 'image_normal.jpg'
            ),

            array(
                'name' => 'Руслан Вишняков',
                'face' => '/man/samara-face-512_normal.jpg'
            ),

            array(
                'name' => 'Толик Евсеев',
                'face' => '/man/y_6f837990_normal.jpg'
            ),

            array(
                'name' => 'Миша Лаврентьев',
                'face' => '/man/face_normal.jpg'
            ),

            array(
                'name' => 'Михаил Брагин',
                'face' => '/man/566838602_normal.png'
            ),

            array(
                'name' => 'Дмитрий Константинов',
                'face' => '/man/icon-twitter_normal.jpg'
            ),

            array(
                'name' => 'Павел Корнилов',
                'face' => '/man/565287663_normal.png'
            ),

            array(
                'name' => 'Митя Авдеев',
                'face' => '/man/joe_mullally1_normal.jpg'
            ),

            array(
                'name' => 'Шура Зыков',
                'face' => '/man/tipton_normal.jpg'
            ),

            array(
                'name' => 'Сергей Бирюков',
                'face' => '/man/0628sorkin_normal.jpg'
            ),

            array(
                'name' => 'Анатолий Шарапов',
                'face' => '/man/red_normal.JPG'
            ),

            array(
                'name' => 'Саша Никонов',
                'face' => '/man/universeofbiebs_normal.JPG'
            ),

            array(
                'name' => 'Олег Щукин',
                'face' => '/man/tipton_normal.jpg'
            ),

            array(
                'name' => 'Константин Дьячков',
                'face' => '/man/ian_listens_thumb_normal.jpg'
            ),

            array(
                'name' => 'Дмитрий Одинцов',
                'face' => '/man/ACS_Profile_normal.jpg'
            ),


            array(
                'name' => 'Олег Сазонов',
                'face' => '/man/b_w_normal.jpg'
            ),


            array(
                'name' => 'Антон Якушев',
                'face' => '/man/olllie_normal.jpg'
            ),

            array("name" => "Яков Тимофеев",
                "face" => "/man/-6k2lfBNtJk.jpg"
            ),
            array("name" => "Ростислав Богданов",
                "face" => "/man/0khhxh8DNAI.jpg"
            ),
            array("name" => "Захар Фёдоров",
                "face" => "/man/1-BEoze-xtU.jpg"
            ),
            array("name" => "Савва Захаров",
                "face" => "/man/1gwSA3Qc6lI.jpg"
            ),
            array("name" => "Ян Кузнецов",
                "face" => "/man/2OYtcj1LosA.jpg"
            ),
            array("name" => "Георгий Ильин",
                "face" => "/man/2Pkrucc2uXw.jpg"
            ),
            array("name" => "Богдан Павлов",
                "face" => "/man/346346346gdfgd5.jpg"
            ),
            array("name" => "Руслан Павлов",
                "face" => "/man/4141.jpg"
            ),
            array("name" => "Богдан Иванов",
                "face" => "/man/4pmwPK84Ok0.jpg"
            ),
            array("name" => "Дамир Виноградов",
                "face" => "/man/4tujghjk5h.jpg"
            ),
            array("name" => "Юрий Морозов",
                "face" => "/man/4ulffpahamatov.jpg"
            ),
            array("name" => "Артемий Фёдоров",
                "face" => "/man/4ZU5KFGh3Us.jpg"
            ),
            array("name" => "Антон Ильин",
                "face" => "/man/53453dfffsdfg.jpg"
            ),
            array("name" => "Алексей Соловьёв",
                "face" => "/man/65d09Ky39Ow.jpg"
            ),
            array("name" => "Аким Кузьмин",
                "face" => "/man/69nLe2puRSU.jpg"
            ),
            array("name" => "Камиль Андреев",
                "face" => "/man/6BYbjc4MWTA.jpg"
            ),
            array("name" => "Всеволод Никитин",
                "face" => "/man/87hfgdffxdd3ik2l.jpg"
            ),
            array("name" => "Глеб Михайлов",
                "face" => "/man/8_jr8d9ADJk.jpg"
            ),
            array("name" => "Игнат Семёнов",
                "face" => "/man/9k65y456346347636.jpg"
            ),
            array("name" => "Сергей Сергеев",
                "face" => "/man/AFKB-W70jps.jpg"
            ),
            array("name" => "Тимофей Соколов",
                "face" => "/man/At2qo7MazJk.jpg"
            ),
            array("name" => "Марат Богданов",
                "face" => "/man/Az-U6bC6jTo.jpg"
            ),
            array("name" => "Рамиль Богданов",
                "face" => "/man/bft44f3fsdgdfg.jpg"
            ),
            array("name" => "Георгий Андреев",
                "face" => "/man/c2jh6n67dsfgd.jpg"
            ),
            array("name" => "Макар Яковлев",
                "face" => "/man/c4u9gdfm3.png"
            ),
            array("name" => "Геннадий Степанов",
                "face" => "/man/cNspbCgU3C0.jpg"
            ),
            array("name" => "Айрат Дмитриев",
                "face" => "/man/csdcsdcv3252fs.jpg"
            ),
            array("name" => "Борис Смирнов",
                "face" => "/man/d-9Rf6lhYQA.jpg"
            ),
            array("name" => "Владислав Волков",
                "face" => "/man/d4ifior.jpg"
            ),
            array("name" => "Дмитрий Афанасьев",
                "face" => "/man/Dd-z9pnvsuo.jpg"
            ),
            array("name" => "Марат Степанов",
                "face" => "/man/ddd440943h782.jpg"
            ),
            array("name" => "Марсель Герасимов",
                "face" => "/man/df4ds2315g.jpg"
            ),
            array("name" => "Святослав Новиков",
                "face" => "/man/DR5OUwvIvjA.jpg"
            ),
            array("name" => "Василий Петров",
                "face" => "/man/d_0c945205.jpg"
            ),
            array("name" => "Петр Тимофеев",
                "face" => "/man/d_153153ba.jpg"
            ),
            array("name" => "Гордей Новиков",
                "face" => "/man/d_1ba86453.jpg"
            ),
            array("name" => "Демид Алексеев",
                "face" => "/man/d_1f18e869.jpg"
            ),
            array("name" => "Роберт Степанов",
                "face" => "/man/d_1f299d4d.jpg"
            ),
            array("name" => "Ростислав Николаев",
                "face" => "/man/d_21dd1381.jpg"
            ),
            array("name" => "Ярослав Филиппов",
                "face" => "/man/d_35e99983.jpg"
            ),
            array("name" => "Рустам Матвеев",
                "face" => "/man/d_377651b3.jpg"
            ),
            array("name" => "Глеб Матвеев",
                "face" => "/man/d_3c916147.jpg"
            ),
            array("name" => "Дмитрий Матвеев",
                "face" => "/man/d_3d2cb912.jpg"
            ),
            array("name" => "Григорий Андреев",
                "face" => "/man/d_3fcc8150.jpg"
            ),
            array("name" => "Филипп Соловьёв",
                "face" => "/man/d_44ef07aa.jpg"
            ),
            array("name" => "Павел Степанов",
                "face" => "/man/d_4ad0d26b.jpg"
            ),
            array("name" => "Роберт Фёдоров",
                "face" => "/man/d_573bb6d0.jpg"
            ),
            array("name" => "Мирослав Иванов",
                "face" => "/man/d_666bd68a.jpg"
            ),
            array("name" => "Кирилл Морозов",
                "face" => "/man/d_68d7c5bb.jpg"
            ),
            array("name" => "Борис Богданов",
                "face" => "/man/d_693669e1.jpg"
            ),
            array("name" => "Альберт Новиков",
                "face" => "/man/d_6c2ea284.jpg"
            ),
            array("name" => "Кирилл Андреев",
                "face" => "/man/d_6fbc33e1.jpg"
            ),
            array("name" => "Гордей Захаров",
                "face" => "/man/d_70936285.jpg"
            ),
            array("name" => "Марсель Егоров",
                "face" => "/man/d_8db864e0.jpg"
            ),
            array("name" => "Аким Захаров",
                "face" => "/man/d_9d6a0f29.jpg"
            ),
            array("name" => "Илья Григорьев",
                "face" => "/man/d_a9facabe.jpg"
            ),
            array("name" => "Анатолий Иванов",
                "face" => "/man/d_aa3aa9bd.jpg"
            ),
            array("name" => "Вадим Иванов",
                "face" => "/man/d_d2fed41f.jpg"
            ),
            array("name" => "Герман Афанасьев",
                "face" => "/man/d_d77988d9.jpg"
            ),
            array("name" => "Роберт Алексеев",
                "face" => "/man/d_d7ed85d6.jpg"
            ),
            array("name" => "Георгий Егоров",
                "face" => "/man/d_e391f7c7.jpg"
            ),
            array("name" => "Ярослав Богданов",
                "face" => "/man/d_e8783598.jpg"
            ),
            array("name" => "Марк Петров",
                "face" => "/man/d_fb107f7f.jpg"
            ),
            array("name" => "Роман Егоров",
                "face" => "/man/eLcyK-wOz54.jpg"
            ),
            array("name" => "Рустам Соловьёв",
                "face" => "/man/eOyUDs5-Dgs.jpg"
            ),
            array("name" => "Елисей Григорьев",
                "face" => "/man/esQSYTc--fg.jpg"
            ),
            array("name" => "Гордей Лебедев",
                "face" => "/man/f82f.png"
            ),
            array("name" => "Филипп Герасимов",
                "face" => "/man/fc24fgssg135t.jpg"
            ),
            array("name" => "Евгений Соколов",
                "face" => "/man/fddfb4ffwsfs.jpg"
            ),
            array("name" => "Ратмир Новиков",
                "face" => "/man/fdfdbfbfgb435345346gdfhfghj.jpg"
            ),
            array("name" => "Артемий Иванов",
                "face" => "/man/Fg_MUjDlUmo.jpg"
            ),
            array("name" => "Лев Александров",
                "face" => "/man/fsdvddfvd1hfghfjghjgdgdfg.jpg"
            ),
            array("name" => "Леонид Филиппов",
                "face" => "/man/FvBC4NJVFYc.jpg"
            ),
            array("name" => "Игнат Сергеев",
                "face" => "/man/gdfg36jghjghk.jpg"
            ),
            array("name" => "Алексей Морозов",
                "face" => "/man/gegquYHMOzw.jpg"
            ),
            array("name" => "Матвей Орлов",
                "face" => "/man/gg6h7jd.jpg"
            ),
            array("name" => "Валентин Матвеев",
                "face" => "/man/GIe2k2wW1KM.jpg"
            ),
            array("name" => "Елисей Николаев",
                "face" => "/man/h4hkj768jgjk.jpg"
            ),
            array("name" => "Демьян Сергеев",
                "face" => "/man/heuli5gCjtQ.jpg"
            ),
            array("name" => "Тимофей Козлов",
                "face" => "/man/hfgh4fv34v3g56fh.jpg"
            ),
            array("name" => "Макар Лебедев",
                "face" => "/man/IhfQAD8SaMI.jpg"
            ),
            array("name" => "Захар Тимофеев",
                "face" => "/man/IZqtN94Uvfo.jpg"
            ),
            array("name" => "Петр Соколов",
                "face" => "/man/JARb9qkhL9Q.jpg"
            ),
            array("name" => "Антон Смирнов",
                "face" => "/man/jjX1Oy4QzYE.jpg"
            ),
            array("name" => "Давид Сергеев",
                "face" => "/man/jurspds.jpg"
            ),
            array("name" => "Андрей Михайлов",
                "face" => "/man/k4om5odk5m0.jpg"
            ),
            array("name" => "Герман Соколов",
                "face" => "/man/k501JWekaqE.jpg"
            ),
            array("name" => "Геннадий Волков",
                "face" => "/man/kuy5hfghfh45.jpg"
            ),
            array("name" => "Валентин Степанов",
                "face" => "/man/M7cxh0iF6Zk.jpg"
            ),
            array("name" => "Всеволод Степанов",
                "face" => "/man/mYyYm_9O8c8.jpg"
            ),
            array("name" => "Всеволод Герасимов",
                "face" => "/man/NDXa1rGEHaU.jpg"
            ),
            array("name" => "Виктор Александров",
                "face" => "/man/nLzbXvJMnXw.jpg"
            ),
            array("name" => "Камиль Морозов",
                "face" => "/man/nZ8HI09J2nA.jpg"
            ),
            array("name" => "Александр Попов",
                "face" => "/man/o0o4p4fdcn23d.jpg"
            ),
            array("name" => "Роберт Богданов",
                "face" => "/man/P48SoGHXkjQ.jpg"
            ),
            array("name" => "Савва Егоров",
                "face" => "/man/pG2NdLXHnDo.jpg"
            ),
            array("name" => "Роберт Ильин",
                "face" => "/man/r34dds.jpg"
            ),
            array("name" => "Никита Семёнов",
                "face" => "/man/s45f4565g.jpg"
            ),
            array("name" => "Леонид Кузьмин",
                "face" => "/man/sc34d.jpg"
            ),
            array("name" => "Лев Никитин",
                "face" => "/man/sfsdfvd24e1515.jpg"
            ),
            array("name" => "Денис Григорьев",
                "face" => "/man/tertbf2fsg.jpg"
            ),
            array("name" => "Семен Дмитриев",
                "face" => "/man/tgyjGSe1qBo.jpg"
            ),
            array("name" => "Виталий Морозов",
                "face" => "/man/UK9biEWxTQM.jpg"
            ),
            array("name" => "Ростислав Михайлов",
                "face" => "/man/uoC7TOso1Cg.jpg"
            ),
            array("name" => "Александр Семёнов",
                "face" => "/man/uQZyQmoxMbY.jpg"
            ),
            array("name" => "Марсель Васильев",
                "face" => "/man/vfdbfb3r23f43t54hg45.jpg"
            ),
            array("name" => "Эрик Кузнецов",
                "face" => "/man/vFsMn5caZEc.jpg"
            ),
            array("name" => "Тимур Андреев",
                "face" => "/man/vfvd25253gdfgfhfgbn.jpg"
            ),
            array("name" => "Леонид Соловьёв",
                "face" => "/man/vMYi54_8bmQ.jpg"
            ),
            array("name" => "Ильяс Николаев",
                "face" => "/man/VNYLITBPn08.jpg"
            ),
            array("name" => "Георгий Соловьёв",
                "face" => "/man/VrCEAGZgGqI.jpg"
            ),
            array("name" => "Павел Кузьмин",
                "face" => "/man/vv3j4C08tBQ.jpg"
            ),
            array("name" => "Савва Волков",
                "face" => "/man/vWlGpv6HWFk.jpg"
            ),
            array("name" => "Елисей Новиков",
                "face" => "/man/wfUzVLgreZw.jpg"
            ),
            array("name" => "Владимир Петров",
                "face" => "/man/X0_S9iFNKCs.jpg"
            ),
            array("name" => "Степан Михайлов",
                "face" => "/man/XiSZywn0U9w.jpg"
            ),
            array("name" => "Даниил (Данил) Волков",
                "face" => "/man/Y9JGxXa7gYw.jpg"
            ),
            array("name" => "Кирилл Петров",
                "face" => "/man/yTcrfgBsw3k.jpg"
            ),
            array("name" => "Ильяс Петров",
                "face" => "/man/yUYORMWSC3M.jpg"
            ),
            array("name" => "Ратмир Егоров",
                "face" => "/man/z14r4235gy.jpg"
            ),
            array("name" => "Богдан Смирнов",
                "face" => "/man/z2onuyh.jpg"
            ),
            array("name" => "Александр Филиппов",
                "face" => "/man/z355gd4425.jpg"
            ),
        )
    );

    protected static $jurWNames = array(
        array(
            'name' => 'Карпова Елена',
            'face' => '/jurists/11.png'
        ),

        array(
            'name' => 'Сазонова Наталья',
            'face' => '/jurists/12.png'
        ),

        array(
            'name' => 'Крашенинникова Мария',
            'face' => '/jurists/13.png'
        ),

        array(
            'name' => 'Лисовская Тамара',
            'face' => '/jurists/14.png'
        ),

        array(
            'name' => 'Проклова Светлана',
            'face' => '/jurists/15.png'
        ),
    );

    protected  static $jurMNames = array(
        array(
            'name' => 'Проскуряков Михаил',
            'face' => '/jurists/1.png'
        ),

        array(
            'name' => 'Пильчевский Степан',
            'face' => '/jurists/2.png'
        ),

        array(
            'name' => 'Краузе Юрий',
            'face' => '/jurists/3.png'
        ),

        array(
            'name' => 'Найденов Дмитрий',
            'face' => '/jurists/4.png'
        ),

        array(
            'name' => 'Майоров Константин',
            'face' => '/jurists/5.png'
        ),
    );

    protected static $regions = [
        'Москва',
        'Мск'/*,
        'Балашиха',
        'Бронницы',
        'Видное',
        'Волоколамск',
        'Воскресенск',
        'Дзержинский',
        'Дмитров',
        'Долгопрудный',
        'Домодедово',
        'Дубна',
        'Егорьевск',
        'Железнодорожный',
        'Жуковский',
        'Зарайск',
        'Звенигород',
        'Ивантеевка',
        'Истра',
        'Кашира',
        'Климовск',
        'Клин',
        'Коломна',
        'Королёв',
        'Красноармейск',
        'Красногорск',
        'Краснознаменск',
        'Лобня',
        'Лосино-Петровский',
        'Луховицы',
        'Лыткарино',
        'Люберцы',
        'Можайск',
        'Мытищи',
        'Наро-Фоминск',
        'Ногинск',
        'Одинцово',
        'Орехово-Зуево',
        'Павловский Посад',
        'Подольск',
        'Протвино',
        'Пушкино',
        'Пущино',
        'Раменское',
        'Реутов',
        'Руза',
        'Сергиев Посад',
        'Серпухов',
        'Солнечногорск',
        'Ступино',
        'Фрязино',
        'Химки',
        'Черноголовка',
        'Чехов',
        'Шатура',
        'Щелково',
        'Электросталь',
        'Юбилейный',*/
    ];

    /**
     * Выбирает случайного пользователя из списка с фотограцией
    */
    public static function getRandomName()
    {
        if (rand(0,1) == 1) {
            return self::$users['userMNames'][array_rand(self::$users['userMNames'])];
        } else {
            return self::$users['userWNames'][array_rand(self::$users['userWNames'])];
        }
    }

    /**
     * Выбирает случайный регион с 40% для Москвы и Мск
     */
    /*public static function getRandomRegion()
    {
        if (rand(1, 10) <= 4) {
            return self::$regions[rand(0, 1)];
        } else {
            return self::$regions[array_rand(self::$regions)];
        }
    }*/
    public static function getRandomRegion()
    {
        return self::$regions[rand(0, 1)];
    }

    public static  function exportToJS(){
        return array(
            'womens' => static::$users['userWNames'],
            'mens' => static::$users['userMNames']
        );
    }

    public static function exportJurists(){
        return array(
            'womens' => static::$jurWNames,
            'mens' => static::$jurMNames
        );
    }
}
