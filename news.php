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

md-card .card-bg-icon md-icon {    height: 50%;    width: auto;    opacity: 0.3;}
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
            <md-icon md-svg-src="dist/img/icons/ic_hearing_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M34 40c-.57 0-1.13-.12-1.53-.3-1.41-.75-2.43-1.77-3.42-4.77-1.03-3.11-2.94-4.58-4.79-6.01-1.58-1.22-3.22-2.48-4.63-5.05C18.58 21.95 18 19.86 18 18c0-5.61 4.39-10 10-10s10 4.39 10 10h4c0-7.85-6.15-14-14-14s-14 6.15-14 14c0 2.53.76 5.3 2.13 7.8 1.82 3.31 3.97 4.96 5.7 6.3 1.62 1.25 2.79 2.15 3.43 4.09 1.2 3.63 2.75 5.68 5.45 7.1 1.04.47 2.14.71 3.29.71 4.41 0 8-3.59 8-8h-4c0 2.21-1.79 4-4 4zM15.27 5.27l-2.83-2.83C8.46 6.42 6 11.92 6 18s2.46 11.58 6.44 15.56l2.83-2.83C12.01 27.47 10 22.97 10 18s2.01-9.47 5.27-12.73zM23 18c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5z"></path></svg></md-icon>
          </div>
          <md-icon md-svg-src="dist/img/icons/ic_hearing_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M34 40c-.57 0-1.13-.12-1.53-.3-1.41-.75-2.43-1.77-3.42-4.77-1.03-3.11-2.94-4.58-4.79-6.01-1.58-1.22-3.22-2.48-4.63-5.05C18.58 21.95 18 19.86 18 18c0-5.61 4.39-10 10-10s10 4.39 10 10h4c0-7.85-6.15-14-14-14s-14 6.15-14 14c0 2.53.76 5.3 2.13 7.8 1.82 3.31 3.97 4.96 5.7 6.3 1.62 1.25 2.79 2.15 3.43 4.09 1.2 3.63 2.75 5.68 5.45 7.1 1.04.47 2.14.71 3.29.71 4.41 0 8-3.59 8-8h-4c0 2.21-1.79 4-4 4zM15.27 5.27l-2.83-2.83C8.46 6.42 6 11.92 6 18s2.46 11.58 6.44 15.56l2.83-2.83C12.01 27.47 10 22.97 10 18s2.01-9.47 5.27-12.73zM23 18c0 2.76 2.24 5 5 5s5-2.24 5-5-2.24-5-5-5-5 2.24-5 5z"></path></svg></md-icon>

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
            <md-icon md-svg-src="dist/img/icons/ic_add_alarm_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M15.76 6.78l-2.57-3.06L4 11.43l2.57 3.06 9.19-7.71zM44 11.44l-9.19-7.71-2.57 3.06 9.19 7.71L44 11.44zM23.99 8C14.04 8 6 16.06 6 26s8.04 18 17.99 18S42 35.94 42 26 33.94 8 23.99 8zM24 40c-7.73 0-14-6.27-14-14s6.27-14 14-14 14 6.27 14 14-6.26 14-14 14zm2-22h-4v6h-6v4h6v6h4v-6h6v-4h-6v-6z"></path></svg></md-icon>
          </div>
          <md-icon md-svg-src="dist/img/icons/ic_add_alarm_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M15.76 6.78l-2.57-3.06L4 11.43l2.57 3.06 9.19-7.71zM44 11.44l-9.19-7.71-2.57 3.06 9.19 7.71L44 11.44zM23.99 8C14.04 8 6 16.06 6 26s8.04 18 17.99 18S42 35.94 42 26 33.94 8 23.99 8zM24 40c-7.73 0-14-6.27-14-14s6.27-14 14-14 14 6.27 14 14-6.26 14-14 14zm2-22h-4v6h-6v4h6v6h4v-6h6v-4h-6v-6z"></path></svg></md-icon>
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
            <md-icon md-svg-src="dist/img/icons/ic_redeem_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M40 12h-4.37c.22-.63.37-1.29.37-2 0-3.31-2.69-6-6-6-2.09 0-3.93 1.07-5 2.69l-1 1.36-1-1.36C21.93 5.07 20.09 4 18 4c-3.31 0-6 2.69-6 6 0 .71.14 1.37.37 2H8c-2.21 0-3.98 1.79-3.98 4L4 38c0 2.21 1.79 4 4 4h32c2.21 0 4-1.79 4-4V16c0-2.21-1.79-4-4-4zM30 8c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM18 8c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm22 30H8v-4h32v4zm0-10H8V16h10.16L14 21.67 17.25 24 22 17.53l2-2.72 2 2.72L30.75 24 34 21.67 29.84 16H40v12z"></path></svg></md-icon>
          </div>
          <md-icon md-svg-src="dist/img/icons/ic_redeem_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M40 12h-4.37c.22-.63.37-1.29.37-2 0-3.31-2.69-6-6-6-2.09 0-3.93 1.07-5 2.69l-1 1.36-1-1.36C21.93 5.07 20.09 4 18 4c-3.31 0-6 2.69-6 6 0 .71.14 1.37.37 2H8c-2.21 0-3.98 1.79-3.98 4L4 38c0 2.21 1.79 4 4 4h32c2.21 0 4-1.79 4-4V16c0-2.21-1.79-4-4-4zM30 8c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM18 8c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm22 30H8v-4h32v4zm0-10H8V16h10.16L14 21.67 17.25 24 22 17.53l2-2.72 2 2.72L30.75 24 34 21.67 29.84 16H40v12z"></path></svg></md-icon>
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
            <md-icon md-svg-src="dist/img/icons/ic_insert_comment_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M40 4H8C5.79 4 4 5.79 4 8v24c0 2.21 1.79 4 4 4h28l8 8V8c0-2.21-1.79-4-4-4zm-4 24H12v-4h24v4zm0-6H12v-4h24v4zm0-6H12v-4h24v4z"></path></svg></md-icon>
          </div>
          <md-icon md-svg-src="dist/img/icons/ic_insert_comment_48px.svg" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 48 48" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M40 4H8C5.79 4 4 5.79 4 8v24c0 2.21 1.79 4 4 4h28l8 8V8c0-2.21-1.79-4-4-4zm-4 24H12v-4h24v4zm0-6H12v-4h24v4zm0-6H12v-4h24v4z"></path></svg></md-icon>
          <h3>Новость про чат</h3>
          <p class="news-text-preview">
            Любой текст который вы оставите здесь, обрежется на 2 строки не зависимо от размеров блока, ширины, шрифтов и прочей лабуды
          </p>
        </md-card-content>
      </md-card>
    </div>
    <p><a href="#" class="btn">Больше новостей</a></p>
</div>