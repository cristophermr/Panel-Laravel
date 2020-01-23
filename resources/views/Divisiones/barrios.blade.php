@if($Barrios->count() > 0)
    <option value="">Selecione un Barrio</option>
    @foreach($Barrios as $Barrio)
        <option value="{{$Barrio->neighborhood}}">{{$Barrio->description}}</option>
    @endforeach

@else
    <option>No hay resultados</option>

@endif
