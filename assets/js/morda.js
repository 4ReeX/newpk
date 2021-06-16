
    function changeTheme(){ 
        $('body').toggleClass('theme-dark');   
        $( "span.lightMode" ).toggle();    
    };

  $("#newUser").click(function(){
  //$("h1").text("Регистрация");
  $(".logo").css({
    "width":"120px",
    "height":"120px",
    "top":"10px"
  });
  $("#login-form").fadeOut(200);
  $("#registration-form").delay(300).fadeIn(500);
  $(".other-options").fadeOut(200);
});

$("#signup-btn,#getpass-btn").click(function(){
  $("h1").text("Войти");
  $(".logo").css({
    "width":"150px",
    "height":"150px",
    "top":"30px"
  });

  $("#registration-form,#fpass-form").fadeOut(200);
  $("#login-form").delay(300).fadeIn(500);
  $(".other-options").fadeIn(300);
});

$("#fPass").click(function(){
  //$("h1").text("Восстановление пароля");
  $(".logo").css({
    "width":"190px",
    "height":"190px",
    "top":"40px"
  });

  $("#login-form").fadeOut(200);
  $("#fpass-form").delay(300).fadeIn(500);
  $(".other-options").fadeOut(200);
});

          var $home = $("#home");
          var $about = $("#about");
          var $graph = $("#graph");
          var $news = $("#news");
          var $login = $("#login");
          var $all = $('#home, #about, #graph, #news, #login');


         function home() {
         $all.removeClass( "activeScene" );
         $all.addClass( "hiddenScene" );
         $home.addClass( "activeScene" );
         }
         function about() {
         $all.removeClass( "activeScene" );
         $all.addClass( "hiddenScene" );
         $about.addClass( "activeScene" );
         }
         function graph() {
         $all.removeClass( "activeScene" );
         $all.addClass( "hiddenScene" );
         $graph.addClass( "activeScene" );
         }
         function news() {
         $all.removeClass( "activeScene" );
         $all.addClass( "hiddenScene" );
         $news.addClass( "activeScene" );
         }
         function login() {
         $all.removeClass( "activeScene" );
         $all.addClass( "hiddenScene" );
         $login.addClass( "activeScene" );
         }
         function Registration() {
          
          $(".other-options").fadeOut(200);
          $("#login-form").fadeOut(200);
          $("#registration-form").delay(300).fadeIn(500);
         // $("h1").text("Регистрация");
          $all.removeClass( "activeScene" );
          $all.addClass( "hiddenScene" );
          $login.addClass( "activeScene" );
         }
        
        $('.read').click(function(){
          $(this).html('visibility_off');
          $(this).next('.full-article').toggleClass("hidden");
        });
 $(document).ready(function(){
    $(window).scrollTop(0);
});




