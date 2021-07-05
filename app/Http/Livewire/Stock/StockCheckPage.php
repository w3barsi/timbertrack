<?php

namespace App\Http\Livewire\Stock;

use App\Models\History;
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


        $history = History::create([
            'product' => $this->stock->product,
            'user_id' => auth()->user()->id,
            'status' => 'update'
        ]);

        $this->stock->save();
    }

    public function mount(Stock $stock)
    {
        // dd($this->stock->purchases()->whereDate('created_at', '<=', date('2020-12-27'))->whereDate('created_at', '>=', date('2020-12-25'))->sum('quantity'));
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
