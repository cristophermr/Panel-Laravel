<!-- Modal Adding -->
<div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title" id="modal_title">Agregar Parametro</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form action="{{route('settings.add')}}" method="post">
                        {{--{{method_field('patch')}}--}}
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="">
                            @includeIf('config.form')
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i
                                    class="fa fa-check mr-1"></i>Guardar
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Slide Left Block Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title" id="modal_title">Editar Parametro</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form action="{{route('settings.update')}}" method="post">
                        {{--{{method_field('patch')}}--}}
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="">
                            @includeIf('config.form')
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i
                                    class="fa fa-check mr-1"></i>Guardar
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
