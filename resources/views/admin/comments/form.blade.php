<div class="form-group row">
    <label class="col-sm-2 form-control-label">Автор:</label>
    <div class="col-sm-10">
        <input type="text"  disabled class="form-control" value="{{$comment->user->name or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Заголовок Поста:</label>
    <div class="col-sm-10">
        <input type="text" disabled class="form-control"  value="{{$comment->commentable->title or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Описание:</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="text" name="text" rows="8">
             {{$comment->text or ""}}
        </textarea>
    </div>
</div>
<div class="line"></div>
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
@section ('ckeditor')
    <script>
        CKEDITOR.replace( 'text' );
    </script>
@endsection

