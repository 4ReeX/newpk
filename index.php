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
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="react-select-multiple">Дата</label>
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
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
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
                                                                        <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Оператор</label>
                                                                        <button class="icon-btn"><img src="images/beeline.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/megafon.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/mts.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/tele2.png" alt=""></button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div id="traffic-chart" class="traffic-chart" style="background: #d3d3d3; display: flex; align-items: center; justify-content: center; color: #666; font-weight: 700; width: 100%; height: 400px;">График из панели Антона

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
                                            <div class="col-md-12 col-lg-6 col-xl-5" id="dynamic">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-body">

            <h6 class="text-muted text-uppercase font-size-md opacity-7 mb-3 font-weight-normal">Динамика офферов</h6>
            <i id="PopoverHelpIcon" class="ti ti-help-alt help-icon" style="display: inline-block;"></i>
            <div class="border-light card-border scroll-area-md card">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                               <li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-success" title="доход р.">9856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">% </small> 5.0 <small class="text-muted pl-2"><i class="ti ti-angle-up"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-success" title="доход р.">9856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">% </small> 5.0 <small class="text-muted pl-2"><i class="ti ti-angle-up"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-success" title="доход р.">9856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">% </small> 5.0 <small class="text-muted pl-2"><i class="ti ti-angle-up"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-success" title="доход р.">9856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">% </small> 5.0 <small class="text-muted pl-2"><i class="ti ti-angle-up"></i></small></div>
            </div>
        </div>
    </div>
</li>

<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">12648 | Ремембер</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-danger" title="доход р.">4856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-danger"><small class="opacity-5 pr-1">% </small> 113.0 <small class="text-muted pl-2"><i class="ti ti-angle-down"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">12648 | Ремембер</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-warning" title="доход р.">4856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-warning"><small class="opacity-5 pr-1">% </small> 20.0 <small class="text-muted pl-2"><i class="ti ti-angle-down"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">12648 | Ремембер</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-danger" title="доход р.">4856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-danger"><small class="opacity-5 pr-1">% </small> 113.0 <small class="text-muted pl-2"><i class="ti ti-angle-down"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-success" title="доход р.">9856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">% </small> 5.0 <small class="text-muted pl-2"><i class="ti ti-angle-up"></i></small></div>
            </div>
        </div>
    </div>
</li>
<li class="border-bottom-0 list-group-item">
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
            <div class="widget-content-left">
                <div class="widget-heading">12648 | Ремембер</div>
                <div class="widget-subheading mt-1 opacity-10">
                    <div class="badge badge-pill badge-warning" title="доход р.">4856₽</div>
                </div>
            </div>
            <div class="widget-content-right">
                <div class="fsize-2 text-warning"><small class="opacity-5 pr-1">% </small> 20.0 <small class="text-muted pl-2"><i class="ti ti-angle-down"></i></small></div>
            </div>
        </div>
    </div>
</li>


                            </ul>
                        </div>
                                            <!-- /.card-body -->
                                        </div>
                                </div>
                                <!-- /.row -->

                            </div>

                        </div>
                        <!-- /# column -->
<?php include 'news.php'; ?>




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