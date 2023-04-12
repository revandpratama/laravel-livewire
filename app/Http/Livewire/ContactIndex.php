<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{   

    public $listeners = [
        'contactStored'=> 'handleStored' //or name this with assoc array => 'handleStored'. And change the method name
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function getContact($contactId)
    {
        $contact = Contact::find($contactId);
        $this->emit('getContact', $contact);

    }

    public function handleStored($contact)
    {
       session()->flash('status', 'Contact '. $contact['name'] .' stored!');
    }
}
