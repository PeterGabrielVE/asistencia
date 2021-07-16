<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                <input type="hidden" wire:model="student_id">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" wire:model="first_name">
                    @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" wire:model="last_name">
                    @error('last_name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="10" placeholder="Enter Address" wire:model="address"></textarea>
                    @error('address') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
