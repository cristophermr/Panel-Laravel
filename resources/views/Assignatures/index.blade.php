@extends('layouts.backend')
@section("content")
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Materias</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add">
                Actualizar Materias
            </button>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 25%;">Asignatura</th>
                        <th class="text-center" style="width: 25%;">Descripción</th>
                        <th class="text-center" style="width: 25%;">Abreviatura</th>
                        <th class="text-center" style="width: 25%;">Color Identificador</th>
                        <th class="text-center" style="width: 25%;">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Assignatures as $item)
                        <tr>
                            <td class="font-w600 font-size-sm text-center" >
                                <a href="#" style="color: #{{$item->color}};">{{$item['name']}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center" >
                                <a href="#">{{$item['description']}}</a>
                            </td>
                            <td class="font-size-sm text-center"><em
                                        class="text-muted">@if($item->abbreviation){{$item->abbreviation}}@else -@endif</em></td>
                            <td class="font-size-sm text-center"><em1
                                        class="text-muted"><div  style="margin: 0 auto;background:#{{$item->color}};height: 16px;width: 16px;"></div></em1>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-info" data-mytitle="{{$item->name}}"
                                            data-description="{{$item->description}}" data-color="#{{$item->color}}" data-abbreviation="{{$item->abbreviation}}" data-id="{{$item->id}}" data-toggle="modal"
                                            data-target="#edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger"
                                            title="Delete" data-toggle="modal" data-mytitle="{{$item->name}}"
                                            data-id={{$item->id}}
                                            data-target="#delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->
    @includeIf('Assignatures.modal')
@endsection
@section('js_after')
    <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        var err_msg = '{{Session::get('alert-error')}}';
        var err = '{{Session::has('alert-error')}}';
        if (exist) {
            jQuery(function () {
                One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: msg});
            });
        }
        if (err) {
            jQuery(function () {
                One.helpers('notify', {type: 'warning', icon: 'fa fa-alert mr-1', message: err_msg});
            });
        }

    </script>

    <script>
        $('#edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var name = button.data('mytitle');
            var desc = button.data('description');
            var color =button.data('color');
            var abrev = button.data('abbreviation');
            var id = button.data('id');
            var modal = $(this);
            modal.find('.block-header #modal_title').html('Editar asignación (' + name + ')');
            modal.find('.modal-body #descr').val(desc).prop("readonly",true);
            modal.find('.modal-body #color').colorpicker('setValue', color);
            modal.find('.modal-body #abrev').val(abrev);
            modal.find('.modal-body #id').val(id);
        });
        $('#delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var name = button.data('mytitle');
            var id = button.data('id');
            var modal = $(this);
            modal.find('.block-header #modal_title').html('Editar asignación (' + name + ')');
            modal.find('.modal-body #id').val(id);
        });
        $(".modal").on("hidden.bs.modal", function () {
            var modal = $(this);
            modal.find('.modal-body #descr').val('');
            modal.find('.modal-body #color').val('').colorpicker({color:''});
            modal.find('.modal-body #abrev').val('');

        });
    </script>
@endsection
@section('css_after')
    <link rel="stylesheet" href="{{asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}">
@endsection