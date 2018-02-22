
<label class="col-sm-3">Заголовок поста:</label>
<div class="col-sm-9"><input type="text" required="" name="title" value="{{$post->title or '' }}"></div>

<div class="line"></div>

<label class="col-sm-3">Слог:</label>
<div class="col-sm-7"><input type="text" required="" name="slug" value="{{$post->slug or '' }}"></div>
<div class="col-sm-2">
    <button id="slug-btn" type="button" class="btn btn-sub-1">Сгенерировать</button>
</div>

<div class="line"></div>

<label class="col-sm-3">Видео(Youtube):</label>
<div class="col-sm-9"><input type="text"  name="video"
                             value="@if(isset($post->video) && !empty($post->video)) https://www.youtube.com/watch?v={{$post->video}}@endif">
</div>
<div class="line"></div>

<label class="col-sm-3">Статус:</label>
<div class="col-sm-9 select-box">
    <select name="published" class="form-control">
        @if(isset($category->publisher))
            <option value="{{ true }}" @if($category->publisher == true) selected @endif>Опубликовано</option>
            <option value="{{ false }}" @if($category->publisher == false) selected @endif>Не опубликовано</option>
        @else
            <option value="{{ true }}">Опубликовано</option>
            <option value="{{ false }}">Не опубликовано</option>
        @endif
    </select>
</div>

<div class="line"></div>

<label class="col-sm-3">Краткое описание:</label>
<div class="col-sm-9">
    <textarea name="description_short" id="description_short">
         {{$post->description_short or ""}}
    </textarea>
</div>

<div class="line"></div>

<label class="col-sm-3">Полное описание:</label>
<div class="col-sm-9">
    <textarea name="description" id="description">
         {{$post->description or ""}}
    </textarea>
</div>

<div class="line"></div>


<label class="col-sm-3">Категория:</label>
<div class="col-sm-9 select-box">
    <select class="form-control " name="category_id">
        @include("admin.posts.pantials.categories")
    </select>
</div>
<div class="line"></div>

<label class="col-sm-3">Тэги:</label>
<div class="col-sm-9 select-box">
    <select class="form-control select-multiple" name="category_id" multiple>
        @include("admin.posts.pantials.tags")
    </select>
</div>
<div class="line"></div>

<input type="submit" value="SEND">
@section ('ckeditor')
    <script>
        $(document).ready(function () {
            $('.select-multiple').select2();
            //CKEDITOR.replace( 'description_short' );
        });
    </script>
@endsection