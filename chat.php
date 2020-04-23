<style>
   
</style>
<div class="chat-box" style="display: none;">
    <div class="center">

        <!--end CONTACTS-->


  <!--end CONTACTS-->
  <div class="chat">
    <div class="start-window">
        <p><img src="images/new-logo.svg" alt="" class="icon-logo start"><img src="images/invert-affimob.svg" alt="" class="text-logo"></p>
        <p class="h1">Привет, партнер! Появились вопросы?</p>
        <p>Скорей пиши , мы с радостью тебе поможем!</p>
        <p><button class="btn btn-outline-secondary btn-lg" id="startDialog">Начать диалог</button></p>
        <p style="font-size: 10px;">(скорость ответа на сообщения зависит от загруженности саппорт отдела  ~20мин)</p>
    </div>
    <div class="contact bar">
      <i class="ti ti-minus collap"></i>
      <div class="pic"><img src="images/new-logo.svg" alt="" class="icon-logo start"></div>
      <div class="name">
        Tony Stark
      </div>
      <div class="seen">
        Сегодня в 12:56
      </div>
      <div class="seen">
        ID 5653235
      </div>
    </div>
    <div class="messages" id="chat">
      <div class="time">
        Сегодня в 11:41
      </div>
      <div class="message parker">
        Эй, чувак! Как дела, мистер Старк? 👋
      </div>
      <div class="message stark">
        Малыш, откуда ты пришел?
      </div>
      <div class="message parker">
        Экскурсия! 🤣
      </div>
      <div class="message parker">
        В чем проблема этого парня, мистер Старк? 
      </div>
      <div class="message stark">
        Он из космоса, он пришел сюда, чтобы украсть ожерелье у волшебника.
      </div>
      <div class="message parker">
        Какие то еще сообщения чтобы показать скролл
      </div>
      <div class="message stark">
        Я что зря разрабатывал эту верстку что ты не читаешь это сообщение ?
      </div>
      <div class="message stark">
        <div class="typing typing-1"></div>
        <div class="typing typing-2"></div>
        <div class="typing typing-3"></div>
      </div>
    </div>
    <div class="input">
     <input type="file" id="imgupload" style="display:none"/> 
     <i class="ti ti-upload" id="OpenImgUpload"></i><input placeholder="Напишите что нибудь..." type="text" />
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    var chat = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight - chat.clientHeight;

    $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

    $('.collap').click(function(){ $('.chat-box').toggle('minify'); });
    $('.activator').click(function(){ $('.chat-box').toggle('minify'); });
    $('#startDialog').click(function(){ $('.start-window').toggle('hide'); });
</script>