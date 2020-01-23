@extends('layouts.backend')
@section("content")
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Personal</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add">
                Añadir
            </button>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">
                            <i class="far fa-user"></i>
                        </th>
                        <th>Nombre</th>
                        <th style="width: 30%;">Fecha Ingreso</th>
                        <th style="width: 15%;">Asignación</th>
                        <th style="width: 15%;">Acceso</th>
                        <th class="text-center" style="width: 100px;">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Docentes as $item)
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="{{asset('assets/media/avatars/avatar1.jpg')}}"
                                     alt="">
                            </td>
                            <td class="font-w600 font-size-sm">
                                <a href="#">{{$item['name']}}</a>
                            </td>
                            <td class="font-size-sm"><em
                                        class="text-muted">{{date_format($item->created_at,'d-m-y')}}</em></td>
                            <td class="font-size-sm"><em
                                        class="text-muted">@if($item->Roles->first()){{$item->Roles->first()->name}}@endif</em>
                            </td>
                            <td>
                                @if($item->active == 1 && $item->lock == 0)
                                    <span class="badge badge-success">Activo</span>
                                @elseif($item->active != 1 && $item->lock == 0)
                                    <span class="badge badge-primary">Inactivo</span>
                                @else
                                    <span class="badge badge-danger">Bloqueado</span>

                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-info" data-mytitle="{{$item->name}}"
                                            data-name="{{$item->name}}" data-email="{{$item->email}}"
                                            data-user="{{$item->user}}" data-rol="{{$item->Roles->first()->id}}"
                                            data-lock="{{$item->lock}}" data-id={{$item->dni}} data-toggle="modal"
                                            data-target="#edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger"
                                            title="Delete" data-toggle="modal"
                                            data-id={{$item->id}} data-name="{{$item->name}}"
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
    @includeIf('Instructors.modal')
@endsection
@section('js_after')
    <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

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
            var title = button.data('mytitle');
            var name = button.data('name');
            var email = button.data('email');
            var user = button.data('user');
            var rol = button.data('rol');
            var lock = button.data('lock');
            var id = button.data('id');
            var modal = $(this);

            modal.find('.block-header #modal_title').html('Editar usuario (' + name + ')')
            if (lock == 1) {
                modal.find('.modal-body #lock').prop('checked', true);
            }
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #user').val(user);
            modal.find('.modal-body #rol').val(rol);
            modal.find('.modal-body #id').val(id);

        })


        $('#delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var modal = $(this);

            modal.find('.block-header #modal_title').html('Borrar usuario (' + name + ')')
            modal.find('.modal-body #id').val(id);
        })

        $("#dni").mouseout(function () {
            $.ajax({
                "url": "https://api.hacienda.go.cr/fe/ae?identificacion=" + $("#dni").val(),
                "method": "GET"
            }).done(function (response) {
                $("#dni").prop('readonly', true);
                $("#name").val(response.nombre).prop('readonly', true);
            });
        });
        $("#provincia").change(function () {
            if ($("#provincia").val() != "")
            {
                var province = $("#provincia").val();
                var url = "{{route('Cantons',':id')}}";
                url = url.replace(':id',province);
                $("#canton").load(url).val();
                $("#canton").prop('disabled', false); // deshabilitar
            } else
            {
                $("#canton").prop('disabled', true); // deshabilitar
            }
        });
        $("#canton").change(function ()
        {
            if ($("#canton").val() != "") {
                var province = $("#provincia").val();
                var canton = $("#canton").val();
                var url = "{{route('Districts',[':1',':2'])}}";
                var chars = {':1':province,':2':canton};
                url = url.replace(/(:[1-3])/gi, m => chars[m]);
                $("#distrito").load(url);
                $("#distrito").prop('disabled', false); // deshabilitar
            } else {
                $("#distrito").prop('disabled', true); // deshabilitar
            }
        });
        $("#distrito").change(function () {
            if ($("#distrito").val() != "") {
                var province = $("#provincia").val();
                var canton = $("#canton").val();
                var Neighborhood = $("#distrito").val();
                var url  = "{{route('Neighborhood',[':1',':2',':3'])}}";
                var chars = {':1':province,':2':canton,':3':Neighborhood};
                url = url.replace(/(:[1-3])/gi, m => chars[m]);
                $("#barrio").load(url);
                $("#barrio").prop('disabled', false); // deshabilitar
                $("#otras_senas").prop('disabled', false);
            } else {
                $("#barrio").prop('disabled', true); // deshabilitar
            }
        });

        $(".modal").on("hidden.bs.modal", function () {
            var modal = $(this);
            modal.find('.modal-body #dni').val('').prop('readonly', false);
            modal.find('.modal-body #name').val('').prop('readonly', false);
            modal.find('.modal-body #email').val('');
            modal.find('.modal-body #user').val('');
            modal.find('.modal-body #rol').val('');

        });
    </script>
@endsection