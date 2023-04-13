<div>
    <livewire:todo-create></livewire:todo-create>

    <table class="table mt-3">
        <tr>
            
        </tr>

        @foreach ($todos as $todo)
            <tr>
                <td style="width: 2em"><input wire:change='checkedTodo({{ $todo->id }})' type="checkbox" name="" id="" {{ $todo->status == 'checked' ? 'checked' : ''}}></td>
                <td class="{{ ($todo->status == 'unchecked') ? '' : 'text-decoration-line-through' }}">{{ $todo->name }}</td>
                <td>
                    <button wire:click='deleteTodo({{ $todo->id }})' class="btn btn-danger btn-sm">Trash</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
