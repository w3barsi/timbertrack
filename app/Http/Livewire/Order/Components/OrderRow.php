<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Order;
use Livewire\Component;
use App\Models\Purchase;

class OrderRow extends Component
{
    public Order $order;
    public $status;

    protected $rules = [
        'status' => 'in:ongoing,completed,cancelled'
    ];

    public function destroy()
    {
        foreach ($this->order->purchases as $purchase) {
            $purchase->stock->available += $purchase->quantity;
            $purchase->stock->save();
            $p = Purchase::find($purchase->id);
            $p->delete();
        }

        $this->order->delete();
        return redirect()->to('/Orders');
    }

    public function updatedStatus()
    {
        $this->validate();
        if ($this->status === 'completed') {
            $this->order->completed(true);
        } else {
            $this->order->completed(false);
        }
        return redirect()->to('/Orders');
    }

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->status = $this->order->status;
    }

    public function render()
    {
        return view('livewire.order.components.order-row');
    }
}