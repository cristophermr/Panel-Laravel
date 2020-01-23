<!-- Modal Adding -->
<div class="modal  fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title" id="modal_title">Agregar Nivel</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" id="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form action="{{route('levels.add')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            @includeIf('Levels.form')
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
                    <h3 class="block-title" id="modal_title"></h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form action="{{route('levels.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="">
                            @includeIf('Levels.form')
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

<!-- DELETE -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title" id="modal_title"></h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form action="{{route('levels.delete')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <label>Esta seguro que desea borrar el usuario ?</label>
                            <input type="hidden" name="id" id="id" value="">
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fa fa-check mr-1"></i>Borrar
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>