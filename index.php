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
<style>

</style>

                <!-- /header -->
                <!-- Content -->
                <div class="content">
                    <!-- Animated -->
                    <div class="animated fadeIn">
                        <!-- Widgets --------------------- -->
                        <!-- /Widgets --------------------- -->
                        <!--  Traffic  -->
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <!-- <?php include 'card-header.php'; ?>   -->
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-7 no_left_right_padding">

                                                <div class="mb-3 card">
                                                    <div class="row cardPadding">
                                                        <div class="col-auto small-col no_left_right_padding" id="blockInputOffers">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                                        <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl">
                                                                            <div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text">
                                                                                <div class="jss10"><input type="date" value="06.04.2020" class="ss noBorderInput"></div>
                                                                                <div class=" css-1wy0on6">
                                                                                    <div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-auto small-col row no_left_right_padding  w33-3" id="blockInputPeriod">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="nowrap-custom">
                                                                        
                                                                        <button class="icon-btn selected" title="Сегодня"><i class="date-icon icon-day"></i></button>
                                                                        <button class="icon-btn" title="2 дня"><i class="date-icon icon-2"></i></button>
                                                                        <button class="icon-btn" title="7 дней"><i class="date-icon icon-7"></i></button>
                                                                        <button class="icon-btn" title="30 дней"><i class="date-icon icon-30"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-auto  small-col row no_left_right_padding  w33-3" id="blockInputPeriod">
                                                            <div class="jss8">
                                                                <div class=" css-2b097c-container">
                                                                    <div class="nowrap-custom">
                                                                        
                                                                        <button class="icon-btn"><img src="images/beeline.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/megafon.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/mts.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/tele2.png" alt=""></button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div id="traffic-chart" class="traffic-chart" style="background: #d3d3d3; display: flex; align-items: center; justify-content: center; color: #666; font-weight: 700; width: 100%; height: 400px;"><img src="images/gr.png" alt="" style="width: 100%; height: 100%;">

                                                    </div>
                                                    <br>
                                                    <div class="row grid6">
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2 fade-5">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(181, 57, 48);"><i id="PopoverDynamicIcon-Клики" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;Клики</h4>
                                                                <div class="por-txt">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2 fade-5">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(243, 148, 34);"><i id="PopoverDynamicIcon-Trafficback" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;Trafficback</h4>
                                                                <div class="por-txt">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(85, 174, 149);"><i id="PopoverDynamicIcon-Подписки" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;Подписки</h4>
                                                                <div class="por-txt">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(253, 119, 146);"><i id="PopoverDynamicIcon-CR" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;CR</h4>
                                                                <div class="por-txt">0%</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2 fade-5">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(83, 126, 197);"><i id="PopoverDynamicIcon-Ребиллы" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;Ребиллы</h4>
                                                                <div class="por-txt">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-3 col-6 w33-3">
                                                            <div class="progress-box progress-2">
                                                                <h4 class="por-title" style="border-bottom: 2px solid rgb(116, 92, 151);"><i id="PopoverDynamicIcon-Доход" class="ti ti-layout-line-solid">&nbsp;0.0%</i>&nbsp;Доход</h4>
                                                                <div class="por-txt">0p.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php include 'dinamica.php'; ?>
                        
                            <?php include 'news.php'; ?>
                           
                        <!-- /# column -->





                    </div>
                    <!--  /Traffic -->
                    <div class="clearfix"></div>

                </div>
                <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->

        <!-- /.site-footer -->
        </div>
        <!-- /#right-panel -->
        <!-- Scripts -->
<?php include 'scripts.php'; ?>

</body>

</html>