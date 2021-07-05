<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Stock;
use Livewire\Component;

class DashboardPage extends Component
{

    public $Stocks;

    public function mount()
    {
        $this->Stocks = Stock::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-page')
            ->extends('layouts.app')
            ->section('body');;
    }
}
