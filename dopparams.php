<style>
    .params {
        width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
    }
    .openparams {
       display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    width: auto;
    margin: 15px auto;
    color: #000;
    border-bottom: 1px dashed #000;
    font-size: 16px;
    height: 20px;
    position: relative;
    float: left;
    text-align: left;
    box-sizing: border-box;
    padding: 0;

    }
    .par {display: none; height: 0px;transition: all 0.3s ease-in}
    .par.open {display: flex; height: auto;transition: all 0.3s ease-in}
    .form-control {
    display: inline-block;
    height: auto;
    min-height: 40px;
    float: left;
    min-width: auto;
}
.per100 {
    width: 100%;
}
.openparams i {margin-left: 10px;}
i.ti.ti-alert {color: red;font-weight: 700;}
.ti-angle-down:before {
    content: "\e64b";
    margin: 0px;
    color: red;
}
p.alert {font-size: 12px; font-weight: 700;}


</style>
<div class="col-12">
<div class="openparams" id="openparams"> Расширенные параметры <i class="ti ti-angle-down"id="icon-change"></i></div>

<div class="params" id="params">
    
    <div class="row par" id="par">

<div class="form-row per100">
         <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Рекламная сеть</label>
            <div class="input-group">
            <select name="selectSm" id="selectSm" class="form-control-sm form-control">
              <option value="0">Binom</option>
              <option value="1">Teasernet</option>
              <option value="2">Bodyclick</option>
              <option value="3">Marketgid</option>
              <option value="4">PropellelAds</option>
              <option value="5">Iskander</option>
            </select>
            </div>
        </div>
        <div class="form-group col-md-4 col-sm-12 col-xs-12">
            <label class="form-control-label">Site_ID</label>
                <div class="input-group">
                    <input class="form-control" placeholder="{siteid}">
                </div>
        </div>
        <div class="form-group col-md-4 col-sm-12 col-xs-12">
            <label class="form-control-label">Source</label>
                <div class="input-group">
                    <input class="form-control" placeholder="{source}">
                </div>
        </div>
    </div>
    <div class="form-row per100">
        <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Параметр pt_id1</label>
        <div class="input-group">
            <input class="form-control" placeholder="пусто">
        </div>
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Параметр pt_id2</label>
        <div class="input-group">
            <input class="form-control" placeholder="пусто">
        </div>
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Параметр pt_id3</label>
        <div class="input-group">
            <input class="form-control" placeholder="пусто">
        </div>
        </div>
</div>

</div>


</div>

</div>
<script>
    document.getElementById('openparams').onclick = function() {
        document.getElementById('par').classList.toggle('open');
        document.getElementById('icon-change').classList.toggle('ti-angle-up');
    }
</script>
