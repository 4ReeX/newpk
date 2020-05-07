<style>
  * {
    -webkit-user-select: none;
  -moz-user-select: moz-none;
  -ms-user-select: none;
  user-select: none;
  }
  /*! CSS Used from: Embedded */
md-icon{color:rgba(0,0,0,0.54);}
/*! CSS Used from: Embedded */
md-card{background-color:rgb(255,255,255);border-radius:2px;}
/*! CSS Used from: http://adminio.themonkeythemes.com/dist/css/bootstrap.min.css */
svg:not(:root){overflow:hidden;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
p,h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h3{margin-top:20px;margin-bottom:10px;}
h3{font-size:24px;}
p{margin:0 0 10px;}
.col-sm-3{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-sm-3{float:left;}
.col-sm-3{width:25%;}
}
/*! CSS Used from: http://adminio.themonkeythemes.com/dist/css/angular-material.min.css */
md-card{box-sizing:border-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin:8px;box-shadow:0 1px 3px 0 rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12);}
md-card md-card-content{display:block;padding:16px;}
md-card md-card-content>p:last-child{margin-bottom:0;}
@media screen and (-ms-high-contrast:active){
md-card{border:1px solid #fff;}
}
md-icon{margin:auto;background-repeat:no-repeat no-repeat;display:inline-block;vertical-align:middle;fill:currentColor;height:24px;width:24px;}
md-icon svg{pointer-events:none;display:block;}
/*! CSS Used from: http://adminio.themonkeythemes.com/dist/css/main.css */
::-webkit-scrollbar-thumb{background:#009688;border-radius:0!important;width:4px!important;right:0!important;}
svg{width:100%;}
h3{font-weight:400;}
body h3,html h3{display:block;-webkit-margin-before:1em;-webkit-margin-after:1em;-webkit-margin-start:0;-webkit-margin-end:0;font-size:1.17em;font-weight:700;}
md-card md-card-content{background:#fff;position:relative;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;display:block;}
md-card md-card-content.card-primary{background-color:#009688;color:#fff;}
md-card md-card-content.card-primary md-icon{color:#fff;}
md-card .card-bg-icon{position:absolute;left:50%;top:50%;margin-left:-100px;margin-top:-100px;font-size:200px;opacity:.3;color:#fff;}
md-card .card-bg-icon md-icon{height:50%;width:auto;}
md-card{display:block; cursor: pointer;}
::selection{background:#009688;color:#fff;}
::-moz-selection{background:#009688;color:#fff;}
md-card {
    display: block;
    overflow: hidden;
}
.news-text-preview {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}


i.icon-bg {    height: 50%;    width: auto;    opacity: 0.3;}
md-card .card-bg-icon md-icon {    height: 50%;    width: auto;    opacity: 0.3;}
i.iconNews {
    font-size: 20px;
    font-weight: 500;
    color: #757575;
}
.card-bg-icon i {
    font-size: 13rem;
    color: #000;
    opacity: 0.2;
    top: 0rem;
    right: -18rem;
    position: absolute;
}
 .newsCarousel {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  flex-wrap: nowrap;
  width: 100%;
  overflow-x: auto;
  margin-bottom: 40px;
 }
 @media screen and (max-width: 414px) {
  .newsCarousel {
    flex-wrap: wrap;
  }
 }

</style>
<div class="row newsCarousel" id="test">
    <div class="col-sm-3">
      <md-card>
        <md-card-content class="card-success">
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
        <md-card-content class="card-info">
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
        <md-card-content class="card-info">
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
        <md-card-content class="card-warning">
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
        <md-card-content class="card-danger">
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