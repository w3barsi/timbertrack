<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function submit()
    {
        dd("Test");
    }
    public function render()
    {
        return view('livewire.test');
    }
}