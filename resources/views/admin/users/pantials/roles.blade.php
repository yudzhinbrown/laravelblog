@foreach($roles as $role)
    <option value="{{ $role->id }}"
    @isset($user->id)
        @if($role->id == $user->roles->first()->id)
            selected
        @endif
    @endisset
    >{{$role->name }}</option>
@endforeach

