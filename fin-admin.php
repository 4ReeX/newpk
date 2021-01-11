<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>

    <body>
        <!-- Left Panel -->
        <?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
            <!-- /#left-panel -->
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
                               <div class="card-header">
                                  <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active show" id="formiro-tab" data-toggle="tab" href="#custom-nav-formiro" role="tab" aria-controls="custom-nav-formiro" aria-selected="true">Формирование выплат</a>
                                                <a class="nav-item nav-link" id="zapros-tab" data-toggle="tab" href="#custom-nav-zapros" role="tab" aria-controls="custom-nav-zapros" aria-selected="false">Запросы на выплату</a>
                                            </div>
                                        </nav>
                                </div>
                                    <div class="card-body">
                                        <div class="tab-pane fade active show" id="custom-nav-formiro" role="tabpanel" aria-labelledby="custom-nav-formiro-tab">
                                        	<div class="row">
                                        		<div class="col-lg-2" id="blockInputOffers">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10"><span class="ss">29.12.1989 - 11.02.2020</span></div>
                                                                            <div class="css-1wy0on6">
                                                                                <div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4" id="blockInputPeriod">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="nowrap-custom">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
                                                                    <button class="icon-btn"><i class="date-icon icon-14"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        	</div>
                                        	
                                                    

                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-zapros" role="tabpanel" aria-labelledby="custom-nav-zapros-tab">
                                        	тут запросы на выплату
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="circle-btn-group">
                                            <button class="circle-btn" title="Сформировать отчет"><i class="ti ti-check"></i></button>
                                            <button class="circle-btn" title="Показать график"><i class="ti ti-stats-up stat-icon"></i></button>
                                            <button class="circle-btn" title="Очистить"><i class="ti ti-close"></i></button>
                                        </div>
                                    </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="row">

                            </div>
                            <div class="card-body">

                            </div>

                            <div class="row">
                                <hr>
                                <div class="col-12">
                                    <i class="ti ti-import float-right" style="font-size: 24px; margin-bottom: 5px; margin: 0 10px 5px"></i>
                                    <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                                    <br>
                                    <div class="responsive-block" id="fullWidth">
                                        <table id="example" class="table table-bordered nowrap dataTable" style="width:100%;">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Период</th>
                                                    <th>Начислено</th>
                                                    <th>Выплачено</th>
                                                    <th>Дата выплаты</th>
                                                    <th>Баланс</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">2019-12-30 - 2020-01-05</td>
                                                    <td>0,00</td>
                                                    <td>100,00</td>
                                                    <td>06.02.2020</td>
                                                    <td>15651,67</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">2019-12-30 - 2020-01-05</td>
                                                    <td>0,00</td>
                                                    <td>100,00</td>
                                                    <td>06.02.2020</td>
                                                    <td>10001,67</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">2019-12-30 - 2020-01-05</td>
                                                    <td>0,00</td>
                                                    <td>100,00</td>
                                                    <td>06.02.2020</td>
                                                    <td>11,67</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="thead-light">
                                                <tr>
                                                    <th>Итого</th>
                                                    <th>5656,60</th>
                                                    <th>300,00</th>
                                                    <th>-</th>
                                                    <th>11,67</th>
                                                </tr>
                                            </tfoot>
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
    </body>

</html>