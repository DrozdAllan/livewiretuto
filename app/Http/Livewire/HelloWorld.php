<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
	public string $name = "jelly";
	public bool $loud = false;
	public $greeting = ["Hello"];

	public function resetName($name = 'Chico')
	{
		$this->name = $name;
	}

	public function mount($name)
	{
		$this->name = $name;
	}

	public function hydrate()
	{
		$this->name = 'hydrated@';
	}

	public function updated()
	{
		$this->name = 'updated';
	}

	public function render()
	{
		return view('livewire.hello-world');
	}
}
