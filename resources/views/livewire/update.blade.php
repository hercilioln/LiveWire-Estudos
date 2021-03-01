<div wire:ignore.self id="updateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Editar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Produto</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control" wire:model="pro_nome" />
                        @error('pro_nome')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Valor</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" wire:model="pro_valor" />
                        @error('pro_valor')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Quantidade</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" wire:model="pro_quantidade" />
                        @error('pro_quantidade')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button wire:click.prevent="update()" class="btn btn-dark">Atualizar</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fechar</button>
                </form>
            </div>
        </div>
    </div>
</div>