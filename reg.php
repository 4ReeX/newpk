<div class="darkbg hide">
<div class="popupMorda">
<form id="registration-form">
<h1></h1>
<input type="text" name="signup-username" placeholder="Имя пользователя">
<input type="text" name="telegram" placeholder="Telegram">
<input type="email" name="email" placeholder="E-mail">
<input type="password" name="pass" placeholder="Пароль">
<span class="hide-password" style="cursor: pointer;">Показать</span>
<input name="isTermsConfirmed" type="checkbox" class="checkLogin" checked="true"><label for="accept-terms" style="padding-left: 25px; min-width: 0px;">Я согласен с  <a href="/rules" target="_blank" rel="noopener noreferrer"> Условиями</a></label>

<a href="#" class="login-btn" id="signup-btn">Создать аккаунт</a>
</form>
<form id="login-form">
<input type="email" name="email" placeholder="E-mail">
<span class="login-error is-visible">Пользователь не найден</span>
<input type="password" name="pass" placeholder="Пароль">
<a href="#" class="login-btn">Войти</a>
</form>
<form id="fpass-form">
<input type="text" name="forgotten" placeholder="E-mail для сброса пароля">
<a href="#" class="login-btn" id="getpass-btn">Восстановить пароль</a>
</form>
<div class="other-options">
<div class="option" id="newUser"><p class="option-text">Новый пользователь</p></div>
<div class="option" id="fPass"><p class="option-text"> Восстановить пароль</p></div>
</div>   
</div>
<div class="close" onclick="closeRegPop();">×</div>
</div>