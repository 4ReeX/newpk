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
                                <!--<?php include 'card-header.php'; ?>-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12">
                                                <button type="button" class="btn btn-outline-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                                    Создать поток
                                                </button>

                                                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="float: left; display: flex;">
                                                                <h5 class="modal-title"><br></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col ramka">
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
                                                                            <div class="btn-group" role="group" aria-label="First group" style="padding: 0px 15px 0px 0px;">
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
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr>

                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div class="col-12">
                                                <div class="responsive-block" id="fullWidth">
                                                    <table class="table simple-table align-left no-wrap table-sm" id="partner-projects">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th style="min-width: 120px;">Название потока</th>
                                                                <th>Trafficback ссылка</th>
                                                                <th>Postback ссылка</th>
                                                                <th style="min-width: 60px; width: 60px;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0 | Поток по умолчанию</td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="http://imt.affimob.com/click.php?c=1214&amp;key=4c5668f132r8012b7nq0qlo0&amp;offer_id=11279&amp;channel_id=124956&amp;clickid={clickid}&amp;user_id={user_id}&amp;campaign={campaign}" style="min-width: 150px;"></span></td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="http://binom.affimob.pro/click.php?cnv_id={pt_id}&amp;payout={income}&amp;cnv_status={status}&amp;cnv_status2={pay_cnt}&amp;event5={pay_cnt}" style="min-width: 150px;"></span></td>
                                                                <td><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1 | Beeline propeller</td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2 | MTS N-A 20rub </td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3 | MP</td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4 | T-stark-click</td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="" style="min-width: 150px;"></span></td>
                                                                <td><span class="link"><input disabled="" type="text" placeholder="Используется ссылка 'Потока по умолчанию'" class="linkToCopy copyClick form-control form-control-sm" value="http://binom.affimob.pro/click.php?cnv_id={pt_id}&amp;cnv_status={status}&amp;cnv_status2={pay_cnt}" style="min-width: 150px;"></span></td>
                                                                <td><i class="ti ti-pencil" title="Редактировать" style="color: rgb(65, 68, 85);"></i><i class="ti ti-close" title="Удалить" style="color: rgb(65, 68, 85);"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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

            <!-- Right Panel -->

            <!-- Scripts -->
            <?php include 'scripts.php'; ?>

                <div class="alert-copy" style="display: none;" id="alertCopy"><i class="fa fa-code"></i><span>Текст скопирован</span></div>
                </script>
    </body>

</html>