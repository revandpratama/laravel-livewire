<div>
    <livewire:todo-create></livewire:todo-create>

    <table class="table mt-3">
        <tr>
            <th>Status</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        @foreach ($todos as $todo)
            <tr>
                <td></td>
                <td>{{ $todo->name }}</td>
                <td>delete</td>
            </tr>
        @endforeach
    </table>
</div>
