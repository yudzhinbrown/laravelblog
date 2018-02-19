@forelse($tags as $tag)
    <option value="{{ $tag->id }}"
        @isset ($post->id)
            @foreach($post->tags as $tag_post)
                @if($tag->id == $tag_post->id)
                selected
                @endif
            @endforeach
        @endisset

    >{{ $tag->title }}</option>
@empty
    <h4>Таблица с тэгами пуста</h4>
@endforelse