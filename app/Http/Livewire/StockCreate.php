<?php

namespace App\Http\Livewire;

use App\Models\Stock;
use Livewire\Component;

class StockCreate extends Component
{
    public $category;
    public $subcategory = NULL;
    public $display = true;

    public function updatedCategory()
    {
        $this->subcategory = Stock::where('category', $this->category)->select('subcategory')->distinct()->get();
        $this->display = false;
    }

    public function updated()
    {
        dd("TEST");
        $this->display = true;
    }


    public function render()
    {
        return view('livewire.stock.components.stock-create');
    }
}