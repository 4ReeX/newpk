<!DOCTYPE html>
<html class="no-js" lang="">
<article lang="ru">
<?php include 'head.php'; ?>
<body>
<!-- Left Panel -->
<?php  //говорит нам что начинается php код
include 'sidebar.php';  //любой файл который мы хотим подключить в этой части документа
?>
<!-- /#left-panel -->
               <!-- Right Panel -->
               <div id="right-panel" class="right-panel">
                  <!-- Header-->
<?php  //говорит нам что начинается php код
include 'header.php';  //любой файл который мы хотим подключить в этой части документа
?>

        

<div class="content">
<div class="animated fadeIn">
<div class="card">
  <!--- <?php include 'card-header.php'; ?>---->
   <div class="card-header">
     <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active show" id="home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Фильтры трафика</a>
            <a class="nav-item nav-link" id="start-tab" data-toggle="tab" href="#custom-nav-start" role="tab" aria-controls="custom-nav-start" aria-selected="false">Trafficback</a>
            <a class="nav-item nav-link" id="oss-tab" data-toggle="tab" href="#custom-nav-oss" role="tab" aria-controls="custom-nav-oss" aria-selected="false">Postback</a>
            <a class="nav-item nav-link" id="pay-tab" data-toggle="tab" href="#custom-nav-pay" role="tab" aria-controls="custom-nav-pay" aria-selected="false">S2S</a>
            <a class="nav-item nav-link" id="contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-pay" aria-selected="false">Диапазоны IP</a>
            <a class="nav-item nav-link" id="domains-tab" data-toggle="tab" href="#custom-nav-domains" role="tab" aria-controls="custom-nav-domains" aria-selected="false">Парковка доменов</a>
        </div>
    </nav>
   </div>
<div class="card-body">
   





<div class="custom-tab">

    

        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
<div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
<p>По признаку <b>"вирус"</b> мы отсекаем по http-заголовку <b>x-requested-with</b> всё, что не подпадает под запись белого списка, и всё, что не браузер.</p>
<p>Разрешающие (белые) записи:</p>
<p><b>*browser* com.android.chrome ru.yandex.* com.yandex.* ru.mail.* com.opera.* com.baidu.* android.facebook ios.facebook com.facebook.* com.instagram.* com.vkontakte.* com.skype.* </b></p>
<p>На Темафон и Прямой Билайн также отсекаем в ТБ клики, у которых в user-agent содержится запись <b>";wv)"</b> (без кавычек).</p>
<p>Это webview - трафик из приложений, оператором не принимается по причине высокой абузности и фрода. </p>
<p>Также, по требованию Темафона (Билайн) мы блокируем возможность подписки со следующих устройств:</p>
<p><b>- Meizu MX6 - Meizu Note 6 - Meizu M3*- Meizu M2*- Meizu M5*- Meizu M6* - *всю линейку данной модели</b></p>
<p>На офферах Темафон Tune и Темафон Мир Видео (неадалт) по требованию оператора блокируем подписки с устройств <b>Micromax.</b></p>
<p>По возможности установите фильтры на своей стороне, чтобы избежать потерь трафика.</p>
<br><br>
</div>
<div class="tab-pane fade" id="custom-nav-start" role="tabpanel" aria-labelledby="custom-nav-start-tab">
<p><b>Трафикбэк (англ. traffic back) - это трафик, который не принимается нашей партнёрской программой по тем или иным причинам, но вы можете перенаправить его на свой сайт или другую партнёрку.</b></p>
<p>Если вы хотите перенаправить всех пользователей, которые не подходят под условия офферов вашей ссылки, по которой они перешли из  рекламной сети, на альтернативный URL, укажите в поле Trafficback URL, на который система перенаправит ваших пользователей.</p>
<p>Это могут быть пользователи, не попадающие в требуемые ГЕО или пользователи, перешедшие по ссылке с устройства, которое не входит в список разрешенных оператором.</p>
<p>На ваш Traffickback URL вы будете получать код указывающий на причину ТБ</p>
<p><h5>Общие причины ТБ:</h5></p>
<p><b class="tabulation">tb-Meizu</b> - тб по запрещённым устройствам</p>
<p><b class="tabulation">tb-ua-wv</b> - вебвью</p>
<p><b class="tabulation">virus</b> - "вирусный" трафик</p>
<p><b class="tabulation">tb-cap-{offer_id}</b> - Код превышения капы + <b>offer_id</b> <b>(id оффера соотвественно)</b></p>
<p><b class="tabulation">tb-Desktop</b> – тип устройства – десктоп</p>
<p><b class="tabulation">tb-Tablet</b> – тип устройства - планшет</p>
<p><b class="tabulation">tb-micromax</b> – трафик с запрещённых устройств.</p>
<p><h5>ТБ от Темафон:</h5></p>
<p><b class="tabulation">tb-tema-522</b> - тб от темафона, Абонент находится в стоп-листе</p>
<p><b class="tabulation">tb-tema-521</b> - тб от темафона, Абонент не распознан как абонент Билайн</p>
<p><b class="tabulation">tb-tema-513</b> - тб от темафона, Запрос абонента был заблокирован как фрод</p>
<p><h5>ТБ от МТС:</h5></p>
<p><b class="tabulation">tb-mts-6</b> - превышено время ожидания активации заявки</p>
<p><b class="tabulation">tb-mts-8</b> - не удалось определить MSISDN для подписки </p>
<p><b class="tabulation">tb-mts-10</b> -  неизвестная ошибка</p>
<p><b class="tabulation">tb-mts-13</b> -  ошибка валидации MODETECT</p>
<p><b class="tabulation">tb-mts-14</b> - подключена услуга Запрет контента</p>
<p><b class="tabulation">tb-mts-16</b> - пользователь нажал ссылку «Вернуться на сайт»</p>
<p><h5>ТБ от Виамоби:</h5> </p>
<p><b class="tabulation">tb-vaimobi-1</b> - внутренняя ошибка сервера</p>
<p><b class="tabulation">tb-vaimobi-2</b> - ошибка обращения к CDP</p>
<p><b class="tabulation">tb-vaimobi-3</b> - некорректные условия (не из мобильного интернета или не с мобильного устройства)</p>
<p><b class="tabulation">tb-vaimobi-4</b> - сработал фрод фильтр (многократно повторяющиеся запросы от одного устройства)</p>
<p><b class="tabulation">tb-vaimobi-5</b> - абонент в стоп-листе</p>
<p><b class="tabulation">t1</b>-{pt_id}</p>
<p><b class="tabulation">t2</b>{offer_id}</p>
<p><b class="tabulation">t3</b>{tmpl}</p>
<p><b class="tabulation">t4</b>{partner_id}</p>
<p><b class="tabulation">t5</b>{source_id}</p>
<p><b class="tabulation">t9</b>{sub_id}</p>
<br><br>
</div>
<div class="tab-pane fade" id="custom-nav-oss" role="tabpanel" aria-labelledby="custom-nav-oss-tab">
<p><b>Postback</b> – это механизм, позволяющий передавать из партнёрской сети данные стороннему сайту, скрипту или приложению.</p>
<p>Названия/набор передаваемых через Postback URL параметров партнёр может сам, как ему удобно, а платформа Affimob будет подставлять в указанную ей ссылку взамен каждого запрошенного {параметра} соответствующее ему значение. </p>
<p>Перечисленные параметры не являются строго обязательными, набор может быть произвольным.</p>
<p><b>Пример URL</b></p>
<p><span class="code">http://notify.domen.ru/am/?timestamp={timestamp}&status={status}&revenue={price}&msisdn_masked={msi sdn_masked}&income={income}&pt_id={pt_id}</span></p>
<p>где: <b>http://notify.domen.ru/am/</b> – ссылка на обработчик нотификаций, реализованный на стороне партнёра</p>
<p><b>Список поддерживаемых параметров</b></p>
<p><b>{timestamp}</b> - время нотифицируемого события </p>
<p><b>{status}</b> – тип события: SUBSCRIBE (подписка), BILLING (оплата), UNSUBSCRIBE (отписка)</p>
<p><b>{price}</b> – сумма списания с абонента, с НДС </p>
<p><b>{income}</b> - доход партнера. Параметр, автоматически удаляется, если не удается однозначно вычислить доход партнера</p>
<p><b>{pt_id}</b> – партнёрский идентификатор транзакции, указанный им в продвигаемой ссылке через параметр pt_id</p>
<p><b>{sub_id}</b> - идентификатор подписки</p>
<p><b>{p_id}</b> - идентификатор партнера</p>
<p><b>{pay_id}</b> - идентификатор платежа (только для ребиллов)</p>
<p><b>{price}</b> - цена</p>
<p><b>{msisdn}</b> - msisdn</p>
<p><b>{msisdn_md5}</b> - md5(msisdn)</p>
<p><b>{msisdn_masked}</b> – замаскированный MSISDN абонента</p>
<p><b>{eop}</b> - дата/время окончание платного периода</p>
<p><b>{click_id}</b>- идентификатор клика (передается витриной при оформлении подписки)</p>
<p><b>{offer_id}</b> - идентификатор предложения в рамках CPA сети</p>
<p><b>{pay_cnt}</b> - порядковый номер платежа</p>
<p><b>{event_id}</b> - Для уникализации события</p>
<p><b>{landing_id}</b> - id лендинга</p>
<p><b>{operator}</b> - Название оператора (tim_it, beeline_ru)</p>
<br><br>
</div>
<div class="tab-pane fade" id="custom-nav-pay" role="tabpanel" aria-labelledby="custom-nav-pay-tab">
<p>Взаимодействие через s2s позволяет сократить количество редиректов по «пути» следования абонента от партнёра к LP, а это, в свою очередь, в некоторых ситуациях приводит к увеличению показателя CR.</p>
<p><br><b>Партнёрский сценарий для использования S2S:</b></p>
<p>1. Зайти в ПК, подключить оффер (если не подключен), получить ссылку на продвижение</p>
<p>2. Реализовать у себя взаимодействие с нашим API.</p>
<p>На наш URL http://s2s.affimob.com/getURL</span> необходимо будет отправлять <b>POST</b> запрос с <b>Content-type=application/json</b> вида:</p>
<div class="code">
<span class="startK">{</span>
<span class="startText">   "offerUrl": <span class="value">"http://o.connectivity.ru/click.php?key=erolife&offer_id=11716&tmpl=erolife277&partner_id=12345&source_id=1"</span>,</span><br>
<span class="startText">   "ptId": "test", <span class="value">"userAgent": "Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25"</span>,</span></span>
<span class="startK">}</span>
<i class="copy-btn fa fa-copy"></i>
</div>

<p>xrequestedWith - значение HTTP HEADER "x-requested-with" из запроса абонента.</p>
<p>А затем обрабатывать ответы:</p>
<p>//успешный кейс - получена ссылка для перехода.</p>
<div class="code">
<span class="startK">{</span>
<span class="startText">     "responseCode": <span class="value">0</span>,</span>
<span class="startText">     "redirectUrl": <span class="value">"redirectUrl"</span>,</span>
<span class="startK">}</span>
<i class="copy-btn fa fa-copy"></i>
</div>

<p>//неуспешный кейс - один из узлов в процессе редиректа вернул плохой http код 4xx-5xx</p>
<div class="code">
<span class="startK">{</span>
<span class="startText">     "responseCode": <span class="value">1</span>,</span>
<span class="startText">     "redirectUrl": <span class="value">"null"</span>,</span>
<span class="startK">}</span>
<i class="copy-btn fa fa-copy"></i>
</div>

<p>//неуспешный кейс - трафик не подошел по IP, Desktop  и т.д.</p>
<div class="code">
<span class="startK">{</span>
<span class="startText">     "responseCode": <span class="value">2</span>,</span>
<span class="startText">     "redirectUrl": <span class="value">"null"</span>,</span>
<span class="startK">}</span>
<i class="copy-btn fa fa-copy"></i>
</div>

<p>Допускается также привлекать трафик сразу на ссылку s2s, пронося все необходимые параметры в ней.</p>
<p>Например, обычная ссылка вида</p>

<div class="code">
<span class="value">http://o.affimob.com/click.php?key=beenaked&tmpl=2&offer_id=11618&partner_id=12345&source_id=0&pt_id=1234567</span>
<i class="copy-btn fa fa-copy"></i>
</div>

<p>будет выглядеть так</p>
<div class="code">
<span class="value">http://s2s.affimob.com/click?key=beenaked&tmpl=2&offer_id=11618&partner_id=12345&source_id=0&pt_id=1234567</span>
<i class="copy-btn fa fa-copy"></i>
</div>
<br><br>
</div>
<div class="tab-pane fade api" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
<div class="col-lg-12 col-md-12 row">
<div class="card-body fortabs">
  <section id="filters">
    <div class="form-row col-lg-12">
      <div class="form-group col-lg-2 col-md-12 col-sm-12 col-xs-8">
            <label class="form-control-label">Страны</label>
            <div class="input-group">
              <div class="jss8">
            <select name="selectSm" id="selectSm" class="form-control-sm form-control">
              <option value="0">Россия</option>
              <option value="1">Казахстан</option>
              <option value="2">Украина</option>
              <option value="3">Белорусь</option>
              <option value="4">and more...</option>
            </select>
            </div>
            </div>
        </div>
      <div class="form-group col-lg-2 col-md-12 col-sm-12 col-xs-8">
            <label class="form-control-label">Операторы</label>
            <div class="input-group">
              <div class="jss8">
            <select name="selectSm" id="selectSm" class="form-control-sm form-control">
              <option value="0">Beeline</option>
              <option value="1">Megafon</option>
              <option value="2">MTS</option>
              <option value="3">Tele2</option>
              <option value="4">and more...</option>
            </select>
            </div>
            </div>
        </div>
        <div class="form-group col-lg-1 col-md-2 col-sm-2 col-xs-2">
            <div class="input-group checkbox-group">
              <label class="form-control-label" for="offer-new">CIDR</label>
              <div id="ios-checkbox-offer-new" class="ios-checkbox-wrap"><input type="checkbox" id="offer-new" class="ios ios-checkbox-input" data-ios-checkbox="true" style="display: none;" checked="checked"><div class="ios-ui-select form-select checked"><div class="inner"></div></div></div>
            </div>
         </div>
         <div class="form-group col-lg-2 col-md-6 col-sm-8 col-xs-11 flex-end circle-group">
          <button class="circle-btn" title="Скачать весь диапазон IP"><i class="ti ti-cloud-down"></i></button>
          <button class="circle-btn" title="Загрузить диапазоны"><i class="ti ti-upload"></i></button>
          <button class="circle-btn" title="Скачать шаблон"><i class="ti ti-list-ol"></i></button>
          </div>
</div>
<div class="form-row col-lg-12">
  <div class="form-group col-lg-2 col-md-6 col-sm-12">
    <div class="input-group">
      <div class="jss8">
      <textarea name="ip" id="" cols="40" rows="10" class="iprange">
      5.227.120.0/23
      46.23.175.0/20
      46.232.160.0/21
      80.83.224.0/25
      5.227.120.0/23
      46.23.175.0/20
      46.232.160.0/21
      80.83.224.0/25
      5.227.120.0/23
      46.23.175.0/20
      46.232.160.0/21
      80.83.224.0/25
      5.227.120.0/23
      46.23.175.0/20
      46.232.160.0/21
      80.83.224.0/25
      5.227.120.0/23
      46.23.175.0/20
      46.232.160.0/21
      80.83.224.0/25
      </textarea>
      </div>
    </div>
    
  </div>
  <div class="form-group col-lg-3 col-md-6 col-sm-12 flex-start">
    <div class="input-group">
      <div class="jss8">
      <div class="diap">
      <p><b>Диапазоны IP</b></p>
    <p>Beeline (RU)<a href="https://affimob.com/download/operator_subnet.xlsx" style="white-space: nowrap;">Скачать</a></p>
    <p>MTS (RU)<a href="https://affimob.com/download/operator_subnet.xlsx" style="white-space: nowrap;">Скачать</a></p>
    <p>Megafon (RU)<a href="https://affimob.com/download/operator_subnet.xlsx" style="white-space: nowrap;">Скачать</a></p>
    <p>Tele2 (RU)<a href="https://affimob.com/download/operator_subnet.xlsx" style="white-space: nowrap;">Скачать</a></p>
    <p>Wifi+3G (RU)<a href="https://affimob.com/download/operator_subnet.xlsx" style="white-space: nowrap;">Скачать</a></p>
    </div>
    </div>
    </div>
    
    
  </div>
</div>
</section>
</div>
    </div>
</div>
  
</div>
  <br>
</div>
<div class="tab-pane fade" id="custom-nav-domains" role="tabpanel" aria-labelledby="custom-nav-domains-tab">
 <p><b>Информация для парковки домена:</b></p>
 <ul class="ul-num">
   <li>1. Создайте запись CNAME в разделе редактирования DNS-зоны вашего домена со значением s2s.affimob</li>
   <li>2. Дождитесь обновления dns-записей</li>
   <li>3. Добавьте домен в нашу систему используя форму ниже</li>
   <li>4. Припаркованный домен может использоваться для направления трафика и будет отображаться в списке доменов</li>
   <li>5. При необходимости отметьте звёздочкой <i class="fa fa-star"></i> домен, который будет подставляться в ваши ссылки по умолчанию</li>
 </ul>
 <div class="domain-input">
     <div class="jss8"><div class=" css-2b097c-container"><div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth"><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl"><div aria-invalid="false" class="MuiInputBase-input MuiInput-input jss9" type="text"><div class="jss10"><div class="css-1tna5xz"><div class="" style="display: inline-block;">
      <input autocapitalize="none"  placeholder="Введите домен" autocomplete="off" autocorrect="off" id="react-select-multiple" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box;    background: 0px center;    border: 0px;    font-size: inherit;    opacity: 1;    outline: 0px;    padding: 0px;    color: inherit;    width: 100%;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 14.4px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;" ></div></div></div></div><div class=" css-1wy0on6"><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"></div><span class=" css-1okebmr-indicatorSeparator"></span><div aria-hidden="true" class=" css-tlfecz-indicatorContainer"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r"><path d="M14.348 14.849c-0.469 0.469-1.229 0.469-1.697 0l-2.651-3.030-2.651 3.029c-0.469 0.469-1.229 0.469-1.697 0-0.469-0.469-0.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-0.469-0.469-0.469-1.228 0-1.697s1.228-0.469 1.697 0l2.652 3.031 2.651-3.031c0.469-0.469 1.228-0.469 1.697 0s0.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c0.469 0.469 0.469 1.229 0 1.698z"></path>
</svg></div></div></div>
          </div></div></div></div>
         <button class="circle-btn btn-plus" title="Добавить домен"><i class="ti ti-plus"></i></button>

 </div>
 <div>
  <div class="responsive-block" id="fullWidth">
      <table class="table simple-table align-left no-wrap table-sm table-bordered" id="partner-projects">
          <thead class="thead-light">
              <tr>
                  <th style="min-width: 40px; width: 40px;"></th>
                  <th style="min-width: 120px;">Припаркованные домены</th>
                  <th>Дата</th>
                  <th></th>
                  <th style="max-width: 30px; width: 30px;"></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td><i class="fa fa-star" title="Добавить в избранные" style="cursor: pointer;"></i></td>
                  <td>0 | Домен1</td>
                  <td>25.03.2020</td>
                  <td></td>
                  <td><i class="ti ti-close"></i></td>
              </tr>
              <tr>
                <td><i class="fa fa-star-o" title="Добавить в избранные" style="cursor: pointer;"></i></td>
                  <td>1 | Domain2</td>
                  <td>25.03.2020</td>
                  <td></td>
                  <td><i class="ti ti-close"></i></td>
              </tr>
              <tr>
                <td><i class="fa fa-star-o" title="Добавить в избранные" style="cursor: pointer;"></i></td>
                  <td>2 | MegaultrapupergiperverybiggestmanylargestlongerDomain.com</td>
                  <td>25.03.2020</td>
                  <td></td>
                  <td><i class="ti ti-close"></i></td>
              </tr>
              <tr>
               <td><i class="fa fa-star-o" title="Добавить в избранные" style="cursor: pointer;"></i></td>
                  <td>3 | miniDm.ru</td>
                  <td>25.03.2020</td>
                  <td></td>
                  <td><i class="ti ti-close"></i></td>
              </tr>
              <tr>
               <td><i class="fa fa-star-o" title="Добавить в избранные" style="cursor: pointer;"></i></td>
                  <td>4 | MoreDomain.net</td>
                  <td>25.03.2020</td>
                  <td></td>
                  <td><i class="ti ti-close"></i></td>
              </tr>
          </tbody>
      </table>
  </div>
</div>


</div>



</div>
</div>
</div>
</div>
         </div>     
         </div>
         </div>

    <!-- Scripts -->
<?php include 'scripts.php'; ?>
</body>
</html>
