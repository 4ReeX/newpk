<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>
    </head>

    <body>
        <!-- Left Panel -->
        <?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
            <!-- Left Panel -->

            <!-- Right Panel -->

            <div id="right-panel" class="right-panel">

                <!-- Header-->
                <?php  //говорит нам что начинается php код
include 'header.php';  //любой файл который мы хотим подключить в этой части документа
?>
                    <!-- /header -->
                    <!-- Header-->

                    <div class="content">
                        <div class="animated fadeIn">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 right-buttons" id="mobVis">
                                            <a href="http://lpt.playmobile.ru/offers/skrom/affimob-redis/pk2/operator_subnet.xlsx" class="diapazon float-left">Получить диапазон IP</a>
                                            <button class="circle-btn float-left" title="Назад" onclick="link2();"><i class="ti ti-back-left"></i></button>

                                        </div>
                                        <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12">

                                            <div class="buttons-block btn-block">
                                                <button class="btn btn-outline-primary btn-margin" onclick="clickMe();" id="link1">Изменить набор офферов</button>
                                                <button class="btn btn-outline-success btn-margin" id="link2">Сохранить</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 right-buttons" id="mobHide">
                                            <a href="http://lpt.playmobile.ru/offers/skrom/affimob-redis/pk2/operator_subnet.xlsx" class="diapazon float-left">Получить диапазон IP</a>
                                            <button class="circle-btn float-left" title="Назад" onclick="link2();"><i class="ti ti-back-left"></i></button>

                                        </div>
                                    </div>

                                    <div class="row" id="createPotok" style="display: none;">

                                        <div class="col-lg-6 col-sm-12 ramka">
                                            <hr>
                                            <button class="close" onclick="closePotok();"><i class="ti ti-close cursor"></i></button>
                                            <div class="form-group">

                                                <!--
                                        <div class="custom-mselect margin5">
                                        <select name="selectSm" id="selectSm2" class="form-control-sm form-control margin5 select-potok">
                                        <option value="0">Название сети/трекера</option>
                                                <option value="1">Визитвеб</option>
                                                <option value="2">Тизернет</option>
                                                <option value="3">Мозготрёп</option>
                                                <option value="4">Распредвал</option>
                                                <option value="5">Кто то там</option>
                                        </select>
                                    </div>
                                    -->
                                                <div class="">
                                                    <div tabindex="-1" class="rw-multiselect rw-widget">
                                                        <span id="rw_2_notify_area" role="status" class="rw-sr" aria-live="assertive" aria-atomic="true" aria-relevant="additions removals text"></span>
                                                        <div class="rw-widget-input rw-widget-picker rw-widget-container">
                                                            <div>
                                                                <input tabindex="0" role="listbox" aria-expanded="false" aria-busy="false" aria-owns="rw_2_listbox rw_2_notify_area " aria-haspopup="true" placeholder="Добавьте название" size="24" class="rw-input-reset" autocomplete="off" aria-disabled="false" aria-readonly="false" value="">
                                                            </div>
                                                            <span class="rw-select"><button aria-hidden="true" role="presentational" tabindex="-1" type="button" aria-disabled="false" class="rw-btn rw-btn-select"></button></span></div>
                                                        <div class="rw-popup-container rw-popup-transition-exited" style="">
                                                            <div class="rw-popup-transition">
                                                                <div class="rw-popup"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Trafficback URL</label>
                                                <input class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Trafficback URL - ссылка на которую будет возвращаться трафик." onkeyup="auto_grow(this)" value=""></input>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Postback URL</label>
                                                <input class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Postback URL - Отправим на ваш URL всю информацию - согласно данному API." onkeyup="auto_grow(this)" value=""></input>
                                                <!-- <div class="custom-mselect margin5">
                                        <div tabindex="-1" class="rw-multiselect rw-widget">
                                        <span id="rw_2_notify_area" role="status" class="rw-sr" aria-live="assertive" aria-atomic="true" aria-relevant="additions removals text"></span>
                                        <div class="rw-widget-input rw-widget-picker rw-widget-container"><div>
                                            <input tabindex="0" role="listbox" aria-expanded="false" aria-busy="false" aria-owns="rw_2_listbox rw_2_notify_area " aria-haspopup="true" placeholder="p1={COMPANY}" size="24" class="rw-input-reset" autocomplete="off" aria-disabled="false" aria-readonly="false" value="">
                                        </div>
                                        <span class="rw-select"><button aria-hidden="true" role="presentational" tabindex="-1" type="button" aria-disabled="false" class="rw-btn rw-btn-select"></button></span></div>
                                        <div class="rw-popup-container rw-popup-transition-exited" style="">
                                            <div class="rw-popup-transition">
                                                <div class="rw-popup"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="custom-mselect margin5">
                                            <div tabindex="-1" class="rw-multiselect rw-widget">
                                        <span id="rw_2_notify_area" role="status" class="rw-sr" aria-live="assertive" aria-atomic="true" aria-relevant="additions removals text"></span>
                                        <div class="rw-widget-input rw-widget-picker rw-widget-container"><div>
                                            <input tabindex="0" role="listbox" aria-expanded="false" aria-busy="false" aria-owns="rw_2_listbox rw_2_notify_area " aria-haspopup="true" placeholder="p2={AD}" size="24" class="rw-input-reset" autocomplete="off" aria-disabled="false" aria-readonly="false" value="">
                                        </div>
                                        <span class="rw-select"><button aria-hidden="true" role="presentational" tabindex="-1" type="button" aria-disabled="false" class="rw-btn rw-btn-select"></button></span></div>
                                        <div class="rw-popup-container rw-popup-transition-exited" style="">
                                            <div class="rw-popup-transition">
                                                <div class="rw-popup"></div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="custom-mselect margin5">
                                            <div tabindex="-1" class="rw-multiselect rw-widget">
                                        <span id="rw_2_notify_area" role="status" class="rw-sr" aria-live="assertive" aria-atomic="true" aria-relevant="additions removals text"></span>
                                        <div class="rw-widget-input rw-widget-picker rw-widget-container"><div>
                                            <input tabindex="0" role="listbox" aria-expanded="false" aria-busy="false" aria-owns="rw_2_listbox rw_2_notify_area " aria-haspopup="true" placeholder="source=visitweb" size="24" class="rw-input-reset" autocomplete="off" aria-disabled="false" aria-readonly="false" value="">
                                        </div>
                                        <span class="rw-select"><button aria-hidden="true" role="presentational" tabindex="-1" type="button" aria-disabled="false" class="rw-btn rw-btn-select"></button></span></div>
                                        <div class="rw-popup-container rw-popup-transition-exited" style="">
                                            <div class="rw-popup-transition">
                                                <div class="rw-popup"></div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                </div>-->
                                            </div>
                                            <label for="notific2" id="notif">События для постбека</label>
                                            <div class="btn-group mr-2" role="group" aria-label="First group" id="notific2">
                                                <button type="button" class="btn btn-secondary">Все</button>
                                                <button type="button" class="btn btn-secondary">Подписки</button>
                                                <button type="button" class="btn btn-secondary">Покупки</button>
                                                <button type="button" class="btn btn-secondary">Биллинг</button>
                                                <button type="button" class="btn btn-secondary">Отписки</button>
                                            </div>
                                            <button class="btn btn-outline-info save" onclick="closePotok();">Сохранить</button>
                                            <hr>

                                            <!--------------------------------------------->

                                        </div>
                                    </div>

                                    <div class="row">
                                        <hr>
                                        <div class="col-12">

                                            <p class="title-smart">Смартлинк</p>
                                            <div class="responsive-block" id="fullWidth" style="overflow: auto hidden;">
                                                <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th style="min-width: 300px; width: 300px;">Название</th>
                                                            <th style="min-width: 150px; width: 150px;">ОСС</th>
                                                            <th style="min-width: 150px; width: 150px;">Тематика</th>
                                                            <th>Домен</th>
                                                            <th style="">Ссылка</th>
                                                            <th style="width: 40px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" placeholder="Название смартлинка" class="form-control" value="13.2.2020_10:52-Адалт-120294-1">
                                                            </td>
                                                            <td class="td-operator inline"><img src="data:image/png;base64,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" alt=""></td>
                                                            <td>Адалт</td>
                                                            <td>
                                                            <form action="">
                                                            <input list="domains" placeholder="s2s.affimob.com" class="form-control-sm form-control input-domains">
                                                            <datalist id="domains">
                                                            <option>Domain.ru</option>
                                                            <option>2ip.com</option>
                                                            <option>affiliate.org</option>
                                                            <option>bespredel.ru</option>
                                                            <option>porno.com</option>
                                                            <option>beeeee.ve</option>
                                                           </datalist>
                                                            </form>
                                                             </td>
                                                            <td><span class="link"><input disabled="" type="text" placeholder="ссылка появится после нажатия на 'Получить ссылки'" class="linkToCopy copyClick form-control form-control-sm" value="http://r.affimob.com/smart?sl=603&amp;partner_id=120294&amp;source_id=1"></span></td>
                                                            <td><i class="ti ti-close cursor"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="title-smart">Набор офферов</p>
                                        <div class="responsive-block" id="fullWidth" style="overflow: auto hidden;">
                                            <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="min-width: 300px; width: 300px;">Название</th>
                                                        <th style="min-width: 150px; width: 150px;">ОСС</th>
                                                        <th style="min-width: 90px; width: 90px;">Выплата</th>
                                                        <th>Вес</th>
                                                        <th style="min-width: 40px; width: 40px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>11984 | Темафон (20/1) Eromix402</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>
                                                        <td>
                                                            <input type="text" class="form-control control-sm-3 has-error" title="Приоритет отображения оффера. 100 - максимальный, 0 - минимальный" value="100" style="width: 50px;">
                                                        </td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11982 | Темафон (20/1) Erolife 391</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>
                                                        <td>
                                                            <input type="text" class="form-control control-sm-3 has-error" title="Приоритет отображения оффера. 100 - максимальный, 0 - минимальный" value="100" style="width: 50px;">
                                                        </td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11951 | Темафон (20/1) Videomir 790</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>
                                                        <td>
                                                            <input type="text" class="form-control control-sm-3 has-error" title="Приоритет отображения оффера. 100 - максимальный, 0 - минимальный" value="100" style="width: 50px;">
                                                        </td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--------------------------end col-12-------------------------->

                            </div>

                        </div>
                    </div>
            </div>
            </div>

            </div>
            </div>
            <!--end right-panel-->
            <div id="footer-right-panel" class="right-panel">
                <footer class="footer footer-relative">
                    <div class="footer-inner bg-offer">
                        <div class="row" style="display: none;">
                            <div class="line1">
                                <div class="input-group d-flex justify-content-end search-line">
                                    <input class="form-control py-2 border-right-0 border col-lg-12" type="search" value="" placeholder="Поиск по названию" id="offer-search">
                                    <span class="input-group-append">
                        <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                        </span>

                                </div>

                            </div>

                            <div class="line2">
                                <div class="d-flex flex-row pick-offers">Выделено офферов <span>12</span></div>
                                <button type="button" class="btn btn-warning create-links">Создать ссылки</button>
                            </div>
                        </div>
                </footer>
                </div>

                <!-- Right Panel -->

                <!---scripts--->
                <?php include 'scripts.php'; ?>

    </body>

</html>