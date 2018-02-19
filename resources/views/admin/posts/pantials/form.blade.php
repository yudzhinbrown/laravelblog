<div class="form-group row">
    <label class="col-sm-2 form-control-label">Заголовок:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="{{$post->title or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Слог:</label>
    <div class="col-sm-10">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="slug" value="{{$post->slug or '' }}">
                <div class="input-group-append">
                    <button id="slug-btn" type="button" class="btn btn-primary">Сгенерировать</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Видео(Youtube):</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="video"
               value="@if(isset($post->video) && !empty($post->video)) https://www.youtube.com/watch?v={{$post->video}}@endif">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label" >Статус:</label>
    <div class="col-sm-10">
        <select name="published" class="form-control">
            @if(isset($category->publisher))
                <option value="{{ true }}" @if($category->publisher == true) selected @endif>Опубликовано</option>
                <option value="{{ false }}"@if($category->publisher == false) selected @endif>Не опубликовано</option>
            @else
                <option value="{{ true }}" >Опубликовано</option>
                <option value="{{ false }}">Не опубликовано</option>
            @endif

        </select>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Краткое описание:</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="description_short" name="description_short" rows="8">
            {{$post->description_short or ""}}
        </textarea>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Полное описание:</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="8">
             {{$post->description or ""}}
        </textarea>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Категория:</label>
    <div class="col-sm-10">
        <select  class="form-control" name="category_id">
               @include("admin.posts.pantials.categories")
        </select>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Тэги:</label>
    <div class="col-sm-10">
        <select multiple  class="form-control select-multiple" name="tags[]">
            @include("admin.posts.pantials.tags")
        </select>
    </div>
</div>
<div class="line"></div>
<input type="hidden" name="user_id" value="{{Auth::id()}}">
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
@section ('ckeditor')
    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'description_short' );
        $(document).ready(function() {
            $('.select-multiple').select2();
        });
    </script>
@endsection
