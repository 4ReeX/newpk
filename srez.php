<!DOCTYPE html>
<html class="no-js" lang="">
<?php include 'head.php'; ?>

    <body>
        <!-- Left Panel -->
        <?php  //говорит нам что начинается php код
include 'sidebar-admin.php';  //любой файл который мы хотим подключить в этой части документа
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
                            <div class="row">
                                <div class="card">
                                <div class="card-header">
                                <h2 class="chtitle">Срезы</h2>
                                </div>
                                <div class="card-body">
<div class="form-row col-lg-12">
<div class="form-group col-lg-3 col-md-6 col-sm-12">
<div class="input-group">
<div class="jss8">
<textarea name="ip" id="" rows="10" class="iprange">

</textarea>
<div class="circle-group ">
<button class="circle-btn" title="Загрузить диапазоны"><i class="ti ti-upload"></i></button>
</div>
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



<!-- The Modal -->

                <!-- Right Panel -->

                <!-- Scripts -->
                <?php include 'scripts.php'; ?>
                <script>
                	function linkTi() {
                		window.open(
                			'https://themify.me/themify-icons',
                			'_blank'
                			);
                	};
                </script>



    </body>

</html>