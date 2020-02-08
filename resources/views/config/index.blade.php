@extends('layouts.backend')
@section('content')

    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Parametros del sitio</h3>
            @can('agregar parametros')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                Añadir
            </button>
            @endcan
        </div>
        <div class="block-content">
            <p class="font-size-sm text-muted">
            </p>
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr>
                    <th style="width: 30%;">Parametro</th>
                    <th style="width: 30%;">Valor</th>
                    <th style="width: 30%;">Utilización</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 5%;">Actiones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($configs as $config)
                <tr>
                    <td class="text-center">
                        {{$config->name}}
                    </td>
                    <td class="font-w600 font-size-sm">
                        {{$config->value}}
                    </td>
                    <td class="font-w600 font-size-sm">
                        @php echo "{{ config('settings.".$config->key."') }}" @endphp
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            @can("editar parametros")
                            <button type="button" class="btn btn-sm btn-info" data-mytitle="{{$config->name}}" data-key="{{$config->key}}" data-value="{{$config->value}}" data-id={{$config->id}} data-toggle="modal" data-target="#edit">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @includeIf('vendor.modal',[$Buttons])
@endsection
@section('js_after')
    <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        var err_msg = '{{Session::get('alert-error')}}';
        var err = '{{Session::has('alert-error')}}';
        if(exist){
            jQuery(function(){ One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: msg}); });
        }
        if(err){
            jQuery(function(){ One.helpers('notify', {type: 'warning', icon: 'fa fa-alert mr-1', message: err_msg}); });
        }

    </script>

    <script>
        $('#add').on('show.bs.modal',function (event) {
            var name = "Agregar Parametro";
            var modal = $(this);
            modal.find('.block-header #modal_title').html(name);
        });

        $('#edit').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            var title = button.data('mytitle')
            var key = button.data('key')
            var value = button.data('value')
            var id = button.data('id')
            var modal = $(this)

            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #key').val(key);
            modal.find('.modal-body #value').val(value);
            modal.find('.modal-body #id').val(id);
        })


        $('#delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)

            var cat_id = button.data('id')
            var modal = $(this)

            modal.find('.modal-body #id').val(cat_id);
        })
    </script>
@endsection
