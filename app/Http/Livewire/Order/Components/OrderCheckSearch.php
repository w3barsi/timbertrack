<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Purchase;
use App\Models\Stock;
use Livewire\Component;

class OrderCheckSearch extends Component
{
    public $order;

    public $search;
    public $stocks;

    public $highlight = 0;
    public $error;

    public function addPurchase()
    {
        $stock = $this->stocks[$this->highlight] ?? null;
        if ($stock != null) {
            if ($stock->available === 0) {
                $this->error = "That item is out of stock!";
                $this->resetSearch();
                return;
            }

            Purchase::create([
                'order_id' => $this->order,
                'stock_id' => $stock->id,
                'quantity' => 0,
                'total' => 0,
                'is_prepared' => 0,
            ]);

            return redirect('Orders/' . $this->order);
        }
    }

    public function incrementHighlight()
    {
        if (empty($this->stocks))
            return;

        if ($this->highlight === count($this->stocks) - 1) {
            $this->highlight = 0;
            return;
        }
        $this->highlight++;
    }

    public function decrementHighlight()
    {
        if (empty($this->stocks))
            return;

        if ($this->highlight === 0) {
            $this->highlight = count($this->stocks) - 1;
            return;
        }
        $this->highlight--;
    }

    public function setSearch($product)
    {
        $this->search = $product;
        dd($this->search);
    }

    public function resetSearch()
    {
        $this->stocks = NULL;
        $this->highlight = 0;
    }

    public function updatedSearch()
    {
        $this->stocks = Stock::where('product', 'LIKE', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();
        $this->error = NULL;
    }

    public function mount()
    {
        $this->resetSearch();
    }


    public function render()
    {
        return view('livewire.order.components.order-check-search');
    }
}