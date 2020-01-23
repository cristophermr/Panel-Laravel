@extends('layouts.backend')
@section("content")
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Grados Académicos</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add">
                Añadir
            </button>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 25%;">Grado</th>
                        <th class="text-center" style="width: 25%;">Dependencia</th>
                        <th class="text-center" style="width: 25%;">Nota Mínima</th>
                        <th class="text-center" style="width: 25%;">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Grades as $item)
                        <tr>
                            <td class="font-w600 font-size-sm text-center" >
                                <a href="#">{{$item['name']}}</a>
                            </td>
                            <td class="font-size-sm text-center"><em
                                        class="text-muted">@if($item->Dependency){{$item->Dependency["name"]}}@else -@endif</em></td>
                            <td class="font-size-sm text-center"><em1
                                        class="text-muted">{{$item['grade']}}</em1>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-info" data-mytitle="{{$item->name}}"
                                            data-name="{{$item->name}}"
                                            @if($item->Dependency)
                                            data-dependecy="{{$item->Dependency["id"]}}"
                                            @endif
                                            data-grade="{{$item->grade}}"
                                            data-id="{{$item->id}}" data-toggle="modal"
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
    @includeIf('Levels.modal')
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
            var name = button.data('name');
            var dependency = button.data('dependency');
            var grade = button.data('grade');
            var id = button.data('id');
            var modal = $(this);
            modal.find('.block-header #modal_title').html('Editar nivel (' + name + ')')
            modal.find('.modal-body #level').val(name);
            modal.find('.modal-body #dependency').val(dependency);
            modal.find('.modal-body #grade').val(grade);
            modal.find('.modal-body #id').val(id);

        });

        $('#delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var modal = $(this);

            modal.find('.block-header #modal_title').html('Borrar nivel académico (' + name + ')')
            modal.find('.modal-body #id').val(id);
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