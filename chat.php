<!doctype html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <title>Affimob.com</title>
               <meta name="description" content="Ela Admin - HTML5 Admin Template">
               <meta name="viewport" content="width=device-width">
               <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
               <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
               <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
               <link rel="stylesheet" href="assets/css/style.css">
               <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
               <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
               <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
               <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
               <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet"/>
               <link rel="stylesheet" href="assets/css/pages/dashboard1.css" type="text/css">
               <link rel="stylesheet" href="assets/css/iosCheckbox.css" type="text/css"/>
               <link rel="stylesheet" href="assets/datapicker/css/bootstrap-datepicker.standalone.css">
               
               <script src="assets/js/iosCheckbox.js"></script>
               <link rel="stylesheet" type="text/css" href="assets/tooltipster/css/tooltipster.bundle.min.css" />
               <link rel="stylesheet" href="assets/css/media.css" type="text/css">
               <script type="text/javascript" src="assets/tooltipster/js/tooltipster.bundle.min.js"></script>
               <script type="text/javascript" src="assets/datapicker/js/bootstrap-datepicker.js"></script>
               <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
               <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
               <style>
                  #weatherWidget .currentDesc {
                  color: #ffffff!important;
                  }
                  .traffic-chart {
                  min-height: 335px;
                  }
                  #flotPie1  {
                  height: 150px;
                  }
                  #flotPie1 td {
                  padding:3px;
                  }
                  #flotPie1 table {
                  top: 20px!important;
                  right: -10px!important;
                  }
                  .chart-container {
                  display: table;
                  min-width: 270px ;
                  text-align: left;
                  padding-top: 10px;
                  padding-bottom: 10px;
                  }
                  #flotLine5  {
                  height: 105px;
                  }
                  #flotBarChart {
                  height: 150px;
                  }
                  #cellPaiChart{
                  height: 160px;
                  }
                  .progress-box:hover, .progress-box:active {
                  cursor: pointer;
                  background: #f0f0f0;
                  }
                  .no-drop {pointer-events: none; }
                  .no-drop:hover { cursor: no-drop; }
               </style>
            </head>
            <body>
               <!-- Left Panel -->
              <aside id="left-panel" class="left-panel">
                  <nav class="navbar navbar-expand-sm navbar-default">
                     <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                          <li>
                              <a href="index.php"><i class="menu-icon fa fa-laptop" title="Дашборд"></i>Дашборд</a>
                           </li>
                           <li>
                              <a href="stats.php"><i class="menu-icon ti ti-stats-up" title="Статистика"></i>Статистика</a>
                           </li>
                           <li>
                              <a href="offers.php"><i class="menu-icon ti ti-layout-grid3" title="Статистика"></i>Офферы</a>
                           </li>
                           <li>
                           	<a href="offers.php"><i class="menu-icon ti ti-vector"></i>Смартлинки</a>
                           </li>
                           <li>
                              <a href="potok.html"><i class="menu-icon ti ti-layout-list-post"  title="Потоки"></i>Потоки</a>
                           </li>
                           <li class="no-drop">
                              <a href="offers.php" class="no-drop"><i class="menu-icon ti ti-rss-alt" title="Новости"></i>Новости</a>
                           </li>
                           <li>
                              <a href="fin.php"><i class="menu-icon ti ti-help-alt"title="ФАКЬЮ"></i>Финансы</a>
                           </li>
                           <li>
                              <a href="faq.php"><i class="menu-icon ti ti-help-alt"title="ФАКЬЮ"></i>FAQ</a>
                           </li>
                           
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </nav>
               </aside>
               <!-- /#left-panel -->
               <!-- Right Panel -->
               <div id="right-panel" class="right-panel">
                  <!-- Header-->
                  <header id="header" class="header">
                     <div class="top-left">
                        <div class="navbar-header">
                           <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
                           <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                           <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                        </div>
                     </div>
                     <div class="top-right">
                        <div class="header-menu">
                           <div class="header-left">
                              56565 <i class="fa fa-rub"></i>
                              <div class="dropdown hide">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                 <i class="fa fa-bell"></i>
                                 <span class="count bg-danger">3</span>
                                 </button>
                                 <div class="dropdown-menu" id="notific">
                                    <p class="red">У вас 3 оповещения</p>
                                    <a class="dropdown-item media" href="#">
                                       <i class="fa fa-check"></i>
                                       <p>Сервер был перезагружен 1 минуту назад.</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                       <i class="ti ti-info-alt"></i>
                                       <p>Установлено обновление</p>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                       <i class="fa fa-warning"></i>
                                       <p>Через час ожидается плановый пересчет статистики.</p>
                                    </a>
                                 </div>
                              </div>
                              <div class="dropdown hide">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                 <i class="fa fa-envelope"></i>
                                 <span class="count bg-primary">4</span>
                                 </button>
                                 <div class="dropdown-menu" id="messages">
                                    <p class="red">У вас 4 сообщения</p>
                                    <a class="dropdown-item media" href="#">
                                       <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg" class="avatar"></span>
                                       <div class="message media-body">
                                          <span class="name float-left">Support</span>
                                          <span class="time float-right">только что</span>
                                          <p>Привет. Добавили Вам новые офферы, обязательно попробуйте.</p>
                                       </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                       <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg" class="avatar"></span>
                                       <div class="message media-body">
                                          <span class="name float-left">Иосиф Сталин</span>
                                          <span class="time float-right">5 минут назад</span>
                                          <p>Ты лучший! Понял?! Расстрелять!</p>
                                       </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                       <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg" class="avatar"></span>
                                       <div class="message media-body">
                                          <span class="name float-left">Владимир Владимирович</span>
                                          <span class="time float-right">10 минут назад</span>
                                          <p>Началась война, всем срочно запустить трафик</p>
                                       </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                       <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg" class="avatar"></span>
                                       <div class="message media-body">
                                          <span class="name float-left">Красивая Малышка</span>
                                          <span class="time float-right">15 минут назад</span>
                                          <p>хочешь покажу киску?</p>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="user-area dropdown float-right">
                              <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                              </a>
                              <div class="user-menu dropdown-menu">
                                 <a class="nav-link" href="#"><i class="fa fa-bell"></i>Оповещения <span class="count">13</span></a>
                                 <a class="nav-link" href="user.html"><i class="fa fa-user"></i>Мой профиль</a>
                                 <a class="nav-link" href="#"><i class="fa fa-cog"></i>Настройки</a>
                                 <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </header>
                  <!-- /header -->
                  <!-- Content -->
                  <div class="content">
                     <!-- Animated -->
                     <div class="animated fadeIn">
                        <!-- Widgets  -->
                        <div class="row">
                        </div>
                        <!-- /Widgets -->
                        <!--  Traffic  -->
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="card">
                                 <div class="card-body">
                                    <h4 class="box-title">Traffic </h4>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-8">
                                       <div class="card-body">
                                          <!-- <canvas id="TrafficChart"></canvas>   -->
                                          <div id="traffic-chart" class="traffic-chart" style="background: #d3d3d3; display: flex; align-items: center; justify-content: center; color: #666; font-weight: 700;">График из панели Антона

                                          <input type="text" id="text-input" name="text-input" placeholder="датапикер появляющийся при нажатии" class="form-control datagraph">
                                          <div class="ossgraph">
                                             <div class="oss-icon">
                                             <img src="assets/img/beeline.png" alt="">  
                                             </div>
                                             <div class="oss-icon">
                                             <img src="assets/img/mts.png" alt="">  
                                             </div>
                                             <div class="oss-icon">
                                             <img src="assets/img/megafon.png" alt="">  
                                             </div>
                                             <div class="oss-icon">
                                             <img src="assets/img/tele2.png" alt="">
                                             </div>
                                          </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                             <div class="col-lg-3 col-sm-6">
                                                <div class="progress-box progress-1">
                                                   <h4 class="por-title">Клики</h4>
                                                   <div class="por-txt">96,930</div>
                                                   <div class="progress mb-2" style="height: 5px;">
                                                      <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6">
                                                <div class="progress-box progress-2">
                                                   <h4 class="por-title">Подписки</h4>
                                                   <div class="por-txt">3,220</div>
                                                   <div class="progress mb-2" style="height: 5px;">
                                                      <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6">
                                                <div class="progress-box progress-2">
                                                   <h4 class="por-title">Ребиллы</h4>
                                                   <div class="por-txt">29,658</div>
                                                   <div class="progress mb-2" style="height: 5px;">
                                                      <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3 col-sm-6">
                                                <div class="progress-box progress-2">
                                                   <h4 class="por-title">Трафикбек</h4>
                                                   <div class="por-txt">99,658</div>
                                                   <div class="progress mb-2" style="height: 5px;">
                                                      <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                       <div class="col-lg-4">
                                          <i class="ti ti-help-alt help-icon" title="Отношение подписок к подпискам прошлого дня в то же время. Выключатели управляют набором офферов на графике"></i>

                                          <div class="card-body">
                                       
                                          <div class="responsive-block" id="fullWidth">
                                             <div class="top-block">
                                                <div class="check-offer">
                                                   <input type="checkbox" id="checkbox2" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select"><div class="inner"></div></div>   
                                                   </div>
                                                <i class="ti ti-stats-up">&nbsp;24%</i>
                                             </div>
                                             <div class="content-block">
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1 ssssssadsdasdasdasdas</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                                <div class="offer-line">
                                                   <div class="check-offer">
                                                   <input type="checkbox" id="checkbox3" name="checkoffer" value="1" class="ios" data-ios-checkbox="true" style="display: none;">
                                                  <div class="ios-ui-select checked"><div class="inner"></div></div>   
                                                   </div>
                                                   <i class="ti ti-stats-up">&nbsp;12%</i>
                                                   <div class="name-offer">11458 | MTS Tvmood 25/1</div>
                                                   <div class="oss-icon">
                                                      <img src="assets/img/beeline.png" alt="">  
                                                   </div>
                                                </div>
                                                <!-------end offer-line------>
                                             </div>
                                             
                                          </div>
                                    </div>
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
               <div class="row">
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title box-title">Чеклист дел</h4>
                           <div class="card-content">
                              <div class="todo-list">
                                 <div class="tdl-holder">
                                    <div class="tdl-content">
                                       <ul>
                                          <li>
                                             <label>
                                             <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                             <a href='#' class="fa fa-times"></a>
                                             <a href='#' class="fa fa-pencil"></a>
                                             <a href='#' class="fa fa-check"></a>
                                             </label>
                                          </li>
                                          <li>
                                             <label>
                                             <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                             <a href='#' class="fa fa-times"></a>
                                             <a href='#' class="fa fa-pencil"></a>
                                             <a href='#' class="fa fa-check"></a>
                                             </label>
                                          </li>
                                          <li>
                                             <label>
                                             <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                             <a href='#' class="fa fa-times"></a>
                                             <a href='#' class="fa fa-pencil"></a>
                                             <a href='#' class="fa fa-check"></a>
                                             </label>
                                          </li>
                                          <li>
                                             <label>
                                             <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                             <a href='#' class="fa fa-times"></a>
                                             <a href='#' class="fa fa-pencil"></a>
                                             <a href='#' class="fa fa-check"></a>
                                             </label>
                                          </li>
                                          <li>
                                             <label>
                                             <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                             <a href='#' class="fa fa-times"></a>
                                             <a href='#' class="fa fa-pencil"></a>
                                             <a href='#' class="fa fa-check"></a>
                                             </label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.todo-list -->
                           </div>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title box-title">Live Chat</h4>
                           <div class="card-content">
                              <div class="messenger-box">
                                 <ul>
                                    <li>
                                       <div class="msg-received msg-container">
                                          <div class="avatar">
                                             <img src="images/avatar/64-1.jpg" alt="">
                                             <div class="send-time">11.11 am</div>
                                          </div>
                                          <div class="msg-box">
                                             <div class="inner-box">
                                                <div class="name">
                                                   John Doe
                                                </div>
                                                <div class="meg">
                                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /.msg-received -->
                                    </li>
                                    <li>
                                       <div class="msg-sent msg-container">
                                          <div class="avatar">
                                             <img src="images/avatar/64-2.jpg" alt="">
                                             <div class="send-time">11.11 am</div>
                                          </div>
                                          <div class="msg-box">
                                             <div class="inner-box">
                                                <div class="name">
                                                   John Doe
                                                </div>
                                                <div class="meg">
                                                   Hay how are you doing?
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /.msg-sent -->
                                    </li>
                                 </ul>
                                 <div class="send-mgs">
                                    <div class="yourmsg">
                                       <input class="form-control" type="text">
                                    </div>
                                    <button class="btn msg-send-btn">
                                    <i class="pe-7s-paper-plane"></i>
                                    </button>
                                 </div>
                              </div>
                              <!-- /.messenger-box -->
                           </div>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
               </div>
               <!-- /To Do and Live Chat -->
               <!-- Calender Chart Weather  -->
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="card">
                        <div class="card-body">
                           <!-- <h4 class="box-title">Chandler</h4> -->
                           <div class="calender-cont widget-calender">
                              <div id="calendar"></div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card -->
                  </div>
                  
               </div>
               <!-- /Calender Chart Weather -->
               <!-- Modal - Calendar - Add New Event -->
               <div class="modal fade none-border" id="event-modal">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                           <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /#event-modal -->
               <!-- Modal - Calendar - Add Category -->
               <div class="modal fade none-border" id="add-category">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                           <form>
                              <div class="row">
                                 <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                 </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                       <option value="success">Success</option>
                                       <option value="danger">Danger</option>
                                       <option value="info">Info</option>
                                       <option value="pink">Pink</option>
                                       <option value="primary">Primary</option>
                                       <option value="warning">Warning</option>
                                    </select>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /#add-category -->
               </div>
               <!-- .animated -->
               </div>
               <!-- /.content -->
               <div class="clearfix"></div>
               <!-- Footer -->
               <footer class="site-footer">
                  <div class="footer-inner bg-white">
                     <div class="row">
                        <div class="col-sm-6">
                           
                        </div>
                        <div class="col-sm-6 text-right">
                           Designed by affimob
                        </div>
                     </div>
                  </div>
               </footer>
               <!-- /.site-footer -->
               </div>
               <!-- /#right-panel -->
               <!-- Scripts -->
               <script src="assets/js/jquery-3.2.1.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
               <script src="assets/js/main.js"></script>
               <!--  Chart js -->
               <!--Chartist Chart-->
               <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
               <script src="assets/js/init/fullcalendar-init.js"></script>
               <script src="assets/js/scroll/perfect-scrollbar.jquery.min.js"></script>
               <script src="assets/sdn/jquery.bootstrap-dropdown-hover.js"></script>
               
               <script>
                  $(".ios").iosCheckbox();    
               </script>
               <script>
                  $(document).ready(function() {
                    $('#offers-list').DataTable( {
                        scrollY: '340px',
                        scrollX: '100%',
                        scrollCollapse: true,
                        paging:  false,
                        searching: false,
                        responsive: true,
                    } );
                  });
               </script>
               <script>
                  $('#sandbox-container .input-daterange').datepicker({
                  });
               </script>
				<script>
				// very simple to use!
				$(document).ready(function() {
				$('.js-activated').dropdownHover().dropdown();
				});
				</script>

            </body>
         </html>