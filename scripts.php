<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-3.4.1.js"></script>
<script src="assets/js/iosCheckbox.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>




<script type="text/javascript">
    var chat = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight - chat.clientHeight;

    $('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

    $('.collap').click(function(){ $('.chat-box').toggle('minify'); });
    $('.activator').click(function(){ $('.chat-box').toggle('minify'); });
    $('#startDialog').click(function(){ $('.start-window').toggle('hide'); });
</script>
<script>
	go();
	window.addEventListener('resize', go);

	function go(){
  		document.getElementById("menuuu").style.bottom = "0px!important";
	}
</script>