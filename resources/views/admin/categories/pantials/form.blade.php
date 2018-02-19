<div class="form-group row">
    <label class="col-sm-2 form-control-label">Наименование:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$category->title or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Статус:</label>
    <div class="col-sm-10">
        <label class="checkbox-inline">
            <select name="published" class="form-control">
                @if(isset($category->publisher))
                    <option value="{{ true }}" @if($category->publisher == true) selected @endif>Опубликовано</option>
                    <option value="{{ false }}"@if($category->publisher == false) selected @endif>Не опубликовано</option>
                @else
                    <option value="{{ true }}" >Опубликовано</option>
                    <option value="{{ false }}">Не опубликовано</option>
                @endif

            </select>
        </label>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Слог</label>
    <div class="col-sm-10">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="slug" value="{{$category->slug or '' }}">
                <div class="input-group-append">
                    <button id="slug-btn" type="button" class="btn btn-primary">Сгенерировать</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Описание:</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="8">
             {{$category->description or ""}}
        </textarea>
    </div>
</div>
<div class="line"></div>
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
@section ('ckeditor')
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection

