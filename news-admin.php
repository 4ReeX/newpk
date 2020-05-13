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
<style>
	.zagolovok {font-size: 22px; color: #}
</style>
                    <div class="content">
                        <div class="animated fadeIn">
                            <div class="row">


                            	<!--end col-md-4-->   
                            	<div class="col-md-6">
                            		<div class="card">
                            			<div class="card-body">
											<div class="form-group row">
											  <label for="dateTime" class="col-4 col-form-label">Дата и время публикации</label>
											  <div class="col-8">
											    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="dateTime">
											  </div>
											</div>
											<div class="form-group row">
												<input class="form-control form-control-lg" type="text" placeholder="Заголовок новости">
											</div>
											<div class="form-group row">
											<input class="form-control form-control-lg" type="textarea" placeholder="Заголовок новости">
											</div>
											
											
                            			</div>
                            		</div>
                            	</div>
                                <div class="col-md-6">
                                	<section id="paper-collapse">
										
                            			<div class="collapse-card">
											<div class="collapse-card__heading">
											<div class="collapse-card__title">
												<div class="i-container">
													<i class="ti ti-comments-smiley fa-2x fa-fw"></i>
												</div>
												Теперь в нашем кабинете есть чат! <span class="dateTime">13.06.2020 11:25</span>
												<div class="icone-active"><i class="ti ti-check"></i></div>
											
											</div>
											</div>
											<div class="collapse-card__body" style="display: none;">
											За подробностями обращайтесь в саппорт-чат
											</div>
                            			</div>

                            			<div class="collapse-card">
											<div class="collapse-card__heading">
											<div class="collapse-card__title"><i class="ti ti-wallet fa-2x fa-fw"></i>Мы повысили ставки! <span class="dateTime">13.06.2020 11:25</span>
												<div class="icone-active"><i class="ti ti-time"></i></div>
											</div>

											</div>
											<div class="collapse-card__body" style="display: none;">
											Хорошая новость господа! С 00:00 завтрешнего дня, мы повышаем ставки на все офферы Билайна и МТС. За подробностями обращайтесь в саппорт-чат
											</div>
                            			</div>

                            			<div class="collapse-card">
											<div class="collapse-card__heading">
											<div class="collapse-card__title"><i class="ti ti-server fa-2x fa-fw"></i>Временные неполадки на сервере. <span class="dateTime">13.06.2020 11:25</span>
												<div class="icone-active"><i class="ti ti-time"></i></div>
											</div>
											</div>
											<div class="collapse-card__body" style="display: none;">
											У нас всё пиз*анулось к чертям, поэтому приносим извенения за доставленные неудобства.
											</div>
                            			</div>

                            			<div class="collapse-card">
											<div class="collapse-card__heading">
											<div class="collapse-card__title"><i class="ti ti-briefcase fa-2x fa-fw"></i>Опубликован новый кейс! <span class="dateTime">13.06.2020 11:25</span>
												<div class="icone-active"><i class="ti ti-check"></i></div>
											</div>
											</div>
											<div class="collapse-card__body" style="display: none;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nulla tempore possimus iure vero, nostrum. Corrupti nihil cupiditate quibusdam nulla nam voluptates hic earum deserunt eum asperiores aliquid, dignissimos cum praesentium amet ea quam molestias, aspernatur, sit, saepe atque fugiat veniam rem? Beatae ex harum nostrum amet vitae, ipsa tenetur qui suscipit iusto, libero nobis eligendi sequi, dignissimos odio officiis explicabo repudiandae, modi maxime rem sed eius nemo dolores! Architecto autem incidunt inventore nihil reprehenderit repellendus modi, tempore cum a illo, odio praesentium iste atque quidem excepturi nisi ipsam magnam natus neque harum ab aperiam debitis quae distinctio ducimus. Illum.
											</div>
                            			</div>

                            		</section>
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

                <!-- Right Panel -->

                <!-- Scripts -->
                <?php include 'scripts.php'; ?>
<script>
$(function () {
$(".collapse-card").paperCollapse();
});
</script>
<script src="assets/js/paper-collapse.min.js"></script>
    </body>

</html>