<!DOCTYPE html>
<html class="no-js" lang="">
   <?php include 'head.php'; ?>
   <body>
      <?php include 'sidebar.php';?>
      <!-- /#left-panel -->
      <!-- Right Panel -->
      <div id="right-panel" class="right-panel">
         <!-- Header-->
         <?php include 'header.php'; ?>
         <!-- Header-->
         <div class="content">
            <div class="animated fadeIn">
               <div class="card">
                  <div class="card-header">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <a class="nav-item nav-link active show" id="formiro-tab" data-toggle="tab" href="#custom-nav-formiro" role="tab" aria-controls="custom-nav-formiro" aria-selected="true">Формирование выплат</a>
                           <a class="nav-item nav-link" id="zapros-tab" data-toggle="tab" href="#custom-nav-zapros" role="tab" aria-controls="custom-nav-zapros" aria-selected="false">Запросы на выплату</a>
                           <a class="nav-item nav-link" id="adv-tab" data-toggle="tab" href="#custom-nav-adv" role="tab" aria-controls="custom-nav-adv" aria-selected="false">Рекламные сети</a>
                        </div>
                     </nav>
                  </div>
                  <div class="card-body">
                     <div class="tab-pane fade active show" id="custom-nav-formiro" role="tabpanel" aria-labelledby="custom-nav-formiro-tab">
                        <div class="row">
                           <div class="col">
                              <?php $labelName = "Дата"; ?>
                              <?php include 'el/date.php'; ?>
                           </div>
                           <div class="col">
                              <div class="jss8">
                                 <div class=" css-2b097c-container">
                                    <div class="nowrap-custom">
                                       <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
                                       <button class="icon-btn"><i class="date-icon icon-14"></i></button>
                                       <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <?php $labelName = "Статус"; ?>
                              <?php include 'el/mselect.php'; ?>
                           </div>
                           <div class="col">
                              <?php $labelName = "Реквизиты"; ?>
                              <?php include 'el/mselect.php'; ?>
                           </div>
                           <div class="col">
                              <?php $InputLabel = "Сумма к выплате от"; ?>
                              <?php include 'el/input.php'; ?>
                           </div>
                           <div class="col">
                              <?php $InputLabel = "Сумма к выплате до"; ?>
                              <?php include 'el/input.php'; ?>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="custom-nav-zapros" role="tabpanel" aria-labelledby="custom-nav-zapros-tab">
                        <div class="row">
                           <div class="col">
                              <?php $labelName = "Дата"; ?>
                              <?php include 'el/date.php'; ?>
                           </div>
                           <div class="col">
                              <?php $labelName = "Партнёры";  ?>
                              <?php include 'el/mselect.php'; ?>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="custom-nav-adv" role="tabpanel" aria-labelledby="custom-nav-adv-tab">
                        <div class="responsive-block statistic_table_wrapper" id="fullWidth">
                                        <table id="stats1" class="table  table-bordered nowrap userselecttext" style="width:100%;">
                                            <thead class="thead-light statistic_header">
                                                <tr>
                                                    <th class="sticky-header">Название рекламной сети</th>
                                                    <th class="sticky-header">Описание</th>
                                                    <th class="sticky-header">Комиссия</th>
                                                    <th class="sticky-header">Активно</th>
                                                    <th class="sticky-header">Картинка</th>
                                                    <th class="sticky-header">Добавить</th>
                                                </tr>
                                                <tr>
                                                    <th class="sticky-header"><input name="name" placeholder="введите название сетки" size="24" class="form-control" aria-disabled="false" value=""></th>
                                                    <th class="sticky-header"><input name="name" placeholder="Введите описание рекламной сети или условий (видно только администратору)" size="24" class="form-control" aria-disabled="false" value=""></th>
                                                    <th class="sticky-header"><input name="name" placeholder="введите размер комиссии" size="24" class="form-control" aria-disabled="false" value=""></th>
                                                    <th class="sticky-header">
                                                      <select class="form-control form-select" aria-label="select">
                                                        <option selected>Активно</option>
                                                        <option value="1">Не активно</option>
                                                      </select>
                                                    </th>
                                                    <th class="sticky-header"><input type="file" class="form-control " id="customFile" /></th>
                                                    <th class="sticky-header"><i class="ti ti-close td-save" title="Очистить"></i><i class="ti ti-save td-save" title="Сохранить выплату"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody class="statistic_body">
                                                <tr>
                                                    <td class="tac">Clickadilla</td>
                                                    <td class="tal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque optio deleniti, molestias eligendi! Ea nobis molestias ex, suscipit ullam nulla?</td>
                                                    <td class="tac">20%</td>
                                                    <td class="tac">Активна</td>
                                                    <td class="tac tacimg"><img src="https://clickadilla.com/img/svg/logo_desktop.svg" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td class="tac">PropellerAds</td>
                                                    <td class="tal">Lorem ipsum dolor sit, amet, consectetur adipisicing.</td>
                                                    <td class="tac">15%</td>
                                                    <td class="tac">Не активна</td>
                                                    <td class="tac tacimg"><img src="https://propellerads.com/wp-content/uploads/2019/08/logo.png" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>     
                                                </tr>
                                                <tr>
                                                    <td class="tac">Clickadilla</td>
                                                    <td class="tal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque optio deleniti, molestias eligendi! Ea nobis molestias ex, suscipit ullam nulla?</td>
                                                    <td class="tac">20%</td>
                                                    <td class="tac">Активна</td>
                                                    <td class="tac tacimg"><img src="https://clickadilla.com/img/svg/logo_desktop.svg" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>     
                                                </tr>
                                                <tr>
                                                    <td class="tac">PropellerAds</td>
                                                    <td class="tal">Lorem ipsum dolor sit, amet, consectetur adipisicing.</td>
                                                    <td class="tac">15%</td>
                                                    <td class="tac">Не активна</td>
                                                    <td class="tac tacimg"><img src="https://propellerads.com/wp-content/uploads/2019/08/logo.png" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>     
                                                </tr>
                                                <tr>
                                                    <td class="tac">Clickadilla</td>
                                                    <td class="tal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque optio deleniti, molestias eligendi! Ea nobis molestias ex, suscipit ullam nulla?</td>
                                                    <td class="tac">20%</td>
                                                    <td class="tac">Активна</td>
                                                    <td class="tac tacimg"><img src="https://clickadilla.com/img/svg/logo_desktop.svg" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>     
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="tac">PropellerAds</td>
                                                    <td class="tal">Lorem ipsum dolor sit, amet, consectetur adipisicing.</td>
                                                    <td class="tac">15%</td>
                                                    <td class="tac">Не активна</td>
                                                    <td class="tac tacimg"><img src="https://propellerads.com/wp-content/uploads/2019/08/logo.png" alt=""></td>
                                                    <td class="tac taclast"><i class="ti ti-pencil td-save" title="Редактировать"></i></td>     
                                                </tr>
                                                
                                            </tbody>
                                            <tfoot class="thead-light statistic_footer">
                                                <tr>
                                                    <th class="sticky-footer">Название рекламной сети</th>
                                                    <th class="sticky-footer">Описание</th>
                                                    <th class="sticky-footer">Комиссия</th>
                                                    <th class="sticky-footer">Активно</th>
                                                    <th class="sticky-footer">Картинка</th>
                                                    <th class="tac taclast">save/edit</th>
                                                    
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                     </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="circle-btn-group">
                           <button class="circle-btn" title="Сформировать отчет"><i class="ti ti-check"></i></button>
                           <button class="circle-btn" title="Очистить"><i class="ti ti-close"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card" id="formi">
                  <div class="row">
                  </div>
                  <div class="card-body">
                  </div>
                  <div class="row">
                     <hr>
                     <div class="col-12">
                       <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="assets/img/xls.svg" alt=""></a>
                       <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="assets/img/dcheck.svg" alt=""></a>
                     <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                        
                        <?php include 'el/table-zapr.php'; ?>
                        <!-- ++++++++++++++ -->
                        
                     </div>
                  </div>
               </div>
               <div class="card" id="zapr" style="display: none;">
                  <div class="row">
                  </div>
                  <div class="card-body">
                  </div>
                  <div class="row">
                     <hr>
                     <div class="col-12">
                       <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="images/excel.png" alt=""></a>
                        <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                        <br>
                        <?php include 'el/res-block-table.php'; ?>
                        <!-- ++++++++++++++ -->
                        
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
      <?php include 'footer-right.php'; ?>
      <!--end right-panel-->
      <!-- Right Panel -->
      <!-- Scripts -->
      <?php include 'scripts.php'; ?>
      <script type="text/javascript">
        $('#formiro-tab').click(function(){ 
            $('#formi').show();
            $('#zapr').hide(); 
        });
        $('#zapros-tab').click(function(){ 
            $('#formi').hide(); 
            $('#zapr').show();
        });
      </script>
      <style>
         .right-panel {margin-left: 60px;}
      </style>
   </body>
</html>