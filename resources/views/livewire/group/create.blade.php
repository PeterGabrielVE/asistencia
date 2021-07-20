<!-- Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Crear Grupo
</button>

<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="1041" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
           <form>
                <div class="form-group mb-3">
                    <label for="categoryName">Grupo:</label>
                    <input type="text" class="form-control @error('group') is-invalid @enderror" id="group" placeholder="Ingrese grupo" wire:model="group">
                    @error('group') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click="store2" class="btn btn-primary close-modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
