<style>
   
</style>
<div class="chat-tiket-box" style="display: none;">
    <div class="center">

        <!--end CONTACTS-->


  <!--end CONTACTS-->
  <div class="chat-tiket">
    <div class="contact bar">
      <i class="ti ti-minus collap"></i>
      <div class="pic"><i class="LockOfferChat ti ti-unlock"></i></div>
      <div class="name">
        Пожалуйста сделайте выплаты, очень жду! Ваш фродер
      </div>
      <div class="seen">
        Сегодня в 12:56
      </div>
      <div class="seen">
        ID 565
      </div>
    </div>
    <div class="messages" id="chat-tiket">
      <div class="time">
        Сегодня в 11:41
      </div>
      <div class="message inbox">
        Помогите мне кто нибудь! Сделайте выплаты! Желательно мгновенно и по повышенной ставке, карантин понимаете ли!
        я требую чтобы партнёрка выплачивала всё по счетам, в противном случае я буду жаловаться в роспортребназор, и вас заблокируют! Вы же не хотите как с телеграммом?! 
      </div>
      <div class="message outbox">
        Добрый день.
        Выплаты не осуществаляем, идите в ж...
      </div>
      <div class="message inbox">
        Помогите мне кто нибудь! Сделайте выплаты! Желательно мгновенно и по повышенной ставке, карантин понимаете ли!
        я требую чтобы партнёрка выплачивала всё по счетам, в противном случае я буду жаловаться в роспортребназор, и вас заблокируют! Вы же не хотите как с телеграммом?! 
      </div>
      <div class="message outbox">
        Добрый день.
        Выплаты не осуществаляем, идите в ж...
      </div>
      <div class="message inbox">
        Помогите мне кто нибудь! Сделайте выплаты! Желательно мгновенно и по повышенной ставке, карантин понимаете ли!
        я требую чтобы партнёрка выплачивала всё по счетам, в противном случае я буду жаловаться в роспортребназор, и вас заблокируют! Вы же не хотите как с телеграммом?! 
      </div>
      <div class="message outbox">
        Добрый день.
        Выплаты не осуществаляем, идите в ж...
      </div>
      <div class="message inbox">
        Помогите мне кто нибудь! Сделайте выплаты! Желательно мгновенно и по повышенной ставке, карантин понимаете ли!
        я требую чтобы партнёрка выплачивала всё по счетам, в противном случае я буду жаловаться в роспортребназор, и вас заблокируют! Вы же не хотите как с телеграммом?! 
      </div>
      <div class="message outbox">
        Добрый день.
        Выплаты не осуществаляем, идите в ж...
      </div>
      <div class="message inbox">
        <div class="typing typing-1"></div>
        <div class="typing typing-2"></div>
        <div class="typing typing-3"></div>
      </div>
    </div>
    <div class="input">
     <input type="file" id="imgupload" style="display:none"/> 
     <i class="ti ti-upload" id="OpenImgUpload"></i><div id="chat-tiket-input" class="form-control float-left" contenteditable="true"></div>
     <i class="ti ti-angle-double-right"></i>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    var chatTiket = document.getElementById('chat-tiket');
    chatTiket.scrollTop = chatTiket.scrollHeight - chatTiket.clientHeight;

    $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

    $('.collap').click(function(){ $('.chat-tiket-box').toggle('minify'); });
    $('.openTiket').click(function(){ $('.chat-tiket-box').toggle('minify'); });

</script>
<script>
  $('.pic').click(function(){ 
    $('.LockOfferChat').toggleClass('ti-lock');
  });
</script>