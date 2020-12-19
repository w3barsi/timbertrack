<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class OrderCheckPage extends Component
{
    public $order;
    public $purchases;

    public function updatedPurchases()
    {
        $total;
        foreach ($purchases as $key => $value) {
            # code...
        }
    }

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->purchases = $this->order->purchases;
    }
    public function render()
    {
        return view('livewire.order.order-check-page')
            ->extends('layouts.app')
            ->section('body');
    }
}