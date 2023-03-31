<div>
	<input wire:model="name" type="text">
	<input wire:model="loud" type="checkbox">
	<select wire:model="greeting" multiple>
		<option>Hello</option>
		<option>Goodbye</option>
		<option>Adios</option>
	</select>
	<span class="font-bold underline">{{implode(', ', $greeting)}} {{$name}} @if ($loud) ! @endif</span>

	<button wire:click="resetName('Bingo')">Reset Name</button>
	<button wire:click="$set('name', 'Bingo')">Reset Name n2</button>

</div>