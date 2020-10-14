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
        width: 210px;
        margin: 10px auto;
        color: #000;
        border-bottom: 1px dashed #000;
        font-size: 16px;
        height: 20px;
        position: relative;
        float: left;
        text-align: left;

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

</style>
<div class="col-12">
<div class="openparams" id="openparams">Расширенные параметры</div>
<div class="params" id="params">
    
    <div class="row par" id="par">

<div class="form-row per100">
         <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Рекламная сеть/трекер</label>
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
            <label class="form-control-label">Свой параметр</label>
        <div class="input-group">
            <input class="form-control" placeholder="пусто">
        </div>
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Свой параметр</label>
        <div class="input-group">
            <input class="form-control" placeholder="пусто">
        </div>
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label class="form-control-label">Свой параметр</label>
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
    }
</script>