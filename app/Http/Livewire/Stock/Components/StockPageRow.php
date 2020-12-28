<?php

namespace App\Http\Livewire\Stock\Components;

use Livewire\Component;

class StockPageRow extends Component
{
    public $stock;

    public $product;
    public $available;
    public $price;

    public $editable = false;

    public function delete()
    {
        $this->stock->delete();
        return redirect()->route('Stocks');
    }

    public function editable()
    {
        $this->editable = !$this->editable;

        $this->stock->product = $this->product;
        $this->stock->available = $this->available;
        $this->stock->price = $this->price;

        $this->stock->save();
    }

    public function updatedProduct()
    {
    }

    public function mount()
    {
        $this->product = $this->stock->product;
        $this->available = $this->stock->available;
        $this->price = $this->stock->price;
    }

    public function render()
    {
        return view('livewire.stock.components.stock-page-row');
    }
}
