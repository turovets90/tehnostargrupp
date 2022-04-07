<?php
/*
 Template name: Contacts
 */

get_header();
?>

<?php get_template_part('inc/breadcrumb'); ?>

<div class="container">
    <div class="page_content">
        <div class="content">
            <div class="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8bb7776d3048efe6b6fe777534e0af56d35ea31db6d51513d1b0809c21aecca6&amp;width=100%25&amp;height=420&amp;lang=ru_RU&amp;scroll=true"></script></div>
            <div class="contacts_form_row">
                <div class="col_left">
                    <ul class="c_list">
                        <li class="tel"><a href="#">+375 44 708-90-90 (Минск)</a></li>
                        <li class="tel"><a href="">+375 29 662-19-98 (Борисов)</a></li>
                        <li><strong>Наша почта:</strong> <a href="mailto:tehnostargrupp@tut.by">tehnostargrupp@tut.by</a></li>
                        <li><strong>Наш адрес:</strong> 222512, Минская обл., г.Борисов, <br>ул. Р.Люксембург, 41-А, пом 1-1</li>
                        <li class="c_desc">Приоритетное направление деятельности фирмы — изготовление, продажа и установка оборудования для банков и офисов: Расчетно-кассовые центры, пункты обмена валют, кассовые кабины, кассовые узлы, двери металлические, передаточные лотки, сейфовые комнаты,  хранилища психотропных и наркотических средств, оружейные комнаты и пр.</li>
                    </ul>
                </div>
                <div class="col_right">
                    <div class="form_box">
                        <div class="title">Остались вопросы?</div>
                        <div class="sub_title">Заполните форму и мы рассчитаем стоимость заказа</div>
                        <form>
                            <div class="c_form">
                                <div class="field">
                                    <input class="form-control" type="text" placeholder="Ваше имя*"/>
                                </div>
                                <div class="field">
                                    <input class="form-control" type="text" placeholder="Телефон*"/>
                                </div>
                                <div class="field">
                                    <input class="form-control" type="text" placeholder="E-mail*"/>
                                </div>
                                <div class="field">
                                    <textarea class="form-control" placeholder="Сообщение"></textarea>
                                </div>
                                <div class="field">
                                    <button class="btn_default" type="submit">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>
