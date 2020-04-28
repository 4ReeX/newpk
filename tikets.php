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
                                <div class="i-buttons">
                                    <button class="circle-btn float-left" title="Создать тикет"><i class="ti ti-pencil-alt"></i></button>
                                <button class="circle-btn float-left" title="Закрыть"><i class="ti ti-lock"></i></button>
                                <button class="circle-btn float-left" title="Ждут ответа"><i class="ti ti-comment"></i></button>
                                <button class="circle-btn float-left" title="Отвеченные"><i class="ti ti-comment-alt"></i></button>
                                </div>
                                

                            </div>
                            <div class="card-body">
                                <table id="table-tikets" class="table simple-table align-left table-sm">
                                <thead class="thead-light">
                                    <tr>
                                        <th></th>
                                        <th>id</th>
                                        <th>Тема</th>
                                        <th>Последнее сообщение</th>
                                        <th>Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="tikets ios-ui-select"><div class="inner"></div></div></td>
                                        <td>644</td>
                                        <td class="tiket-theme"><span class="openTiket">Помогите мне кто нибудь! желательно финансово, карантин понимаете ли!</span></td>
                                        <td><span class="tiket-date">28 Апреля 2020</span> в <span class="tiket-time">15:40</span></td>
                                        <td><button class="circle-btn float-left" title="Закрыть"><i class="ti ti-unlock"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><div class="tikets ios-ui-select checked"><div class="inner"></div></div></td>
                                        <td>644</td>
                                        <td class="tiket-theme"><span class="openTiket">У меня ничего не работает, как заставить этих людей копать!?</span></td>
                                        <td><span class="tiket-date">28 Апреля 2020</span> в <span class="tiket-time">15:40</span></td>
                                        <td><button class="circle-btn float-left" title="Закрыть"><i class="ti ti-lock"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><div class="tikets ios-ui-select"><div class="inner"></div></div></td>
                                        <td>644</td>
                                        <td class="tiket-theme"><span class="openTiket">Мы сидим на изоляции и нам не весело, поэтому пишем в саппорт</span></td>
                                        <td><span class="tiket-date">28 Апреля 2020</span> в <span class="tiket-time">15:40</span></td>
                                        <td><button class="circle-btn float-left" title="Закрыть"><i class="ti ti-lock"></i></button></td>
                                    </tr>
                                </tbody>
                                
                               
                                </table>
                            </div>
                        </div>

                    </div>
            </div>

            </div>
            </div>
<?php include 'scripts.php'; ?>
<?php include 'chat-tiket.php'; ?>

</body>
</html>