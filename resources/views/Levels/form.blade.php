<div class="form-group">
    <label for="title">Nombre del nivel</label>
    <input type="text" class="form-control" name="level" id="level">
</div>
<div class="form-group">
    <label for="title">Dependencia</label>
    <select name="dependency" id="dependency" class="form-control">
        <option value="">No tiene dependencia</option>
        @foreach($Grades as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="birthday">Nota mínima de aprobación</label>
    <input type="number" min="65"  max="100" name="grade" id="grade" class="form-control">
</div>


