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
    /*! CSS Used from: Embedded */
.scroll-area-md {
    height: 473px;
    max-height: 78vh;
    overflow-x: auto;
    overflow-y: scroll;
    box-sizing: border-box;
    position: relative;
    border-bottom: 1px solid #f3f3f3;
    margin-bottom: 40px;
}
.border-light{border-color:#eeeeee;}
*,*::before,*::after{box-sizing:border-box;}
ul{margin-top:0;margin-bottom:1rem;}
small{font-size:80%;}
img{vertical-align:middle;border-style:none;}
small{font-size:80%;font-weight:400;}
/*! CSS Used from: Embedded */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-angle-up:before{content:"&#61702;";}
.fa-angle-down:before{content:"&#61703;";}/*! CSS Used from: Embedded */
.ps{overflow:hidden!important;overflow-anchor:none;-ms-overflow-style:none;touch-action:auto;-ms-touch-action:auto;}
.ps__rail-x{display:none;opacity:0;transition:background-color .2s linear, opacity .2s linear;-webkit-transition:background-color .2s linear, opacity .2s linear;height:15px;bottom:0px;position:absolute;}
.ps__rail-y{display:none;opacity:0;transition:background-color .2s linear, opacity .2s linear;-webkit-transition:background-color .2s linear, opacity .2s linear;width:15px;right:0;position:absolute;}
.ps--active-y > .ps__rail-y{display:block;background-color:transparent;}
.ps:hover > .ps__rail-x,.ps:hover > .ps__rail-y{opacity:0.6;}
.ps .ps__rail-x:hover,.ps .ps__rail-y:hover,.ps .ps__rail-x:focus,.ps .ps__rail-y:focus{background-color:#eee;opacity:0.9;}
.ps__thumb-x{background-color:#aaa;border-radius:6px;transition:background-color .2s linear, height .2s ease-in-out;-webkit-transition:background-color .2s linear, height .2s ease-in-out;height:6px;bottom:2px;position:absolute;}
.ps__thumb-y{background-color:#aaa;border-radius:6px;transition:background-color .2s linear, width .2s ease-in-out;-webkit-transition:background-color .2s linear, width .2s ease-in-out;width:6px;right:2px;position:absolute;}
.ps__rail-x:hover > .ps__thumb-x,.ps__rail-x:focus > .ps__thumb-x{background-color:#999;height:11px;}
.ps__rail-y:hover > .ps__thumb-y,.ps__rail-y:focus > .ps__thumb-y{background-color:#999;width:11px;}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none){
.ps{overflow:auto!important;}
}
.widget-content-right {
    float: right;
}
.widget-content-left {
    float: left;
}
/*! CSS Used from: Embedded */
*,*::before,*::after{box-sizing:border-box;}
small{font-size:80%;}
small{font-size:80%;font-weight:400;}
/*! CSS Used from: Embedded */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-angle-up:before{content:"";}
.row.cardPadding {
    padding: 5px 10px 0px 10px;
    justify-content: space-between;
}
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
                                                                                <div class="jss10"><span class="ss">29.12.89 - 11.02.20</span></div>
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
                                            <div class="col-md-12 col-lg-6 col-xl-5">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h6 class="text-muted text-uppercase font-size-md opacity-7 mb-3 font-weight-normal">Динамика офферов</h6>
            <div class="border-light card-border scroll-area-md card">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                                                <div class="widget-subheading mt-1 opacity-10">
                                                    <div class="badge badge-pill badge-primary">$53</div>
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">$</small><span>542</span><small class="text-danger pl-2"><fa name="angle-up" _nghost-fmy-c2="" ng-reflect-name="angle-up"><i _ngcontent-fmy-c2="" aria-hidden="true" class="ti ti-angle-up" ng-reflect-klass="ti ti-angle-up" ng-reflect-ng-class=""></i></fa></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                                                <div class="widget-subheading mt-1 opacity-10">
                                                    <div class="badge badge-pill badge-primary">$381</div>
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">$</small> 692 <small class="text-muted pl-2"><fa name="angle-up" _nghost-fmy-c2="" ng-reflect-name="angle-up"><i _ngcontent-fmy-c2="" aria-hidden="true" class="ti ti-angle-up" ng-reflect-klass="ti ti-angle-up" ng-reflect-ng-class=""></i></fa></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3"><img alt="" class="rounded-circle" src="http://newpk.skrom.dev-04.affimob.pro/images/beeline.png" width="38"></div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">11458 | MTS Tvmood 25/1</div>
                                                <div class="widget-subheading mt-1 opacity-10">
                                                    <div class="badge badge-pill badge-primary">$74</div>
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">$</small> 395 <small class="text-muted pl-2"><fa name="angle-down" _nghost-fmy-c2="" ng-reflect-name="angle-down"><i _ngcontent-fmy-c2="" aria-hidden="true" class="ti ti-angle-down" ng-reflect-klass="ti ti-angle-down" ng-reflect-ng-class=""></i></fa></small></div>
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
                                                    <div class="badge badge-pill badge-primary">$7</div>
                                                </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="fsize-2 text-success"><small class="opacity-5 pr-1">$</small> 619 <small class="text-muted pl-2"><fa name="angle-down" _nghost-fmy-c2="" ng-reflect-name="angle-down"><i _ngcontent-fmy-c2="" aria-hidden="true" class="ti ti-angle-down" ng-reflect-klass="ti ti-angle-down" ng-reflect-ng-class=""></i></fa></small></div>
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