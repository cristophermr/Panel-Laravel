@if($Distritos->count() > 0)
    <option value="">Selecione un Distrito</option>
    @foreach($Distritos as $Distrito)
        <option value="{{$Distrito->district}}">{{$Distrito->description}}</option>
    @endforeach

@else
    <option>No hay resultados</option>

@endif
