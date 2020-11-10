<link rel="stylesheet" href="assets/css/chunk.css">
<link rel="stylesheet" href="assets/css/sidebar.css?v1">
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
    <div class="main-menu" id="menuuu" style="transition: all 2s ease-out;">
        <div class="scroll">
            <div class="scrollbar-container ps">
                <ul class="list-unstyled nav flex-column menu-s">
                    <li class="nav-item"><a aria-current="page" class="active" data-flag="dashboards" href="index.php"><i class="ti ti-desktop"></i> <span>Дашборд</span></a></li>
                    <li class="nav-item"><a data-flag="pages" href="stats.php"><i class="ti ti-stats-up"></i> <span>Статистика</span></a></li>
                    <li class="nav-item active"><a data-flag="applications" href="offers.php"><i class="ti ti-shopping-cart-full"></i> <span>Офферы</span></a></li>
                    <li class="nav-item"><a data-flag="applications" href="srez.php"><i class="ti ti-stats-up"></i> <span>Срезы</span></a></li>
                    <li class="nav-item"><a data-flag="pages" href="news-admin.php"><i class="ti ti-book"></i> <span>Новости</span></a></li>
                    <li class="nav-item"><a href="offers-a.php" rel="noopener noreferrer" target="_blank"><i class="ti ti-power-off"></i> <span>Выход</span></a></li>
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
</div>

