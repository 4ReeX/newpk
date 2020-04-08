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
                        <div class="card no-mb">
                            <div class="card-header">
                                <nav class="navitab">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active show" data-toggle="tab" href="#" role="tab" onclick="openTabs1();" aria-selected="true">Подключенные</a>
                                        <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-start" aria-selected="false" onclick="openTabs2();">Не активные</a>
                                        <a class="nav-item nav-link" id="oss-tab" data-toggle="tab" href="#" role="tab" aria-controls="custom-nav-oss" aria-selected="false" onclick="openTabs3();">Устаревшие</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="animated fadeIn">

                            <div class="custom-tab">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="first" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <!--start card-->
                                        <div class="card no-bor-rad-top">
                                            <div class="card-body fortabs">
                                                <?php include 'admin-offer-filters.php'; ?>
                                            </div>
                                        </div>
                                        <!---end card-->
                                        <div class="card no-bor-rad-top">

                                            <div class="card-body">
                                                <section id="offers-list">
                                                    <?php include 'offer-block.php'; ?>
                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade show" id="second" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <!--start card-->
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
                                                <?php include 'admin-offer-filters.php'; ?>
                                            </div>
                                        </div>
                                        <!---end card-->
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
                                                <section id="offers-list2">
                                                    <?php include 'offer-block.php'; ?>
                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade show" id="third" style="display: block;    overflow-x: auto;    width: 100%;">
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
                                                <?php include 'admin-offer-filters.php'; ?>
                                            </div>
                                        </div>

                                        <!----end card-body--->
                                        <div class="card card no-bor-rad-top">
                                            <div class="card-body">
												<section id="offers-list2">
                                                    <?php include 'offer-block.php'; ?>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            $('.create-links').html("Изменить");
                            $('.create-links').attr("data-target", "#mediumModal1");
                        </script>
    </body>

</html>