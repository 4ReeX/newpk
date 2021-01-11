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
                               <!-- <?php include 'card-header.php'; ?> -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-auto float-left" id="blockInputDatapicker">
                                                <div class="jss8">
                                                    <div class=" css-2b097c-container">
                                                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                            <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="datapiker">Дата</label>
                                                            <input type="text" class="form-control form-control-sm MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" id="datapiker" placeholder="24.10.2019 - 30.10.2019">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto" id="blockInputPeriod">
                                                <div class="jss8">
                                                    <div class=" css-2b097c-container">
                                                        <div class="nowrap-custom">
                                                            <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
                                                            <!--<button class="icon-btn"><i class="date-icon icon-day"></i></button>-->
                                                            <!-- <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>-->
                                                            <!-- <button class="icon-btn"><i class="date-icon icon-2"></i></button>-->
                                                            <!-- <button class="icon-btn"><i class="date-icon icon-7"></i></button>-->
                                                            <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
                                                            <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
                                                            <button class="icon-btn"><i class="date-icon icon-14"></i></button>
                                                            <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                                                            <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
                                                            <button class="icon-btn"><i class="date-icon icon-30"></i></button>
                                                            

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

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