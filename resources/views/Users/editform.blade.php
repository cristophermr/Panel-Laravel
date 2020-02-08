<div class="form-group">
    <label for="title">Nombre Completo</label>
    <input type="text" class="form-control" name="name" id="name">
</div>
<div class="form-group">
    <label for="title">Email</label>
    <input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
    <label for="rol">Rol</label>
    <select name="rol" id="rol" class="form-control">
        <option value="">Seleccione un rol</option>
        @foreach($Roles as $Rol)
            <option value="{{$Rol->id}}">{{$Rol->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label class="d-block">Gestión de cuenta</label>
    <div class="form-check form-check-inline">
        <input type="hidden" name="change_password" value="0">
        <input class="form-check-input" type="checkbox" value="1" id="change_password" name="change_password">
        <label class="form-check-label" for="change_password">Cambiar Contraseña</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="hidden" name="lock" value="0">
        <input class="form-check-input" type="checkbox" value="1" id="lock" name="lock">
        <label class="form-check-label" for="lock">Bloqueado</label>
    </div>
</div>

