@foreach($categories as $category)
    <option value="{{ $category->id }}"
    @isset($post->id)
        @if($category->id == $post->category_id)
            selected
        @endif
    @endisset
    >{{ $category->title }}</option>
@endforeach