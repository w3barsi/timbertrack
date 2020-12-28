<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class ViewRegistered extends Component
{
    public $users;
    public $search;

    public function updatedSearch()
    {
        $this->users = User::where('name', 'LIKE', '%' . $this->search . '%')->get();
    }

    public function mount()
    {
        $this->users = User::orderBy('position')->get();
        $this->search = NULL;
    }
    public function render()
    {
        return view('livewire.components.view-registered')
            ->extends('layouts.app')
            ->section('body');
    }
}
