<style>

</style>
 <div class="card" style="overflow: hidden;">

<div class="row newsCarousel" id="newsCar">
    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-danger" data-toggle="modal" data-target="#modalFullNews">
          <div class="card-bg-icon">
            <i class="ti ti-shopping-cart-full"></i>
          </div>
          
          <i class="iconNews ti ti-shopping-cart-full"></i>
          <h3>Появился новый оффер</h3>

          <p class="news-text-preview">
            Мы рады представить вашему вниманию новые, свежие, вкусные, самые лучшие в мире в инетернете офферы
          </p>
        </md-card-content>
      </md-card>
    </div>
    


    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-danger" data-toggle="modal" data-target="#modalFullNews">
          <div class="card-bg-icon">
            <i class="ti ti-package"></i>
          </div>
           <i class="iconNews ti ti-package"></i>
          <h3>Обновление кабинета</h3>
          <p class="news-text-preview">
            Версия партнёрского кабината 1.221 (основной список изменений)
          </p>
        </md-card-content>
      </md-card>
    </div> 

    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-danger" data-toggle="modal" data-target="#modalFullNews">
          <div class="card-bg-icon">
           <i class="ti ti-ruler-alt-2"></i>
          </div>
         <i class="iconNews ti ti-ruler-alt-2"></i>
          <h3>Новый функционал</h3>
          <p class="news-text-preview">
            В партнёрском кабинете появилась функция рассчёта доходности по принципу пальцем в небо.
          </p>
        </md-card-content>
      </md-card>
    </div>

    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-danger" data-toggle="modal" data-target="#modalFullNews">
          <div class="card-bg-icon">
            <i class="ti ti-car"></i>
          </div>
          <i class="iconNews ti ti-car"></i>
          <h3>Новый розыгрыш</h3>
          <p class="news-text-preview">
            Сегодня в розыгрыше у нас ААААААВТОМОБИЛЬ!
          </p>
        </md-card-content>
      </md-card>
    </div>

    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-danger" data-toggle="modal" data-target="#modalFullNews">
          <div class="card-bg-icon">
            <i class="ti ti-comment-alt"></i>
          </div>
          <i class="iconNews ti-comment-alt"></i>
          <h3>Новость про чат</h3>
          <p class="news-text-preview">
            Любой текст который вы оставите здесь, обрежется на 2 строки не зависимо от размеров блока, ширины, шрифтов и прочей лабуды
          </p>
        </md-card-content>
      </md-card>
    </div>
    <p><a href="#" class="btn">Больше новостей</a></p>
</div>

<!-- The Modal -->
<div class="modal fade" id="modalFullNews">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Заголовок новости</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php include 'statya.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Больше не показывать</button>
      </div>

    </div>
  </div>
</div>

  </div>