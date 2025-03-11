<div>
    <span>Change the counter:</span>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <br>
    <input type="number" wire:model.blur="newValue">
    <br>
    <button wire:click="changeCount({{$newValue}})">Change count</button>
    <h1>{{$count}}</h1>
</div>
