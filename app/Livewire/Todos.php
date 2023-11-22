<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    // Start
    public function mount()
    {
        $this->todos = [
            'Take out trash',
            'Do Dishes', 
        ];
    }
	
    // Called after updating a property
    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
