@foreach($Buttons as $item)
    <div class="modal  fade" id="{{$item->jsid}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-labelledby="modal-block-slideleft" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideleft" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title" id="modal_title"></h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" id="close" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        <form action="{{route($item->route)}}" method="post">
                            {{csrf_field()}}
                            <div class="modal-body">
                                @if ($item->jsid != "add")
                                    <input type="hidden" name="id" id="id" value="">
                                @endif
                                @if ($item->jsid != "delete")
                                        @includeIf($item->content)
                                    @else
                                        Esta seguro que desea borrar el registro ?
                                    @endif

                            </div>
                            <div class="block-content block-content-full text-right border-top">
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-{{$item->jsid == "delete" ? "danger":"primary"}}"><i
                                            class="fa fa-check mr-1"></i> @if ($item->jsid == "delete")Borrar @else Guardar @endif
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

