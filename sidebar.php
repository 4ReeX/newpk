<link rel="stylesheet" href="assets/css/chunk.css">
<link rel="stylesheet" href="assets/css/sidebar.css?v4561">
<div class="sidebar">
	<div class="search-activate" id="SearchToggle">
		<img src="images/avatar/bottom.png" alt="" id="s1">
		<i class="ti ti-search sButton"></i>
	</div>
	<div class="search-menu" id="SearchBlock">
		<div class="line1">

            <div class="input-group d-flex search-line">
               <span class="search-icon"><i class="ti ti-search"></i></span>
               <input class="form-control py-2 border-right-0 border col-lg-12" type="search" value="" placeholder="Поиск..." id="offer-search"><!--&#128270;-->
               <span class="close" onclick="this.previousElementSibling.value = ''">
               &times;
               </span>

            </div>
            <span class="zapisey">Всего записей: 200</span>
         </div>
         <div class="line2">
             <div class="d-flex flex-row pick-offers"><div class="videleno cur-p">Выделено офферов</div><span class="cur-p">15</span></div>
             <button type="button" class="btn btn-outline create-links"  data-toggle="modal">Создать ссылки</button> 
         </div>
	</div>
    <div class="main-menu" id="menuuu">
        <div class="scroll">
            <div class="scrollbar-container ps">
                <ul class="list-unstyled nav flex-column">
                    <li class="nav-item"><a aria-current="page" class="active" data-flag="dashboards" href="index.php"><i class="ti ti-desktop"></i> <span>Дашборд</span></a></li>
                    <li class="nav-item"><a data-flag="pages" href="stats.php"><i class="ti ti-stats-up"></i> <span>Статистика</span></a></li>
                    <li class="nav-item active"><a data-flag="applications" href="offers.php"><i class="ti-shopping-cart-full"></i> <span>Офферы</span></a></li>
                    
                    <li class="nav-item"><a data-flag="blankpage" id="more"><i class="ti ti-arrow-circle-right"></i> <span>Ещё</span></a></li>
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-menu">
      <div class="top-info"><span class="balance">10 565 665 <i class="fa fa-rub"></i></span></div>
      <hr>
      <ul class="list-unstyled nav flex-column">
      <li class="nav-item"><a data-flag="ui" href="potok.php" class="active"><i class="ti ti-control-shuffle"></i> <span>Потоки</span></a></li>
      <li class="nav-item"><a data-flag="menu" href="fin.php"><i class="ti ti-wallet"></i> <span>Финансы</span></a></li>
      <li class="nav-item"><a data-flag="blankpage" href="api.php"><i class="ti ti-ruler-pencil"></i> <span>Инструменты</span></a></li>
      <li class="nav-item"><a href="faq.php" rel="noopener noreferrer"><i class="ti ti-help-alt"></i> <span>FAQ</span></a></li>
      <li class="nav-item nav-avatar"><a data-flag="pages" href="user.php"><i class="ti ti-user"></i> <span>Профиль</span></a></li>
      <li class="nav-item"><a href="index-admin.php" rel="noopener noreferrer" target="_blank"><i class="ti ti-power-off"></i> <span>Выход</span></a></li>
    </ul>
    </div>
</div>
<script>
  document.getElementById("more").onclick = function(){
    //prompt('Hello world');
    var body = document.body;
    body.classList.toggle("slideleft");
}
</script>

