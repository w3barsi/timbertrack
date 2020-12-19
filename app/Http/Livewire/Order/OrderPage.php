<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class OrderPage extends Component
{
    public $orders;


    public function mount()
    {
        $this->orders = Order::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.order.order-page')
            ->extends('layouts.app')
            ->section('body');;
    }
}
