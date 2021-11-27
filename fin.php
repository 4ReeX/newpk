<?php include 'head.php'; ?>
<div class="content">
   <div class="animated fadeIn">
      <div class="card">
         <!-- <?php include 'card-header.php'; ?> -->
         <div class="card-body">
            <div class="row">
               <div class="col-lg-3 col-auto float-left" id="blockInputDatapicker">
                  <?php $labelName = "Дата"; ?>
                  <?php include 'el/date.php'; ?>
               </div>
               <div class="col-auto" id="blockInputPeriod">
                  <div class="jss8">
                     <div class=" css-2b097c-container">
                        <div class="nowrap-custom">
                           <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="">Период</label>
                           <!--<button class="icon-btn"><i class="date-icon icon-day"></i></button>-->
                           <!-- <button class="icon-btn"><i class="date-icon icon-minus-day"></i></button>-->
                           <!-- <button class="icon-btn"><i class="date-icon icon-2"></i></button>-->
                           <!-- <button class="icon-btn"><i class="date-icon icon-7"></i></button>-->
                           <!--<button class="icon-btn"><i class="date-icon icon-week"></i></button>-->
                           <!--<button class="icon-btn"><i class="date-icon icon-minus-week"></i></button>-->
                           <button class="icon-btn"><i class="date-icon icon-14"></i></button>
                           <button class="icon-btn"><i class="date-icon icon-m"></i></button>
                           <button class="icon-btn"><i class="date-icon icon-minus-m"></i></button>
                           <button class="icon-btn"><i class="date-icon icon-30"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="zak">
                     <button class="circle-btn zakaz float-right ir" title="Заказать выплату" id="zakaz" >
                     <i class="ti ti-money"></i>
                     </button>
                     <div class="forma-zakaz d-none" id="forma-zakaz">
                        <button class="circle-btn" title="Подтвердить"><i class="ti ti-check"></i></button>
                        <div class="col"><b>Баланс:</b>&nbsp;653 235,86 руб.</div>
                        <div class="col">
                              <label for="webmoney-input" class="adv-label">Кошелек Webmoney:</label>
                              <input type="text" class="email-input" id="webmoney-input" placeholder="R361764168618" disabled="disabled">
                        </div>
                        <div class="col">
                              <label for="adv-input email" class="adv-label">Сумма запроса</label>
                              <input type="num" class="adv-input" id="adv-input2" value="&nbsp;&#8381;">
                           </div>
                     </div>
                </div>
                     <div class="zak">
                        <button class="circle-btn zakaz float-right ir" title="Пополнение Рекламной сети" id="adv">
                        <i class="ti ti-wallet"></i>
                        </button>
                        <div class="forma-zakaz d-none" id="forma-adv">
                           <button class="circle-btn" title="Подтвердить"><i class="ti ti-check"></i></button>
                           <div class="col"><b>Баланс:</b>&nbsp;653 235,86 руб.</div>
                           <div class="col">
                              <label for="adv-input email" class="adv-label">Аккаунт РК</label>
                              <input type="num" class="email-input" id="email-input" placeholder="email@email.com">
                           </div>
                           <div class="col">
                              <label for="adv-input ruble" class="adv-label">Сумма пополнения</label>
                              <input type="num" class="adv-input" id="adv-input" value="&nbsp;&#8381;">
                           </div>
                           <div class="col">
                              <label for="adv-input" class="adv-label">Рекламная сеть</label>
                              <select name="adv-select" class="adv-select">
                                 <option value="Target.my">MyTarget</option>
                                 <option value="mPay.biz">MPAY.BIZ</option>
                                 <option value="Target.my">Clicadilla</option>
                                 <option value="mPay.biz">Armoclick</option>
                                 <option value="Target.my">Propeller</option>
                              </select>
                           </div>
                        </div>
                     </div>
                    
                     <!---end col-->
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
      <div class="card">
         <div class="row">
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-12">
                  <a href="images/payments.xlsx" class="exportXls float-right" title="Получить xlsx"><img src="assets/img/xls.svg" alt=""></a>
                  <!-- <i class="ti ti-import float-right" style="font-size: 24px; margin-bottom: 5px; margin: 0 10px 5px"></i>-->
                  <!--<i class="ti ti-settings customize-table float-right" style="font-size: 24px; margin-bottom: 5px;" onclick="test();"></i>-->
                  <div class="responsive-block" id="fullWidth">
                     <table id="example" class="table table-bordered nowrap dataTable" style="width:100%;">
                        <thead class="thead-light">
                           <tr>
                              <th>Период</th>
                              <th>К выплате</th>
                              <th>Доступный баланс</th>
                              <th>Выплачено</th>
                              <th>Дата выплаты</th>
                              <th>Итоговый баланс</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>2019-12-30 - 2020-01-05</td>
                              <td>1944,00</td>
                              <td>6244,00</td>
                              <td>31430,00</td>
                              <td>06.02.2020</td>
                              <td>15651,67</td>
                           </tr>
                           <tr>
                              <td>2019-12-30 - 2020-01-05</td>
                              <td>1944,00</td>
                              <td>6244,00</td>
                              <td>31430,00</td>
                              <td>06.02.2020</td>
                              <td>15651,67</td>
                           </tr>
                           <tr>
                              <td>2019-12-30 - 2020-01-05</td>
                              <td>1944,00</td>
                              <td>6244,00</td>
                              <td style="color: orange;">В ожидании</td>
                              <td>06.02.2020</td>
                              <td>15651,67</td>
                           </tr>
                        </tbody>
                        <tfoot class="thead-light">
                           <tr>
                              <th>Итого</th>
                              <th>5656,60</th>
                              <th>300,00</th>
                              <th>-</th>
                              <th>11,67</th>
                              <th>5656,60</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
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
<script type="text/javascript">
   $(document).ready(function () {
   $(".popup").addClass("animation-reveal");
   $(".popup").css("opacity", "0");
   setTimeout(() => {
   $(".popup").removeClass("animation-reveal");
   $(".popup").css("opacity", "1");
   }, 1000);
   });
   
   $(function () {
   $(".label").on("click", function () {
   $(this).parent().removeClass("close");
   $(this).parent().addClass("open");
   });
   
   $(".menu-item").on("click", function () {
   $(this)
   .parent()
   .parent()
   .addClass("close")
   .children(".label")
   .text($(this).text());
   setTimeout(() => {
   $(this).removeClass("open");
   }, 400);
   });
   
   $(document).on("keyup", function (event) {
   if ((event.keyCode || event.which) === 27) {
   $(".popup").addClass("close");
   setTimeout(() => {
   $(".popup").removeClass("open");
   }, 400);
   }
   });
   
   $(document).on("click", function (event) {
   if ($(event.target).closest(".label").length === 0) {
   $(".popup").addClass("close");
   setTimeout(() => {
   $(".popup").removeClass("open");
   }, 400);
   }
   });
   });

    $('#zakaz').on("click", function () {
        if ($('#forma-zakaz').hasClass('d-none')) {
            $('#forma-zakaz').removeClass('d-none');
        } else {
            $('#forma-zakaz').addClass('d-none');
        }
    });
   
   $('#adv').on("click", function () {
        if ($('#forma-adv').hasClass('d-none')) {
            $('#forma-adv').removeClass('d-none');
        } else {
            $('#forma-adv').addClass('d-none');
        }
    });

    var test = document.getElementById('adv-input');
    test.onkeypress = event => {
    // Control buttons
    if (event.key.length > 1) return true;
    test.value = (test.value+event.key)
    .replace(/\D/g, '')
    .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
    +'₽';
    event.preventDefault();
    }
   
   var test2 = document.getElementById('adv-input2');
    test2.onkeypress = event => {
    // Control buttons
    if (event.key.length > 1) return true;
    test2.value = (test2.value+event.key)
    .replace(/\D/g, '')
    .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
    +'₽';
    event.preventDefault();
    }
   
</script>
</body>
</html>