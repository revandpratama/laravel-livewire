<div>


    @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>

    <div class="row mb-3">
        <div class="col d-flex wrap">
            <span class="small form-label w-auto align-self-lg-end">Show Entry : </span>
            <select wire:model='paginate' wire:change='gotoPageOne()' name="" id="" class="form-control form-control-sm w-auto">
                <option value="5">5</option>
                <option value="10">10</option> 
                <option value="15">15</option>  
            </select>
                
        </div>
        <div class="col">
             <input wire:model='search' type="text" class="form-control form-control-sm w-100" placeholder="Search">
        </div>
    </div>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $skipped = ($contacts->currentPage() * $contacts->perPage()) - $contacts->perPage();
            @endphp
            @foreach ($contacts as $contact)
                <tr>
                    <th scope="row">{{ $loop->iteration + $skipped }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td class="d-flex justify-content-evenly">
                        <button  wire:click='getContact({{ $contact->id }})' class="btn btn-sm btn-info text-white">Edit</button>
                        <button wire:click='deleteContact({{ $contact->id }})' class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
</div>
