<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class OrderCheckPage extends Component
{
    public $order;
    public $purchases;

    public $name;
    public $address;

    public function status()
    {
    }

    public function updatedAddress()
    {
        $this->order->address = $this->address;
        $this->order->save();

        return redirect()->to('/Orders/' . $this->order->id);
    }

    public function updatedName()
    {
        $this->order->name = $this->name;
        $this->order->save();
        return redirect()->to('/Orders/' . $this->order->id);
    }

    // public function updatedPurchases()
    // {
    //     $total;
    //     foreach ($purchases as $key => $value) {
    //         # code...
    //     }
    // }

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->purchases = $this->order->purchases;
    }

    public function render()
    {
        $this->order->checkStatus();
        $this->order->getTotal();
        return view('livewire.order.order-check-page')
            ->extends('layouts.app')
            ->section('body');
    }
}