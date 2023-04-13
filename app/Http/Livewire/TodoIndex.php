<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoIndex extends Component
{


    protected $listeners = [
        'todoAdded'
    ];

    public function render()
    {
        return view('livewire.todo-index', [
            'todos' => Todo::latest()->get()
        ]);
    }

    public function todoAdded() 
    {
        
    }
}
