<style>
table th {    text-align: right;}
.modal-body {overflow-x: scroll;}
</style>
<div class="modal fade" id="macrosModal" tabindex="-1" role="dialog" aria-labelledby="macrosModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header" style="float: left; display: flex;">
<h5 class="modal-title">Макросы рекл.сетей</h5>
<hr>


<button type="button" class="close" data-dismiss="modal">×</button></div>
<div class="modal-body sm-mod">
    <div class="form-row">
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
    <div class="form-row">
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
     <div class="modal-footer">
        <button type="button" class="btn btn-primary">Сохранить</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Пропустить</button>
    </div>
</div>
</div>
</div>
</div>