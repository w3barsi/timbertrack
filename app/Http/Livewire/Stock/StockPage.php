<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use Livewire\Component;

class StockPage extends Component
{
    public $selected = "all";
    public $search;

    public $stocks;

    public function delete($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
    }


    public function updatedSearch()
    {
        if ($this->selected === 'others') {
            $this->stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('created_at', 'desc')->where('subcategory', 'LIKE', '%' . $this->search . '%')->orWhere('product', 'LIKE', '%' . $this->search . '%')->get();
        } else if ($this->selected === 'all') {
            $this->stocks = Stock::where('product', 'LIKE', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();

            return;
        }
        $this->stocks = Stock::where('category', $this->selected)->where('product', 'LIKE', '%' . $this->search . '%')->get();
    }


    public function selected($selected)
    {
        $this->selected = $selected;

        if ($this->selected === 'others') {
            $this->stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('created_at', 'desc')->get();
        } else if ($this->selected === 'all') {
            $this->stocks = Stock::orderBy('created_at', 'desc')->get();
        } else {
            $this->stocks = Stock::where('category', $selected)->orderBy('created_at', 'desc')->get();
        }
    }


    public function mount()
    {
        $this->stocks = Stock::orderBy('created_at', 'desc')->get();
    }


    public function render()
    {
        return view('livewire.stock.stock-page')
            ->extends('layouts.app')
            ->section('body');
    }
}