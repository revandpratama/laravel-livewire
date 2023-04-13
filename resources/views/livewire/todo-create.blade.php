<div>
    <div class="row"></div>
    <form wire:submit.prevent='add'>
        <input type="text" wire:model='name' class="form-control" placeholder="Add something">
        <button type="submit" class="btn btn-primary btn-sm my-4">Add</button>
    </form>
</div>
