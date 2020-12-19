<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Order;
use Facade\FlareClient\Http\Response;
use Livewire\Component;

class CreateOrder extends Component
{
    public $name;
    public $address;
    public $status = "ongoing";

    public $display;


    protected $rules = [
        'name' => 'required|max:256',
        'address' => 'required|max:256',
        'status' => 'required',
    ];

    public function updating()
    {
        $this->display = true;
    }

    public function mount()
    {
        $this->display = false;
    }

    public function create()
    {
        $this->validate();

        $order = Order::create([
            'name' => $this->name,
            'address' => $this->address,
            'status' => $this->status,
        ]);

        $this->display = false;

        return redirect()->route('Orders.order', $order);
    }
    public function render()
    {
        return view('livewire.order.components.create-order');
    }
}