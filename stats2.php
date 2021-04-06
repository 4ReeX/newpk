<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>

    <body>
        <!-- Left Panel -->

        <!-- /#left-panel -->
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

                                <!--<?php include 'card-header.php'; ?>-->
                                <div class="card-header">
                                  <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active show" id="home-tab-stat" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Статистика</a>
                                                <a class="nav-item nav-link" id="start-tab-stat" data-toggle="tab" href="#custom-nav-start" role="tab" aria-controls="custom-nav-start" aria-selected="false">Анализ трафика</a>
                                            </div>
                                        </nav>
                                </div>
                                    
                                    <div class="card-body hidenHover">

                                        <div class="tab-content pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                <div class="row">
                                                    <div class="col-lg-2" id="blockInputOffers">
                                                        <div class="jss8">
                                                            <div class=" css-2b097c-container">
                                                                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                    <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label>
                                                                    <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                        <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                            <div class="jss10"><span class="ss">29.12.1989 - 11.02.2020</span></div>
                                                                            <div class=" css-1wy0on6">
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
                                                                    <button class="icon-btn"><i class="date-icon icon-day"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-2"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-7"></i></button>
                                                                    <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
                                                                    <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
                                                                    <!--<button class="icon-btn"><i class="date-icon icon-14"></i></button>-->
                                                                    <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
                                                                    <button class="icon-btn"><i class="date-icon icon-30"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-nav-start" role="tabpanel" aria-labelledby="custom-nav-start-tab">
                                              <div class="row">
          <div class="col-lg-2" id="blockInputOffers">
            <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><span class="ss">29.12.1989 - 11.02.2020</span></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div></div></div>
          </div></div></div></div>
          </div>
            
              <div class="col-lg-4" id="blockInputPeriod">
            <div class="jss8">
              <div class=" css-2b097c-container">
                <div class="nowrap-custom">
              <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
              <button class="icon-btn"><i class="date-icon icon-day"></i></button>
              <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>
              <button class="icon-btn"><i class="date-icon icon-2"></i></button>
              <button class="icon-btn"><i class="date-icon icon-7"></i></button>
              <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
              <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
              <!--<button class="icon-btn"><i class="date-icon icon-14"></i></button>-->
              <button class="icon-btn"><i class="date-icon icon-m"></i></button>
              <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
              <button class="icon-btn"><i class="date-icon icon-30"></i></button>



            </div>
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

                        </div>

                        <div class="card">
                            <div class="card-body cbt display-none"  id="createPotok">
                                <div class="row">
                                    <div class="col ramka">
                                        <div class="b-group">
                                            <div class="col-sm-12 preference">
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с1" class="name-check">Клики</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с2" class="name-check">Trafficback</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с3" class="name-check">Подписки</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с4" class="name-check">CR</label>
                                                </div>
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с5" class="name-check">ИК</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                   <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с6" class="name-check">Выкупы</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с7" class="name-check">Платежи</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с8" class="name-check">Платежи партнёру</label>
                                                </div>
                                                <!------------->

                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с9" class="name-check">Активные</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                   <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с10" class="name-check">Отписки</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с11" class="name-check">Цена в нац. валюте</label>
                                                </div>
                                                <!------------->
                                                <!------------->
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с12" class="name-check">Доля после ОСС</label>
                                                </div>
                                                <!------------->

                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Коэфф. сверки с ОСС</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Коэфф. выплат</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Коэфф. роялти</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Gross Revenue</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Доход после ОСС</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Затраты реферал.</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Выплаты партнеру</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Роялти</label>
                                                </div>
                                                <div class="custom-mselect margin5">
                                                    <div class="ios-ui-select checked"><div class="inner"></div></div>
                                                    <label for="с13" class="name-check">Margin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                    

                                    <!--------------------------------------------->

                                </div>
                            </div>
                            <div class="card-body">

                            <div class="row">
                               
                                <div class="col-12 npr">
                                <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="assets/img/xls.svg" alt=""></a>
                                <i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;"></i>
                                <!--<i class="ti ti-import float-right" style="font-size: 24px; margin-bottom: 5px; margin: 0 10px 5px"></i>-->
                                    
                                    <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                                    <br>
                                    <div class="responsive-block statistic_table_wrapper" id="fullWidth">
                                        <table id="stats1" class="table  table-bordered nowrap userselecttext" style="width:100%;">
                                            <thead class="thead-light statistic_header">
                                                <tr>
                                                    <th class="sticky-header">Дата</th>
                                                    <th class="sticky-header">Клики</th>
                                                    <th class="sticky-header">ТБ</th>
                                                    <th class="sticky-header">Подписки</th>
                                                    <th class="sticky-header">CVR %</th>
                                                    <th class="sticky-header">ИК</th>
                                                    <th class="sticky-header">Выкупы</th>
                                                    <th class="sticky-header">Ребиллы</th>
                                                    <th class="sticky-header">Активные</th>
                                                    <th class="sticky-header">Отписки</th>
                                                    <th class="sticky-header">Сумма, руб</th>
                                                </tr>
                                            </thead>
                                            <tbody class="statistic_body">
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-down"></i>01.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 00:00</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 01:00</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-down"></i>02 Oct 02:00</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 1</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 2</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 3</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 4</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 5</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="doubledrop">
                                                    <td>02 Oct 02:00 6</td>
                                                    <td>1 055</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 03:00</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr class="drop">
                                                    <td><i class="ti ti-angle-right"></i>02 Oct 04:00</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>02.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>03.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>04.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>05.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>06.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>07.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>08.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="tal"><i class="ti ti-angle-right"></i>13.06.19</td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">1366</a></td>
                                                    <td><a href="#" data-toggle="modal" data-target="#smallModal">2626</a></td>
                                                    <td>35</td>
                                                    <td>24.40</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>213</td>
                                                    <td>751</td>
                                                    <td>8</td>
                                                    <td>833.50</td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="thead-light statistic_footer">
                                                <tr>
                                                    <th class="sticky-footer">ИТОГО</th>
                                                    <th class="sticky-footer">656232</th>
                                                    <th class="sticky-footer">44121</th>
                                                    <th class="sticky-footer">885656</th>
                                                    <th class="sticky-footer">22665</th>
                                                    <th class="sticky-footer">5665</th>
                                                    <th class="sticky-footer">4545454</th>
                                                    <th class="sticky-footer">656565</th>
                                                    <th class="sticky-footer">5555</th>
                                                    <th class="sticky-footer">3525323</th>
                                                    <th class="sticky-footer">54453563</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            </div>

                        </div>
<?php  include 'popup.php'; ?>

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
               
                </div>

                <!-- Right Panel -->

                <!-- Scripts -->
                <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
                <script src="assets/js/jquery.matchHeight.min.js"></script>
                <script src="assets/js/main.js"></script>
                <script src="assets/js/scroll/perfect-scrollbar.jquery.min.js"></script>
                <script src="assets/js/jquery.touchSwipe.js"></script>
                <script src="assets/js/swipe.js"></script>



<script type="text/javascript">
    jQuery(function ($){
         $(".ios").iosCheckbox();
    });
</script>
<script>
var MyWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var BrowsWidth = document.documentElement.clientWidth;
if ($(window).width() < 1024) {
//document.getElementById('fullWidth').style.width = MyWidth + "px";
document.getElementById('fullWidth').style.width = BrowsWidth + "px";
document.getElementById('fullWidth').style.maxWidth = "100%";
document.getElementById('fullWidth').style.minWidth = "100%";

};
</script>
<script>
$(window).on("load resize", function(event) {
var windowWidthS = $(window).width();
if (windowWidthS < 1381) {
$('#blockInputOperators').addClass('col-lg-4');
$('#blockInputOffers').addClass('col-lg-4');
$('#blockInputSpace').css("display", "none");
$('#blockInputPresets').addClass('col-lg-4');
$('body').addClass('open');
$('#blockInputDatapicker').addClass('col-lg-3');
$('#blockInputPeriod').removeClass('col-lg-4');
$('#blockInputPeriod').addClass('col-lg-3');

} else {
$('#blockInputOperators').removeClass('col-lg-4');
$('#blockInputOffers').removeClass('col-lg-4');
$('#blockInputSpace').css("display", "block");
$('#blockInputPresets').removeClass('col-lg-4');
$('body').removeClass('open');

}

});
</script>

<script>
jQuery(document).ready(function() {
jQuery(".standardSelect").chosen({

disable_search_threshold: 10,
no_results_text: "Oops, nothing found!",
width: "100%"
});
});
</script>
<script>
$('.copyClick').focus(function() {
$(this).select();
$(this).siblings('input.linkToCopy').select();
document.execCommand("copy");
$('#alertCopy').show('fast');
setTimeout(function() {
$("#alertCopy").hide('slow');
}, 4000);
});
</script>

<div class="alert-copy" style="display: none;" id="alertCopy"><i class="fa fa-code"></i><span>Текст скопирован</span></div>
<script>
function link2() {
location.href = "http://lpt.playmobile.ru/offers/skrom/affimob-redis/pk2/offers.html"
}

function auto_grow(element) {
element.style.height = "5px";
element.style.height = (element.scrollHeight) + "px";
}
</script>
<script>
function clickMe() {
$(".linkToCopy").val("http://s2s.affimob.com/click?key=eromix&offer_id=11694&tmpl=eromix274&partner_id=125198&source_id=0&pt_id=%7BPK%7D");

}
</script>
<script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
<script>
    $('table').table_scroll();
</script>



                
    </body>



</html>