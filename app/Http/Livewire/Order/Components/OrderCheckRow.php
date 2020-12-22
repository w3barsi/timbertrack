<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Purchase;
use Livewire\Component;

class OrderCheckRow extends Component
{
    public $purchase;

    public function destroy()
    {
        $destroy = Purchase::find($this->purchase->id);
        $destroy->delete();
        return redirect()->to('/Orders/' . $this->purchase->order_id);
    }

    public function status()
    {
        $this->purchase->is_prepared = !$this->purchase->is_prepared;
        $this->purchase->save();

        return redirect()->to('/Orders/' . $this->purchase->order_id);
    }

    public function render()
    {
        $this->purchase->total = $this->purchase->quantity * $this->purchase->stock->price;
        $this->purchase->save();
        return view('livewire.order.components.order-check-row');
    }
}