<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>

    <body onload="openTabs1();" class="bodyOffers">
        <!-- Left Panel -->
        <?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
            <!-- Left Panel -->
            <div id="right-panel" class="right-panel">
                <!-- Header-->
                <?php  //говорит нам что начинается php код
include 'header.php';  //любой файл который мы хотим подключить в этой части документа
?>
                    <!-- Header-->

                    <div class="content">
                        <div class="card no-mb">
                            <div class="card-header">
                                <div class="i-buttons">
                                    <i class="ti ti-plug offer-buttons active" title="Подключить/Отключить"></i>
                                    <i class="ti ti-time offer-buttons" title="Сделать устаревшим"></i>
                                    <i class="ti ti-trash offer-buttons" title="Удалить"></i>
                                    <i class="ti ti-files offer-buttons" title="Дублировать оффер"></i>
                                </div>
                                <nav class="navitab">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active show" data-toggle="tab" href="#" role="tab" onclick="openTabs1();" aria-selected="true">Настройки оффера</a>
                                        <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-start" aria-selected="false" onclick="openTabs2();">Настройки выплат</a>
                                        <!--<a class="nav-item nav-link" id="oss-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-oss" aria-selected="false" onclick="openTabs3();">3</a>-->
                                    </div>

                                </nav>

                            </div>
                        </div>
                        <div class="animated fadeIn">

                            <div class="custom-tab">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="first" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <!--start card-->
                                        <div class="card no-bor-rad-top">
                                            <div class="card-body fortabs ">
                                                <div class="col-12 col-sm-12 col-md-9 float-left">
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group edit-offer">
                                                            <label for="hideForNovice1" class="float-left">Скрыт от новичков</label>
                                                            <div class="ios-ui-select checked">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="form-group edit-offer">
                                                            <label for="hotOffer" class="float-left">Горячий оффер</label>
                                                            <div class="ios-ui-select checked">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="offerType" class="fs10px">Тип оффера</label>
                                                        <select class="form-control" id="offerType">
                                                            <option value="">Выплаты за ребиллы</option>
                                                            <option value="all">Выкуп</option>
                                                            <option value="selected">Интернет клик</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="tematic" class="fs10px">Тематика</label>
                                                        <select class="form-control" id="tematic">
                                                            <option value="adult">Адалт</option>
                                                            <option value="video">Видео</option>
                                                            <option value="gdz">Готовые Домашние задания</option>
                                                            <option value="women">Женские</option>
                                                            <option value="games">Игры</option>
                                                            <option value="music">Музыка</option>
                                                            <option value="news">Новости</option>
                                                            <option value="su">Самоучитель</option>
                                                            <option value="files">Файлы</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="NameForPartners" class="fs10px">Название для партнёров</label>
                                                        <input type="text" class="form-control" placeholder="Введите текст" id="NameForPartners" value="Erolife 439 20/1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="opisanie" class="fs10px" id="LabelOpisanie">Описание</label>
                                                        <div class="form-control" contenteditable=true placeholder="Введите текст" id="opisanie"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="Comment" class="fs10px">Комментарий</label>
                                                        <input type="text" class="form-control" placeholder="Введите текст" id="Comment">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="EUP" class="fs10px">EUP (в нац.валюте страны)</label>
                                                        <input type="number" value="4.52" min="0" max="100" step="0.1" class="form-control" id="EUP">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="dateMin" class="fs10px">Мин.дата подписки для выплат</label>
                                                        <input type="date" id="dateMin" class="form-control">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="dateMin" class="fs10px">Время обратного выкупа в секундах</label>
                                                        <input type="text" class="form-control" placeholder="Введите время выкупа в секундах" id="secByPay">
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="dateMin" class="fs10px">Выбор подписочного сервиса</label>
                                                        <input type="text" class="form-control" placeholder="Вверите сервис для поиска" id="secByPay">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        <label for="Target" class="fs10px" id="LabelOpisanie">Ограничения/Таргетинг</label>
                                                        <div class="form-control" contenteditable=true placeholder="Введите текст" id="Target">
                                                            RU 18+/ Не принимается трафик с десктопов
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        <label for="Link" class="fs10px" id="LabelOpisanie">Шаблон ссылки</label>
                                                        <div class="form-control" contenteditable=true placeholder="Здесь был Вася и Ваша ссылка" id="Link">http://o.connectivity.ru/click.php?key=erolife&offer_id={offer_id}&tmpl=erolife439&partner_id={partner_id}&source_id={source_id}</div>
                                                    </div>

                                                </div>
                                            </div><!--end newblock-->
                                            <div class="col-12 col-sm-12 col-md-3 float-left">
                                                <div class="row">
                                                    <div class="form-group">
                        <label for="uploadScreenshot" class="fs10px" id="LabelOpisanie">Скриншот оффера</label>
                        <input type="file" name="upload" onchange="form.submit()" class="form-control" id="uploadScreenshot">
                    </div>
                <div class="offer-block">
    <label for="checkbox3" class="label-checkbox">
        <div class="offer-container hvr-reveal">
            <div id="ios-checkbox-checkoffer" class="ios-checkbox-wrap"><input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios ios-checkbox-input" data-ios-checkbox="true" style="display: none;"><div class="ios-ui-select"><div class="inner"></div></div></div>
            <div class="oss-icon ofcard"><img src="images/beeline.png" alt=""></div>
            <div class="adult">Аdult</div>
            <div class="sound"></div>
            <div class="offer-title">
                11985|Eromix 403 20/1
            </div>
            <div class="screen cont">
                <img src="images/offers-img/new-offer-84.jpg" alt="" class="offer-image">
                <div class="shtorka cont2">
                    <div class="restriction-text">
                        <h5 style="color: red; width: 100%; font-size: 12px;">Ограничения по операторам!</h5>
                        <p><b>МТС </b>- принимаются все мобильные устройства. Не принимается трафик с планшетов IPAD, с десктопов через USB-модемы. Запрещено использование на креативах слов "Бесплатно" и им подобных, а также введение пользователя в заблуждение. За нарушение требования - бан без сохранения выплат.</p>
                        <p><b>Билайн</b> - принимаются все мобильные устройства. Не принимается трафик с десктопов через USB-модемы. </p>
                        <p><b>Мегафон</b> - принимаются все мобильные устройства. Запрещено привлечение трафика из Goofle Adwords в выходные и праздничные дни. Запрещено использовать баннеры без указания конкретики по предоставляемой услуге.</p>
                        <p><b>Теле2</b> - принимаются все мобильные устройства. Регионы Москва и Татарстан - вместо лендинга страница с вводом номера и подтверждение подписки через SMS.</p>
                        <h5 style="color: red; width: 100%; font-size: 12px;">Запрет на трафик:</h5>
                        <p>- полученный с помощью вредоносных и троянских программ, с взломанных сайтов и шеллов, а так же с помощью подмены выдачи</p>
                        <p>- спам в любой форме, включая sms и email рассылку, спам в мессенджерах</p>
                        <p>- с социальных сетей и мессенджеров (Вконтакте, Facebook,WhatsUp,Viber и т.д.)</p>
                        <p>- с ресурсов запрещенных категорий, содержание которых противоречит законодательству РФ: порно с участием несовершеннолетних, насилие, зоофилия, информация о любых наркотиках, экстремистские либо другие запрещенные к публикации материалы (рекомендуется использовать список стоп-слов и список запрещенных сайтов).</p>
                        <h5 style="color: red; width: 100%; font-size: 12px;">Строго запрещено!</h5>
                        <b>Любыми способами вводить в заблуждение Абонентов, в частности:</b>
                        <p>- употреблять слово «Бесплатно» на рекламных материалах,</p>
                        <p>- направлять трафик с пересечением тематик (особенно тематик Адалт/неАдалт)</p>
                    </div>
                </div>
            </div>

            <div class="offer-info">
                <span>4,10 руб.</span><span>за ребилл</span>
            </div>
        </div>
    </label>
</div>    
                                                 </div>
                                            </div>
                                            <div class="col-lg-12">
                                        <div class="circle-btn-group">
                                            <button class="circle-btn" title="Сохранить"><i class="ti ti-save"></i></button>
                                            <button class="circle-btn" title="Очистить"><i class="ti ti-close"></i></button>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <!---end card-->

                                    </div>
                                    <div class="tab-pane fade show" id="second" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <!--start card-->
                                        <div class="card card no-bor-rad-top">
                                            
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="">
                                                        <div class="form-group edit-offer">
                                                            <label for="hideForNovice1" class="float-left">Устаревшие ставки</label>
                                                            <div class="ios-ui-select checked">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                            <div class="responsive-block statistic_table_wrapper" id="fullWidth" style="width: 100%; min-width: 310px;">
                                            <table id="stats1" class="table  table-bordered nowrap viplat" style="width:100%;">
                                            <thead class="thead-light statistic_header">
                                                <tr>
                                                    <th class="sticky-header">Дата начала</th>
                                                    <th class="sticky-header">Дата окончания</th>
                                                    <th class="sticky-header">Парнер</th>
                                                    <th class="sticky-header">Ставка(р)</th>
                                                    <th class="sticky-header">Sec.до выкупа</th>
                                                    <th class="sticky-header">Тип выплаты</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="statistic_body">
                                                <tr class="grayTR">
                                                    <td><input type="date" value="06.04.2020" class="form-control"></td>
                                                    <td><input type="date" value="26.12.2021" class="form-control"></td>
                                                    <td>
                                                    <select class="form-control" data-live-search="true">
                                                    <option data-tokens="all">Общая ставка по офферу</option>
                                                    <option data-tokens="all">Возможность ввода текста</option>
                                                    <option data-tokens="all">Мультиселект партнёров</option>
                                                   
                                                    </select>
                                                    </td>
                                                    <td><input type="number" value="4.52" min="0" max="100" step="0.1" class="form-control"></td>
                                                    <td><input type="number" value="" min="0" max="9999" step="0.1" class="form-control"></td>
                                                    <td>
                                                        <select class="form-control" id="tdTypePay">
                                                            <option value="withoutNds">В нац. валюте</option>
                                                            <option value="withoutNds">% от eup без ндс</option>
                                                        </select>
                                                    </td>
                                                    <td><i class="ti ti-save td-save"></i></td>
                                                </tr> 
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>06.04.2020</td>
                                                    <td>26.12.2021</td>
                                                    <td>mamay.seomozg@gmail.com AM5742 | 129551</td>
                                                    <td>4.52</td>
                                                    <td>9999</td>
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!---end card-->


                                    </div>
                                    <div class="tab-pane fade show" id="third" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
                                               
                                            </div>
                                        </div>

                                        <!----end card-body--->
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            </div>
            </div>
            <?php include 'popup-offer.php'; ?>
                <?php include 'popup-link.php'; ?>
                    <?php include 'scripts.php'; ?>
                        <script>
                            $('.create-links').attr("onclick", "location.href='poluchenie_ssilok.php'")
                        </script>
                        <!--<script>
    $('.ti-link').on('click', function(event) {
        $('#linkPop').show();
    });
</script>-->
    </body>

</html>