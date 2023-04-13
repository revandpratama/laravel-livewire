<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $statusUpdate = false;
    public $search;

    public $paginate = 5;

    protected $queryString = [
        'search' => ['except'=> ''],
        'page'
    ];

    public $listeners = [
        'contactStored'=> 'handleStored', //or name this with assoc array => 'handleStored'. And change the method name
        'update' => 'handleUpdate',
    ];

    // public function mount() 
    // {
    //     $this->search = request()->query('search', $this->search);
    // }

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => $this->search === null ? 
                Contact::latest()->paginate($this->paginate) : 
                Contact::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function gotoPageOne() 
    {
        $this->resetPage();
    }

    public function getContact($contactId)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($contactId);
        $this->emit('getContact', $contact);

    }

    public function deleteContact($contactId)
    {
        Contact::destroy($contactId);
    }

    public function handleStored($contact)
    {
       session()->flash('status', 'Contact '. $contact['name'] .' stored!');
    }

    public function handleUpdate() 
    {
        $this->statusUpdate = false;
    }
}
