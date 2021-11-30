<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class ViewRegisteredRow extends Component
{
    public $user;
    public $name;
    public $username;
    public $position;
    public $status;
    
    public function updatedUsername()
    {
        $this->user->username = $this->username;
        $this->user->save();
        return redirect()->route('Registered');
    }

    public function updatedStatus()
    {
        $this->user->status = $this->status;
        $this->user->save();
        return redirect()->route('Registered');
    }

    public function updatedName()
    {
        $this->user->name = $this->name;
        $this->user->save();
        return redirect()->route('Registered');

    }

    public function updatedPosition()
    {
        $this->user->position = $this->position;
        $this->user->save();
        return redirect()->route('Registered');
    }


    public function render()
    {
        return view('livewire.components.view-registered-row');
    }
}
