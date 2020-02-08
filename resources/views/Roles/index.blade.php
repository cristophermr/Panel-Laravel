@extends('layouts.backend')
@section("content")
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Roles del sistema</h3>
            @can("ver roles")
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                Añadir
            </button>
            @endcan
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Rol</th>
                        <th class="text-center" style="width: 100px;">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $count = 0 @endphp
                    @foreach($Roles as $item)
                        <tr>
                            <td>@php echo $count++ @endphp</td>
                            <td class="font-w600 font-size-sm">
                                <a href="#">{{$item['name']}}</a>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    @can("editar roles")
                                    <button type="button" class="btn btn-sm btn-info"
                                            data-name="{{$item->name}}"
                                            data-permissions="{{$item->permissions->pluck('id')}}" data-id={{$item->id}} data-toggle="modal"
                                            data-target="#edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    @endcan
                                    @can("borrar roles")
                                    <button type="button" class="btn btn-sm btn-danger"
                                            title="Delete" data-toggle="modal"
                                            data-id={{$item->id}} data-name="{{$item->name}}"
                                            data-target="#delete">
                                        <i class="fa fa-fw fa-times"></i>
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
    </div>
    <!-- END Full Table -->
    @includeIf('vendor.modal',[$Buttons])
@endsection
@section('js_after')
    <script src="{{asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2/js/select2.full.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
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
            var name = button.data('name');
            var permissions = button.data('permissions');
            var id = button.data('id');
            var modal = $(this);
            modal.find('.block-header #modal_title').html('Editar rol (' + name + ')')
            modal.find('.modal-body #rol').val(name);
            modal.find('.modal-body #editpermissions').val(permissions);
            modal.find('.modal-body #editpermissions').trigger('change');
            modal.find('.modal-body #id').val(id);

        })
        $('#delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var modal = $(this);

            modal.find('.block-header #modal_title').html('Borrar rol (' + name + ')')
            modal.find('.modal-body #id').val(id);
        })

        $(".modal").on("hidden.bs.modal", function () {
            var modal = $(this);
            modal.find('.modal-body #dni').val('').prop('readonly', false);
            modal.find('.modal-body #name').val('').prop('readonly', false);
            modal.find('.modal-body #email').val('');
            modal.find('.modal-body #user').val('');
            modal.find('.modal-body #rol').val('');

        });
        $(document).ready(function() {
            $('.js-select2').select2();
        });
        $(document).ready(function() {
            $('.js-dataTable-full').dataTable();
        });

        $('#table').DataTable({
            responsive: true,
            pagingType: "simple_numbers",
            autoWidth: true,
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    </script>
@endsection
@section("css_after")
    <link rel="stylesheet" href="{{asset('js/plugins/select2/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection