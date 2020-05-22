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


                            	<!--end col-md-4-->   
                            	<div class="col-md-6">
                            		<div class="card card-outline-secondary" >
<div class="card-header">
<h4 class="mb-0">Создание/Редактирование новости</h4>
</div>
<div class="card-body" id="createNewsForm">
<div class="row mt-4">

<div class="col-sm-4 pb-3">
<label for="exampleCtrl">Дата/Время публикации</label>
<input class="form-control" type="datetime-local" value="2020-05-18T13:45:00" id="example-datetime-local-input">
</div>
<div class="col-sm-4 pb-3">
<label for="exampleCity">Тематика</label>
<select class="form-control custom-select" id="exampleSt">
<option class="text-white bg-warning">
Выберите тематику
</option>
<option value="1">Системные</option>
<option value="2">Офферы</option>
<option value="3">Кейсы</option>
</select>
</div>
<div class="col-sm-4 pb-3">
<label for="exampleSt">Иконка</label> 
<select id="mySelect" data-show-content="true" class="form-control border selectIcons">
  <option disabled="disabled" class="groupOption">Стрелки и направления</option>
  <option disabled="disabled"></option>
  <option>&#xe627 ti-arrow-up</option>
  <option>&#xe628 ti-arrow-right</option>
  <option>&#xe629 ti-arrow-left</option>
  <option>&#xe62a ti-arrow-down</option>
  <option disabled="disabled"></option>
   <option disabled="disabled" class="groupOption">Для кейсов</option>
   <option disabled="disabled"></option>
  <option>&#xe651 ti-briefcase</option>
  <option>&#xe64f ti-announcementt</option>
  <option>&#xe655 ti-bag</option>
  <option>&#xe6dc ti-receipt</option>

  <option disabled="disabled" class="groupOption">Стрелки и направления</option>
  <option disabled="disabled"></option>
  <option>&#xe627 ti-arrow-up</option>
  <option>&#xe628 ti-arrow-right</option>
  <option>&#xe629 ti-arrow-left</option>
  <option>&#xe62a ti-arrow-down</option>
  <option disabled="disabled"></option>
   <option disabled="disabled" class="groupOption">Для кейсов</option>
   <option disabled="disabled"></option>
  <option>&#xe651 ti-briefcase</option>
  <option>&#xe64f ti-announcementt</option>
  <option>&#xe655 ti-bag</option>
  <option>&#xe6dc ti-receipt</option>

  <option disabled="disabled" class="groupOption">Стрелки и направления</option>
  <option disabled="disabled"></option>
  <option>&#xe627 ti-arrow-up</option>
  <option>&#xe628 ti-arrow-right</option>
  <option>&#xe629 ti-arrow-left</option>
  <option>&#xe62a ti-arrow-down</option>
  <option disabled="disabled"></option>
   <option disabled="disabled" class="groupOption">Для кейсов</option>
   <option disabled="disabled"></option>
  <option>&#xe651 ti-briefcase</option>
  <option>&#xe64f ti-announcementt</option>
  <option>&#xe655 ti-bag</option>
  <option>&#xe6dc ti-receipt</option>

  <option disabled="disabled" class="groupOption">Стрелки и направления</option>
  <option disabled="disabled"></option>
  <option>&#xe627 ti-arrow-up</option>
  <option>&#xe628 ti-arrow-right</option>
  <option>&#xe629 ti-arrow-left</option>
  <option>&#xe62a ti-arrow-down</option>
  <option disabled="disabled"></option>
   <option disabled="disabled" class="groupOption">Для кейсов</option>
   <option disabled="disabled"></option>
  <option>&#xe651 ti-briefcase</option>
  <option>&#xe64f ti-announcementt</option>
  <option>&#xe655 ti-bag</option>
  <option>&#xe6dc ti-receipt</option>

</select>

</div>
<div class="col-12 pb-3">
<label for="exampleAccount">Заголовок новости</label>
<input class="form-control" id="exampleAccount" placeholder="Введите текст" type="text">
</div>
<div class="col-12 pb-3">
<label for="exampleMessage">Текст новости</label>
<textarea class="form-control" id="complexExampleMessage" rows="6"></textarea>
<small class="text-muted">Введите текст здесь</small>
</div>
<div class="col-12 pb-3">
	<div class="row">
		<div class="prevBlock"><img src="images/statyaImg1.png" alt=""></div>
		<div class="prevBlock"><img src="images/statyaImg1.png" alt=""></div>
		<div class="prevBlock"><i class="ti ti-gallery"></i></div>
		<div class="prevBlock add"><i class="ti ti-export"></i></div>
</div>
</div>
<div class="col-12 pb-3">


</div>
</div>
<div class="card-footer">
<div class="float-right">
<input class="btn btn-secondary" type="reset" value="Отмена">
<input class="btn btn-primary" type="button" value="Создать новость"  data-toggle="modal" data-target="#myModal">
<!-- Button to Open the Modal -->

</div>
</div>
</div>
                            	</div></div>
                                <div class="col-md-6">
                                <div class="card">
									<div class="card-header">
									<h4 class="mb-0">Пул новостей</h4>
									</div>
                                	<div class="card-body" id="pulTableBody">
                                		<!--Table-->
										<table class="table table-hover table-fixed">

										  <!--Table head-->
										  <thead>
										    <tr>
										      <th>#</th>
                          <th><i class="ti ti-calendar"></i> / <i class="ti ti-time"></i> создания</th>
										      <th>Заголовок</th>
										      <th>Тематика</th>
										       <th><i class="ti ti-calendar"></i> / <i class="ti ti-time"></i> публикации</th>
										      <th>Статус</th>
										    </tr>
										  </thead>
										  <!--Table head-->

										  <!--Table body-->
										  <tbody>
										    <tr>
										      <th scope="row">4</th>
                          <td>14.05.2020 16:20</td>
										      <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumqueasdasdasda asd asd a sd as ds da sd .</td>
										      <td>Техническая</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-check"></i></td>
										    </tr>
										    <tr>
										      <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
										      <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
										      <td>Офферы</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-check"></i></td>
										    </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>14.05.2020 16:20</td>
                          <td class="max40elips">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque.</td>
                          <td>Офферы</td>
                          <td>14.05.2020 16:20</td>
                          <td><i class="ti ti-check"></i></td>
                        </tr>
										    <tr>
										      <th scope="row">6</th>
                          <td>14.05.2020 16:20</td>
										      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
										      <td>Конкурс</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-check"></i></td>
										    </tr>
										    <tr>
										      <th scope="row">7</th>
                          <td>14.05.2020 16:20</td>
										      <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
										      <td>Кейсы</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-check"></i></td>
										    </tr>
										    <tr>
										      <th scope="row">8</th>
                          <td>14.05.2020 16:20</td>
										      <td>Lorem ipsum dolor sit amet, consectetur.</td>
										      <td>Разное</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-time"></i></td>
										    </tr>
										    <tr>
										      <th scope="row">9</th>
                          <td>14.05.2020 16:20</td>
										      <td>Lorem ipsum.</td>
										      <td>Какая то еще</td>
										      <td>14.05.2020 16:20</td>
										      <td><i class="ti ti-check"></i></td>
										    </tr>
										  </tbody>
										  <!--Table body-->

										</table>
										<!--Table-->
                                	</div>
                                </div>
                            	</div>  
                            	
                            
                            

                        </div>

                        

                        <!--------------------------end col-12-------------------------->

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
<div class="modal" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Где публикуем?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="social_media_wrap">

          <div class="item blog active">
        <div class="item_left">
          <div class="media_box">
            <i class="iFlex"><img src="http://newpk/images/new-logo.svg" alt="" class="icon-social"></i>
          </div>
          <div class="media_text">
            Blog
          </div>
        </div>
        <div class="item_right">
          <input type="checkbox" class="checkbox" checked>
        </div>
      </div>
      <div class="item active telegram">
        <div class="item_left">
          <div class="media_box">
            <i class="fa fa-telegram"></i>
          </div>
          <div class="media_text">
            Telegram
          </div>
        </div>
        <div class="item_right">
          <input type="checkbox" class="checkbox" checked>
        </div>
      </div>
       <div class="item active vk">
        <div class="item_left">
          <div class="media_box">
            <i class="fa fa-vk"></i>
          </div>
          <div class="media_text">
            VK
          </div>
        </div>
        <div class="item_right">
           <input type="checkbox" class="checkbox" checked>
        </div>
      </div>

      <div class="item active facebook">
        <div class="item_left">
          <div class="media_box">
            <i class="fa fa-facebook-f"></i>
          </div>
          <div class="media_text">
            Facebook
          </div>
        </div>
        <div class="item_right">
           <input type="checkbox" class="checkbox">
        </div>
      </div>
      
      
      <div class="item linkedin">
        <div class="item_left">
          <div class="media_box">
            <i class="fa fa-linkedin"></i>
          </div>
          <div class="media_text">
            Linkedin
          </div>
        </div>
        <div class="item_right">
          <input type="checkbox" class="checkbox">
        </div>
      </div>
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Отмена</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Опубликовать</button>
      </div>

    </div>
  </div>
</div>

                <!-- Right Panel -->

                <!-- Scripts -->
                <?php include 'scripts.php'; ?>


    </body>

</html>