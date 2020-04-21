<style>
    .chat-box {
        position: fixed; 
        right: 5px; 
        bottom: 10px; 
        background-color: rgba(0,0,0,0.4) !important;
        z-index: 9999; 
        min-width: 320px; 
        min-height: 600px; 
        border-radius: 20px;
        -webkit-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);
        overflow-y: visible;
        overflow-x: visible;
        transition: all 1s ease;
    }
    .collap {
        position: absolute;
        right: 0px;
        top: 0px;
        cursor: pointer;
    }
    .minify {
        overflow: hidden;
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background: green;
        min-width: 60px;
        min-height: 60px;
        z-index: 9999;
    }
    button.chat-activator {
        width: 60px;
    height: 60px;
    position: fixed;
    bottom: 10px;
    right: 10px;
    border-radius: 100%;
    background: green;
    color: #fff;
    font-size: 18px;
    z-index: 999;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border: 4px solid rgba(255,255,255, .7);
    }

    @import url("https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,900&display=swap");
body, html {
  font-family: Red hat Display, sans-serif;
  font-weight: 400;
  line-height: 1.25em;
  letter-spacing: 0.025em;
  color: #333;
  background: #F7F7F7;
}

.center {
    position: relative;
}

.pic {
  width: 4rem;
  height: 4rem;
  background-size: cover;
  background-position: center;
  border-radius: 50%;
}

.contact {
  position: relative;
  margin-bottom: 1rem;
  padding-left: 5rem;
  height: 4.5rem;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: center;
          justify-content: center;
}
.contact .pic {
  position: absolute;
  left: 0;
}
.contact .name {
  font-weight: 500;
  margin-bottom: 0.125rem;
}
.contact .message, .contact .seen {
  font-size: 0.9rem;
  color: #999;
}
.contact .badge {
  box-sizing: border-box;
  position: absolute;
  width: 1.5rem;
  height: 1.5rem;
  text-align: center;
  font-size: 0.9rem;
  padding-top: 0.125rem;
  border-radius: 1rem;
  top: 0;
  left: 2.5rem;
  background: #333;
  color: white;
}

.contacts {
  position: absolute;
  top: 50%;
  left: 0;
  -webkit-transform: translate(-6rem, -50%);
          transform: translate(-6rem, -50%);
  width: 24rem;
  height: 32rem;
  padding: 1rem 2rem 1rem 1rem;
  box-sizing: border-box;
  border-radius: 1rem 0 0 1rem;
  cursor: pointer;
  background: white;
  box-shadow: 0 0 8rem 0 rgba(0, 0, 0, 0.1), 2rem 2rem 4rem -3rem rgba(0, 0, 0, 0.5);
  -webkit-transition: -webkit-transform 500ms;
  transition: -webkit-transform 500ms;
  transition: transform 500ms;
  transition: transform 500ms, -webkit-transform 500ms;
}
.contacts h2 {
  margin: 0.5rem 0 1.5rem 5rem;
}
.contacts .fa-bars {
  position: absolute;
  left: 2.25rem;
  color: #999;
  -webkit-transition: color 200ms;
  transition: color 200ms;
}
.contacts .fa-bars:hover {
  color: #666;
}
.contacts .contact:last-child {
  margin: 0;
}
.contacts:hover {
  -webkit-transform: translate(-23rem, -50%);
          transform: translate(-23rem, -50%);
}

.chat {
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: justify;
          justify-content: space-between;
  width: 24rem;
  height: 38rem;
  z-index: 2;
  box-sizing: border-box;
  border-radius: 1rem;
  background: white;
  box-shadow: 0 0 8rem 0 rgba(0, 0, 0, 0.1), 0rem 2rem 4rem -3rem rgba(0, 0, 0, 0.5);
}
.chat .contact.bar {
  flex-basis: 3.5rem;
  flex-shrink: 0;
  margin: 1rem;
  box-sizing: border-box;
  position: relative;
}
.chat .messages {
  padding: 1rem;
  background: #F7F7F7;
  flex-shrink: 2;
  overflow-y: auto;
  box-shadow: inset 0 2rem 2rem -2rem rgba(0, 0, 0, 0.05), inset 0 -2rem 2rem -2rem rgba(0, 0, 0, 0.05);
}
.chat .messages .time {
  font-size: 0.8rem;
  background: #EEE;
  padding: 0.25rem 1rem;
  border-radius: 2rem;
  color: #999;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  margin: 0 auto;
}
.chat .messages .message {
  box-sizing: border-box;
  padding: 0.5rem 1rem;
  margin: 1rem;
  background: #FFF;
  border-radius: 1.125rem 1.125rem 1.125rem 0;
  min-height: 2.25rem;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  max-width: 66%;
  box-shadow: 0 0 2rem rgba(0, 0, 0, 0.075), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.1);
}
.chat .messages .message.parker {
  margin: 1rem 1rem 1rem auto;
  border-radius: 1.125rem 1.125rem 0 1.125rem;
  background: #333;
  color: white;
}
.chat .messages .message .typing {
  display: inline-block;
  width: 0.8rem;
  height: 0.8rem;
  margin-right: 0rem;
  box-sizing: border-box;
  background: #ccc;
  border-radius: 50%;
}
.chat .messages .message .typing.typing-1 {
  -webkit-animation: typing 3s infinite;
          animation: typing 3s infinite;
}
.chat .messages .message .typing.typing-2 {
  -webkit-animation: typing 3s 250ms infinite;
          animation: typing 3s 250ms infinite;
}
.chat .messages .message .typing.typing-3 {
  -webkit-animation: typing 3s 500ms infinite;
          animation: typing 3s 500ms infinite;
}
.chat .input {
  box-sizing: border-box;
  flex-basis: 4rem;
  flex-shrink: 0;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  padding: 0 0.5rem 0 1.5rem;
}
.chat .input i {
  font-size: 1.5rem;
  margin-right: 1rem;
  color: #666;
  cursor: pointer;
  -webkit-transition: color 200ms;
  transition: color 200ms;
}
.chat .input i:hover {
  color: #333;
}
.chat .input input {
  border: none;
  background-image: none;
  background-color: white;
  padding: 0.5rem 1rem;
  margin-right: 1rem;
  border-radius: 1.125rem;
  -webkit-box-flex: 2;
          flex-grow: 2;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.2);
  font-family: Red hat Display, sans-serif;
  font-weight: 400;
  letter-spacing: 0.025em;
}
.chat .input input:placeholder {
  color: #999;
}

@-webkit-keyframes typing {
  0%, 75%, 100% {
    -webkit-transform: translate(0, 0.25rem) scale(0.9);
            transform: translate(0, 0.25rem) scale(0.9);
    opacity: 0.5;
  }
  25% {
    -webkit-transform: translate(0, -0.25rem) scale(1);
            transform: translate(0, -0.25rem) scale(1);
    opacity: 1;
  }
}

@keyframes typing {
  0%, 75%, 100% {
    -webkit-transform: translate(0, 0.25rem) scale(0.9);
            transform: translate(0, 0.25rem) scale(0.9);
    opacity: 0.5;
  }
  25% {
    -webkit-transform: translate(0, -0.25rem) scale(1);
            transform: translate(0, -0.25rem) scale(1);
    opacity: 1;
  }
}
.pic.stark {
  background-image: url("https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/7/73/SMH_Mentor_6.png");
}

.pic.banner {
  background-image: url("https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/4/4f/BruceHulk-Endgame-TravelingCapInPast.jpg");
}

.pic.thor {
  background-image: url("https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/9/98/ThorFliesThroughTheAnus.jpg");
}

.pic.danvers {
  background-image: url("https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/0/05/HeyPeterParker.png");
}

.pic.rogers {
  background-image: url("https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/7/7c/Cap.America_%28We_Don%27t_Trade_Lives_Vision%29.png");
}

</style>
<button class="chat-activator"><i class="ti ti-comments"></i></button>
<div class="chat-box">
    <div class="center">

        <!--end CONTACTS-->
  <div class="contacts">
    <i class="ti ti-menu-alt"></i>
    <h2>
      Наш саппорт
    </h2>
    <div class="contact">
      <div class="pic rogers"></div>
      <div class="badge">
        14
      </div>
      <div class="name">
        Steve Rogers
      </div>
      <div class="message">
        Это задница Америки 🇺🇸🍑
      </div>
    </div>
    <div class="contact">
      <div class="pic stark"></div>
      <div class="name">
        Tony Stark
      </div>
      <div class="message">
        Он из космоса, он пришел сюда, чтобы украсть ожерелье у волшебника.
      </div>
    </div>
    <div class="contact">
      <div class="pic banner"></div>
      <div class="badge">
        1
      </div>
      <div class="name">
        Bruce Banner
      </div>
      <div class="message">
        Есть Человек-муравей * и * Человек-паук?
      </div>
    </div>
    <div class="contact">
      <div class="pic thor"></div>
      <div class="name">
        Thor Odinson
      </div>
      <div class="badge">
        3
      </div>
      <div class="message">
        мне нравится этот
      </div>
    </div>
  </div>

  <!--end CONTACTS-->
  <div class="chat">
    <div class="contact bar">
      <i class="ti ti-minus collap"></i>
      <div class="pic stark"></div>
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
     <i class="ti ti-upload" id="OpenImgUpload"></i><input placeholder="Напишите что нибудь..." type="text" /><i class="ti ti-microphone"></i>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    var chat = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight - chat.clientHeight;

    $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

    $('.collap').click(function(){ $('.chat-box').toggle('minify'); });
    $('.chat-activator').click(function(){ $('.chat-box').toggle('minify'); });
</script>