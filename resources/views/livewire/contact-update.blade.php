<div>


    <form wire:submit.prevent='update'>
        <input type="hidden" name="" wire:model='contactId'>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input wire:model='name' type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                        placeholder="name">
                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model='phone' type="text" name="phone" id="" class="form-control @error('phone') is-invalid @enderror"
                        placeholder="phone">
                    @error('phone')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary my-3">Submit</button>
    </form>
    {{-- <form action="">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="" id="" class="form-control" placeholder="name">
                    </div>
                    <div class="col">
                        <input type="text" name="" id="" class="form-control" placeholder="phone">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-priamry">Submit</button>
        </form> --}}
</div>

