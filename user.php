<?php include 'head.php'; ?>

      <div class="content">
         <!-- Animated -->
         <div class="animated fadeIn">
            <!-- Widgets  -->
            <!--  Traffic  -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body padding15 bg-grad">
                        <div class="id"><span>ID</span><span id="user-id">56565</span></div>
                        <div class="col-12 avat-bg">
                           <div class="ava">
                              <div class="avatar-img" style="background-image: url(images/avatar/photo.jpg);">
                              </div>
                           </div>
                           <div class="title-block">
                              <input type="name" class="edit-name white" value="Роман Скрипов" maxlength="25">
                              <p class="secondary fs22 e-mail">skrom@yandex.ru</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header ">
                        Контактные данные
                     </div>
                     <div class="card-body padding15">
                        <div id="for-user">
                           <div class="form-group">
                              <label class="form-control-label">Telegram</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"><span class="fa fa-telegram"></span></button>
                                 </div>
                                 <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" value="@RomanStark">
                              </div>
                              <label class="form-control-label">Skype</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"><span class="fa fa-skype"></span></button>
                                 </div>
                                 <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1"  value="RStark">
                              </div>
                              <label class="form-control-label">Мобильный</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"><span class="fa fa-phone"></span></button>
                                 </div>
                                 <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1"  value="7(977)644-94-07">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                     <div class="card m-bottom">
                        <div class="card-header">
                           Глобальные Postback и Trafficback
                        </div>
                        <div class="card-body padding15">
                           <div id="for-user">
                              <div class="form-group">
                                    <label class="form-control-label">Трафикбек URL</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <button class="btn btn-outline-secondary" type="button" id="http" onclick="myFunction();">http://</button>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Ваша ссылка для обратного приёма неподходящего трафика" aria-label="" aria-describedby="basic-addon1"  value="">
                                    </div>
                                 </div>
                              <div class="form-group">
                                 <label class="form-control-label">Postback URL</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <button class="btn btn-outline-secondary" type="button" id="http2"  onclick="myFunction2();">http://</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Ваша ссылка для обратного приёма неподходящего трафика" aria-label="" aria-describedby="basic-addon1"  value="">
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Postback события</label>
                                    <div class="input-group">
                                       <button class="btn btn-outline-secondary btn-sm">Все</button>
                                       <button class="btn btn-outline-secondary btn-sm">Подписки</button>
                                       <button class="btn btn-outline-secondary btn-sm">Покупки</button>
                                       <button class="btn btn-outline-secondary btn-sm">Билинг</button>
                                       <button class="btn btn-outline-secondary btn-sm">Отписки</button>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                     <div class="col-lg-6">
                        <div class="card">
                           <div class="card-header ">
                              Платежные данные
                           </div>
                           <div class="card-body padding15">
                              <div id="for-user">
                                 <div class="form-group">
                                    <label class="form-control-label">Способ оплаты</label>
                                    <div class="input-group">
                                       <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                          <option value="0">WebMoney</option>
                                          <option value="1">На карту</option>
                                          <option value="2">Наличкой</option>
                                          <option value="3">Овощами</option>
                                          <option value="4">Натурой</option>
                                          <option value="5">Мне не надо платить, я лью трафик бесплатно</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Наименование банка</label>
                                    <div class="input-group">
                                       <input class="form-control" value="Сбербанан">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Рассчетный счет</label>
                                    <div class="input-group">
                                       <input class="form-control" value="6545654654646">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Кор.счет</label>
                                    <div class="input-group">
                                       <input class="form-control" value="4214654654654655454">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Лицевой счет</label>
                                    <div class="input-group">
                                       <input class="form-control" value="65653235626562">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">ИНН</label>
                                    <div class="input-group">
                                       <input class="form-control" value="55656598965989656">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">БИК</label>
                                    <div class="input-group">
                                       <input class="form-control" value="3221365545341354">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">КПП</label>
                                    <div class="input-group">
                                       <input class="form-control" value="8846445646546542">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card">
                           <div class="card-header ">
                              Смена пароля
                           </div>
                           <div class="card-body padding15">
                              <div id="for-user">
                                 <div class="form-group">
                                    <label class="form-control-label">Пароль</label>
                                    <div class="input-group">
                                       <input class="form-control" value="">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-control-label">Подтверждение пароля</label>
                                    <div class="input-group">
                                       <input class="form-control" value="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--  /Traffic -->
            <div class="clearfix"></div>
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
<?php include 'scripts.php'; ?>
   </body>
</html>