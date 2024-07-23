<div>
    <input type="text" name="" id="" wire:model.live="todo" required>
    <button type="button" wire:click="add">add</button>
    <ul>
        @foreach ($todos as $todo )
        <li>{{ $todo }}</li>

        @endforeach
    </ul>


</div>
