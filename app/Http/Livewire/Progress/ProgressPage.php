<?php

namespace App\Http\Livewire\Progress;

use Livewire\Component;

class ProgressPage extends Component
{
    public function render()
    {
        return view('livewire.progress.progress-page')
            ->extends('layouts.app')
            ->section('body');
    }
}