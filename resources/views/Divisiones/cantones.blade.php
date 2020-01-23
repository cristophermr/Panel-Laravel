@if($Cantones->count() > 0)
    <option value="">Selecione un canton</option>
    @foreach($Cantones as $Canton)
        <option value="{{$Canton->canton}}">{{$Canton->description}}</option>
    @endforeach

@else
    <option>No hay resultados</option>

@endif
