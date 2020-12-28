<?php

namespace App\Http\Livewire\Stock\Components;

use Livewire\Component;

class StockPageRow extends Component
{
    public $stock;

    public function render()
    {
        return view('livewire.stock.components.stock-page-row');
    }
}