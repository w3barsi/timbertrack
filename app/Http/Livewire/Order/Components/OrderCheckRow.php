<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Purchase;
use Livewire\Component;

class OrderCheckRow extends Component
{
    public $purchase;
    public $qty;

    public $available;

    public function updatedQty()
    {
        if ($this->qty == null || $this->qty < 0) {
            $this->qty = 0;
        }

        $this->available = $this->purchase->stock->hasStock($this->qty);

        if ($this->available === false) {
            $this->qty = $this->purchase->stock->available + $this->purchase->quantity;
            $this->available = true;
        }

        $this->purchase->updateStock($this->qty);
    }

    public function destroy()
    {
        // $this->purchase->stock->available += $this->purchase->quantity;
        // $this->purchase->stock->save();
        // $this->purchase->delete();
        // dd("Test");

        // $this->purchase->drop();

        $this->purchase->stock->available += $this->purchase->quantity;
        $this->purchase->stock->save();
        $p = $this->purchase->find($this->purchase->id);
        $p->delete();
        return redirect()->to('/Orders/' . $this->purchase->order_id);
    }


    // $this->purchase->quantity = 0;
    // $this->purchase->save();

    // $this->purchase->updateStock(-$this->qty);

    // $destroy = Purchase::find($this->purchase->id);
    // $destroy->delete();

    public function status()
    {

        $this->purchase->is_prepared = !$this->purchase->is_prepared;
        $this->purchase->save();

        return redirect()->to('/Orders/' . $this->purchase->order_id);
    }

    public function mount()
    {
        $this->qty = $this->purchase->quantity;
        $this->purchase->updateStock($this->qty);
    }

    public function render()
    {
        $this->purchase->total = $this->purchase->quantity * $this->purchase->stock->price;
        $this->purchase->save();
        return view('livewire.order.components.order-check-row');
    }
}
