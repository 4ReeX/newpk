<style>

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
