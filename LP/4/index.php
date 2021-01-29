<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"href="animate.min.css"/>
	<title>Видео портал</title>
	<link href="img/favicon.ico" rel="shortcut icon">
    <link href="css/styles-simple.css" rel="stylesheet">
    <link href="css/Captcha-simple.css" rel="stylesheet">
	<style>
        #page {overflow: hidden;}

		.top-img {display: flex; flex-direction: row; justify-content: flex-start; align-items: center; flex-wrap: wrap; width: auto; height: 30vh; overflow-x: auto; margin-bottom: 10px;}
        .top-img::-webkit-scrollbar { display: none;}
        .top-img img {height: 100%; width: auto;}
	</style>
</head>
<body>
    <body>
    <div id="page">
        <div class="main-content">
<h1 id="subscr-name" style="text-align: center; font-size: 18px; line-height: 1.2;"><img src="img/st.png" alt="" style="width: 100px;"><br>
	<span>Онлайн кинотеатр</span></h1>
	<div id="subscr-price" style="text-align: center;">Видеоролики, Фильмы, Сериалы, Мультфильмы</div>
    <div class="top-img"><img src="img/top-img.png" alt="" onclick="onBtn();"></div>
	<div id="subscr-msisdn">&nbsp;</div>


	<form id="subscr-form">
            <div id="activation-code-container">
            	<div>Для получения БЕСПЛАТНОГО ТРИАЛ ПЕРИОДА, </div>
                <label for="ActivationCode">Отправьте код активации, в SMS:</label>
                <div style="margin-top: 5px;"><div id="time" style="font-size: 22px;"></div></div>
                <p id="ActivationCode_Validator" style="display: none;">* Введите код доступа.</p>
            </div>
        <div id="submit-container" style="margin-top: 35px;">
            <label for="ButtonSubmit">Если Вы согласны с условиями оказания услуги, нажмите кнопку <b>«Получить SMS»</b></label>
            <div>
                    <input id="ButtonSubmit" type="button" value="Получить код по SMS" onclick="link();">

                    <div id="go-back-container">
                        <a id="ButtonGoBack" href="javascript: goBack();">Вернуться на сайт</a>
                    </div>
            </div>
        </div>
</form>
    








<span style="display:none;">Correct response</span>
<!--START FOOTER-->
        </div>
    </div>
</div></body></html>









	<script>
	function goBack() {
	window.history.back();
	}
	</script>
	<script type="text/javascript">
		setTimeout(counterMy, 2000);
		function counterMy() {
			$('.count').toggleClass('vis');
		}


		function onBtn() {
			$('#btn').toggleClass('animate__flash');
			setTimeout(onBtn, 2000);
		};
		function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 3.5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};

</script>
<script>
	function link() {
	window.location.href = "{offer_link}";
}
</script>
		
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>