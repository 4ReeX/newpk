<?php include 'head.php'; ?>

                <div class="content">
                    <!-- Animated -->
                    <div class="animated fadeIn">
                        <!-- Widgets --------------------- -->
                        <!-- /Widgets --------------------- -->
                        <!--  Traffic  -->
                        <?php include 'advertising.php'; ?>
                        <div class="row slide">
                            <div class="col-md-12">
                                <div>
                                    <!-- <?php include 'card-header.php'; ?>   -->
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-7 no_left_right_padding">

                                                <div class="mb-3 card">
                                                    <div class="card-header chart">
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
                                                                    <div class="nowrap-custom pt-0">
                                                                        
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
                                                                    <div class="nowrap-custom pt-0">
                                                                        
                                                                        <button class="icon-btn"><img src="images/beeline.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/megafon.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/mts.png" alt=""></button>
                                                                        <button class="icon-btn"><img src="images/tele2.png" alt=""></button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    </div>
                                                    

                                                    <div id="traffic-chart" class="traffic-chart" style="display: flex; align-items: center; justify-content: center; color: #666; font-weight: 700; width: 100%; height: 400px;">

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
<script>
    var arrowLeft = 'ti-arrow-circle-left';
    var arrowRight = 'ti-arrow-circle-right';
    var arrowDown = 'ti-arrow-circle-down';
    var arrowUp = 'ti-arrow-circle-up';

    $('.rollup').on("click", function () {
        if (MyWidth>425 && $('.rollup').hasClass(arrowLeft)) {
            $('.rollup').removeClass(arrowLeft);
            $('.rollup').addClass(arrowRight);
            $('.advertising').addClass('mini');
            $('.adv-title').html('<b>ADV<b>');
            $('.adv-title').height( 33 );
            $('.slogan1').hide();
            $('.adv-info').hide();
        }else {
            $('.advertising').removeClass('mini');
            $('.rollup').addClass('ti-arrow-circle-left');
            $('.rollup').removeClass(arrowRight);
            $('.adv-title').text('Рекламные сети');
            $('.slogan1').show();
            $('.adv-info').show();
            $('.adv-title').height( 'auto' );
        }
        if (MyWidth<425 && $('.rollup').hasClass(arrowLeft)) {
            $('.rollup').removeClass(arrowLeft);
            $('.adv-list').toggle();
        }else {
            $('.rollup').addClass(arrowUp);
            $('.rollup').removeClass(arrowDown);
        }

    });
    $('.adv-item').on("click", function () {
        window.location.href = "/fin.php";
    });
        



</script>

</body>

</html>