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
                     <div class="col-lg-12">
                        <div class="circle-btn-group">
                           <button class="circle-btn" title="Сформировать отчет"><i class="ti ti-check"></i></button>
                           <button class="circle-btn" title="Показать график"><i class="ti ti-stats-up stat-icon"></i></button>
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
                       <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="images/excel.png" alt=""></a>
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
   </body>
</html>