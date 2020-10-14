<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>
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


                <!-- Header-->

                <div class="content">
                    <div class="animated fadeIn">
                    	
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 right-buttons" id="mobVis">
                                        
                                        <button class="circle-btn float-left" title="Назад" onclick="link2();"><i class="ti ti-back-left"></i></button>

                                    </div>
                                    <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12 col">
                                    <select name="selectSm" id="d1" class="form-control-sm form-control col-lg-7 col-md-6 col-sm-12 margin5 select-potok" onchange="test();">
                                            <option value="0">Стандартный поток</option>
                                            <option value="1">Создать новый</option>
                                            <option value="2">Поток как поток</option>
                                            <option value="3">Слей деньги в пельменную</option>
                                            <option value="4">Пора лить на картошку</option>
                                            <option value="5">Мишин поток, но ему не говорите</option>
                                        </select>

                                        <form action="" class="doms">
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
                                        <div class="buttons-block btn-block">
                                            <button class="btn btn-outline-primary btn-margin" onclick="clickMe();" id="link1"  data-toggle="modal" data-target="#macrosModal">Получить ссылки</button>
                                            <button class="btn btn-outline-success btn-margin" id="link2" data-toggle="modal" data-target="#macrosModal">Создать смартлинк</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 right-buttons" id="mobHide">
                                        <button class="circle-btn float-left" title="Назад" onclick="link2();"><i class="ti ti-back-left"></i></button>

                                    </div>
                                </div>

<?php include 'dopparams.php' ?>
                                <div class="row" id="createPotok" style="display: none;">

                                    <div class="col ramka">
                                        <hr>
                                        <button class="close"><i class="ti ti-close cursor" style="font-size: 12px;"></i></button>
                                        <div class="form-group mr-2" id="notific2">
                                            <div class="">
                                                <div class="rw-multiselect rw-widget"><span class="rw-sr"></span>
                                                    <div class="rw-widget-input rw-widget-picker rw-widget-container">
                                                        <div>
                                                            <input name="name" placeholder="Добавьте название" size="24" class="form-control" aria-disabled="false" value="">
                                                            <p class="error-msg"></p>
                                                        </div><span class="rw-select"><button aria-hidden="true" type="button" aria-disabled="false" class="rw-btn rw-btn-select"></button></span></div>
                                                    <div class="rw-popup-container rw-popup-transition-exited">
                                                        <div class="rw-popup-transition">
                                                            <div class="rw-popup"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="float-left">Trafficback URL</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="http" onclick="myFunction();">http://</button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Ваша ссылка на которую будет возвращаться трафик" aria-label="" aria-describedby="basic-addon1" value="">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="float-left">Postback URL</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="http2" onclick="myFunction2();">http://</button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Введите URL для приема GET параметров о событиях в партнёрской программе" aria-label="" aria-describedby="basic-addon1" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="float-left">События для Postback</label>
                                            <br>
                                            <div class="input-group mb-3">
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" disabled="" class="btn btn-outline-secondary active">Все</button>
                                                    <button type="button" disabled="" class="btn btn-outline-secondary">Подписки</button>
                                                    <button type="button" disabled="" class="btn btn-outline-secondary">Покупки</button>
                                                    <button type="button" disabled="" class="btn btn-outline-secondary">Биллинг</button>
                                                    <button type="button" disabled="" class="btn btn-outline-secondary">Отписки</button>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-outline-info">Сохранить</button>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <hr>
                                    <div class="col-12">
                                        <p class="title-smart">Смартлинки</p>
                                        <div class="responsive-block" id="fullWidth" style="overflow-x: auto;">
                                            <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="min-width: 300px; width: 300px;">Название</th>
                                                        <th style="min-width: 110px; width: 110px;">Тематика</th>
                                                        <th style="min-width: 150px; width: 150px;">ОСС</th>
                                                        <th style="min-width: 90px; width: 90px;"><i class="ti ti-layers-alt" title="Количество офферов" style="font-size: 16px;"></i></th>
                                                        <th>Ссылка</th>
                                                        <th style="min-width: 60px; width: 60px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>603 | 13.2.2020_10:52-Адалт-120294-1</td>
                                                        <td>Адалт</td>
                                                        <td class="td-operator inline">
                                                        	<img src="images/beeline.png" alt="">
                                                        	<img src="images/beeline.png" alt="">
                                                        	<img src="images/beeline.png" alt="">
                                                        	<img src="images/beeline.png" alt="">
                                                        </td>
                                                        <td>3</td>

                                                        <td><span class="link"><input disabled="" type="text" placeholder="ссылка появится после нажатия на 'Получить ссылки'" class="linkToCopy copyClick form-control form-control-sm" value="http://r.affimob.com/smart?sl=603&amp;partner_id=120294&amp;source_id=1"></span></td>
                                                        <td><i class="ti ti-pencil cursor"></i><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="title-smart">Офферы</p>
                                        <div class="responsive-block" id="fullWidth2" style="overflow: auto hidden;">
                                            <table class="table simple-table align-left no-wrap table-sm" id="table-offers">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="min-width: 300px; width: 300px;">Название</th>
                                                        <th style="min-width: 110px; width: 110px;">Тематика</th>
                                                        <th style="min-width: 150px; width: 150px;">ОСС</th>
                                                        <th style="min-width: 90px; width: 90px;">Выплата</th>
                                                        <th>Ссылка</th>
                                                        <th style="min-width: 40px; width: 40px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>11984 | Eromix 402 20/1</td>
                                                        <td>Адалт</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>
                                                        <td><span class="link"><input disabled="" type="text" placeholder="ссылка появится после нажатия на 'Получить ссылки'" class="linkToCopy copyClick form-control form-control-sm" value=""></span></td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11982 | Erolife 391 20/1</td>
                                                        <td>Адалт</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>

                                                        <td><span class="link"><input disabled="" type="text" placeholder="ссылка появится после нажатия на 'Получить ссылки'" class="linkToCopy copyClick form-control form-control-sm" value=""></span></td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11951 | Videomir 790 20/1</td>
                                                        <td>Адалт</td>
                                                        <td class="td-operator"><img src="images/beeline.png" alt=""></td>
                                                        <td><span>3.83</span>
                                                            <br><span style="font-size: 10px;">ребилл</span></td>

                                                        <td><span class="link"><input disabled="" type="text" placeholder="ссылка появится после нажатия на 'Получить ссылки'" class="linkToCopy copyClick form-control form-control-sm" value=""></span></td>
                                                        <td><i class="ti ti-close cursor"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

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

            <!-- Scripts -->
<?php include 'scripts.php'; ?>
<?php include 'popup-macros.php'; ?>
</body>
</html>