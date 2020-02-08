<div class="form-group">
    <label for="title">Nombre del rol</label>
    <input type="text" class="form-control" name="rol" id="rol">
</div>
<div class="form-group">
    <label for="title">Permisos</label>
    <select class="js-select2 form-control" id="{{$item->jsid != 'edit' ? 'permissions':'editpermissions'}}" name="permissions" style="width: 100%;" data-placeholder="Choose many.." multiple>
        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
        @foreach($Permissions as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
       @endforeach
    </select>
</div>

