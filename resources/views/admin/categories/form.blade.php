<div class="form-group row">
    <label class="col-sm-2 form-control-label">Наименование:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$category->title or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label" >Опубликовано</label>
        <div class="col-sm-10">
        <label class="checkbox-inline">
            <input id="inlineCheckbox1" type="checkbox" name="published" @if(isset($category->published) && $category->published) checked @endif value="{{ true }}">
        </label>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Слог</label>
    <div class="col-sm-10">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="slug">
                <div class="input-group-append">
                    <button id="slug-btn" type="button" class="btn btn-primary">Сгенерировать</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line"></div>
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
<div id="response"></div>
