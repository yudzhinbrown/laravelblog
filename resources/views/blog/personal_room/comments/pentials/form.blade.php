<label class="col-sm-3">Заголовок поста:</label>
<div class="col-sm-9"><input type="text" disabled value="{{ $comment->commentable->title or '' }}"></div>

<div class="line"></div>

<label class="col-sm-3">Текс:</label>
<div class="col-sm-9">
    <textarea name="text" id="text">
         {{$comment->text or ""}}
    </textarea>
</div>

<div class="line"></div>

<input type="submit" value="Сохранить">