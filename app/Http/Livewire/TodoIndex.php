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

    public function deleteTodo($id)
    {
        Todo::destroy($id);
    }

    public function checkedTodo($id)
    {
        $todo = Todo::find($id);
        if($todo->status == 'unchecked'){
            $todo->status = 'checked';
            $todo->save();
        }else{
            $todo->status = 'unchecked';
            $todo->save();
        }
    } 
}
