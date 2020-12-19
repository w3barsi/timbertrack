<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Order;
use Livewire\Component;

class OrderRow extends Component
{
    public Order $order;
    public $status;

    protected $rules = [
        'status' => 'in:ongoing,completed,cancelled'
    ];

    public function updatedStatus()
    {
        $this->validate();
        $this->order->status = $this->status;
        $this->order->save();
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