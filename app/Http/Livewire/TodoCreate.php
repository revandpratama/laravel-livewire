<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoCreate extends Component
{

    public $name;

    public function render()
    {
        return view('livewire.todo-create');
    }

    public function add() 
    {
        $validatedData = $this->validate([
            'name' => 'required'
        ]);

        $todo = Todo::create($validatedData);

        $this->emit('todoAdded', $todo);
        $this->resetInput();
    }

    public function resetInput(){
        $this->name = null;
    }
}
