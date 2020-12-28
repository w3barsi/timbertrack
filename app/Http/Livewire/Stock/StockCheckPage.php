<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use Livewire\Component;

class StockCheckPage extends Component
{
    public $stock;

    public $product;
    public $category;
    public $subcategory;
    public $price;
    public $available;
    public $description;

    public function submit()
    {
        $this->stock->product = $this->product;
        $this->stock->category = $this->category;
        $this->stock->subcategory = $this->subcategory;
        $this->stock->price = $this->price;
        $this->stock->available = $this->available;
        $this->stock->description = $this->description;

        $this->stock->save();
    }

    public function mount(Stock $stock)
    {
        $this->stock = $stock;
        $this->product = $stock->product;
        $this->category = $stock->category;
        $this->subcategory = $stock->subcategory;
        $this->price = $stock->price;
        $this->available = $stock->available;
        $this->description = $stock->description;
    }
    public function render()
    {
        return view('livewire.stock.stock-check-page')
            ->extends('layouts.app')
            ->section('body');
    }
}