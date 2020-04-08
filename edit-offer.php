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
    <div class="col-lg-3 col-sm-12 col-auto float-left">
        <div class="card">
            <div class="card-header">
                <span>Настройки оффера</span>
                <div class="i-buttons">
                    <i class="ti ti-plug offer-buttons active" ></i>
                    <i class="ti ti-time offer-buttons"></i>
                    <i class="ti ti-trash offer-buttons"></i>
                    <i class="ti ti-files offer-buttons"></i>
                </div>
            </div>
            <div class="card-body overflow-y">
                <div class="row">
                    <div class="form-group edit-offer">
                        <label for="hideForNovice1" class="float-left">Скрыт от новичков</label>
                        <div class="ios-ui-select checked"><div class="inner"></div></div>
                    </div>
                     <div class="form-group edit-offer">
                        <label for="hotOffer" class="float-left">Горячий оффер</label>
                        <div class="ios-ui-select checked"><div class="inner"></div></div>
                    </div>
                    <div class="form-group">
                        <label for="offerType" class="fs10px">Тип оффера</label>
                        <select class="form-control" id="offerType">
                        <option value="">Выплаты за ребиллы</option>
                        <option value="all">Выкуп</option>
                        <option value="selected">Интернет клик</option>
                        </select>
                    </div>
                    <div class="form-group">
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
                    <div class="form-group">
                        <label for="NameForPartners" class="fs10px">Название для партнёров</label>
                        <input type="text" class="form-control" placeholder="Введите текст" id="NameForPartners" value="Erolife 439 20/1">
                    </div>
                    <div class="form-group">
                        <label for="opisanie" class="fs10px" id="LabelOpisanie">Описание</label>
                        <div class="form-control" contenteditable=true placeholder="Введите текст" id="opisanie"></div>
                    </div>
                    <div class="form-group">
                        <label for="Comment" class="fs10px">Комментарий</label>
                        <input type="text" class="form-control" placeholder="Введите текст" id="Comment">
                    </div>
                    <div class="form-group">
                        <label for="Target" class="fs10px" id="LabelOpisanie">Ограничения/Таргетинг</label>
                        <div class="form-control" contenteditable=true placeholder="Введите текст" id="Target">
                            RU 18+/ Не принимается трафик с десктопов
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Link" class="fs10px" id="LabelOpisanie">Шаблон ссылки</label>
                        <div class="form-control" contenteditable=true placeholder="Здесь был Вася и Ваша ссылка" id="Link" >http://o.connectivity.ru/click.php?key=erolife&offer_id={offer_id}&tmpl=erolife439&partner_id={partner_id}&source_id={source_id}</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="EUP" class="fs10px">EUP (в нац.валюте страны)</label>
                        <input type="number" value="4.52" min="0" max="100" step="0.1" class="form-control" id="EUP">
                    </div>
                    <div class="form-group">
                        <label for="dateMin" class="fs10px">Мин.дата подписки для выплат</label>
                        <input type="date" id="dateMin" class="form-control">
                    </div>
                    

                </div>                
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-12 float-left">
        <div class="card">
            <div class="card-header">Настройка выплат</div>
            <div class="card-body">
                <div class="row">
                    <div class="responsive-block statistic_table_wrapper" id="fullWidth">
                                        <table id="stats1" class="table  table-bordered nowrap" style="width:100%;">
                                            <thead class="thead-light statistic_header">
                                                <tr>
                                                    <th class="sticky-header">Дата начала</th>
                                                    <th class="sticky-header">Дата окончания</th>
                                                    <th class="sticky-header">Парнер</th>
                                                    <th class="sticky-header">Ставка(р)</th>
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
                                                    <td>В нац. валюте</td>
                                                    <td><i class="ti ti-pencil td-save"></i></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-12 col-auto float-left">
        <div class="card">
            <div class="card-header">Промо оффера</div>
            <div class="card-body">
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
        </div>
    </div>
    
</div>

<?php include 'popup-mass-edit.php'; ?>
<?php include 'popup-offer.php'; ?>
<?php include 'scripts.php'; ?>
<script type="text/javascript">
$('.top-right').html( "<span>12040 Темафон (20/1) Erolife 439  </span> <i class='ti ti-pencil cp'></i>");
$('#SearchBlock').hide();
$('#SearchToggle').hide();

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script>
    $(function() {
    $('#EUP').on("mousewheel", function(event) {
        event.preventDefault();
        $this = $(this);
        $inc = parseFloat($this.attr('step'));
        $max = parseFloat($this.attr('max'));
        $min = parseFloat($this.attr('min'));
        $currVal = parseFloat($this.val());

        // If blank, assume value of 0
        if (isNaN($currVal)) {
            $currVal = 0.0;
        }

        // Increment or decrement numeric based on scroll distance
        if (event.deltaFactor * event.deltaY > 0) {
            if ($currVal + $inc <= $max) {
                $this.val($currVal + $inc);
            }
        } else {
            if ($currVal - $inc >= $min) {
                $this.val($currVal - $inc);
            }
        }
    });
});
</script>
</body>

</html>