<div class="form-group">
    <label for="title">Cédula de identidad</label>
    <input type="text" class="form-control" name="dni" id="dni">
</div>
<div class="form-group">
    <label for="title">Nombre Completo</label>
    <input type="text" class="form-control" name="name" id="name">
</div>
<div class="form-group">
    <label for="birthday">Fecha Nacimiento</label>
    <input type="date" name="bd" class="form-control">
</div>
<div class="form-group">
    <label>Pais</label>
    <select name="country" id="pais" class="form-control">
        <option value="">Nacionalidad</option>
        @foreach($Countries as $item)
            <option value="{{$item->country}}">{{$item->description}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Provincia</label>
    <select name="geo1" id="provincia" class="form-control">
        <option value="">Seleccione una provincia</option>
        @foreach($Provinces as $item)
            <option value="{{$item->province}}">{{$item->description}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Cantón</label>
    <select name="geo2" id="canton" class="form-control">
    </select>
</div>

<div class="form-group">
    <label>Distrito</label>
    <select name="geo3" id="distrito" class="form-control">
    </select>
</div>
<div class="form-group">
    <label>Barrio</label>
    <select name="geo4" id="barrio" class="form-control">
    </select>
</div>
<div class="form-group">
    <label>Otras Señas</label>
    <input type="text" class="form-control" id="otras_senas" name="address"
           placeholder="Dirección del sitio">
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

