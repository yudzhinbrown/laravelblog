<div class="form-group row">
    <label class="col-sm-2 form-control-label">E-mail:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="{{$user->email or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Имя</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" value="{{$user->name or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Пароль</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="password" value="{{$user->name or '' }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Роль:</label>
    <div class="col-sm-10">
        <select  class="form-control" name="role">
            @include("admin.users.pantials.roles")
        </select>
    </div>
</div>
<div class="line"></div>
<div class="col-sm-4 offset-sm-2">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

