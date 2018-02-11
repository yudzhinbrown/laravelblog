<div class="form-group row">
    <label class="col-sm-2 form-control-label">Наименование:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$tag->title or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label" name="published "  >Опубликовано</label>
        <div class="col-sm-10">
        <label class="checkbox-inline">
            <input id="inlineCheckbox1" type="checkbox" name="published" @if(isset($tag->published) && $tag->published) checked @endif value="{{ true }}">
        </label>
    </div>
</div>
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
