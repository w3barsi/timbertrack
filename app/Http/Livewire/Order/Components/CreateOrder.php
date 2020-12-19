<?php

namespace App\Http\Livewire\Order\Components;

use App\Models\Order;
use Livewire\Component;

class CreateOrder extends Component
{
    public $name;
    public $address;
    public $status = "ongoing";

    public $display;


    public function test()
    {
        dd("Test");
    }

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

        Order::create([
            'name' => $this->name,
            'address' => $this->address,
            'status' => $this->status,
        ]);

        $this->display = false;
    }
    public function render()
    {
        return view('livewire.order.components.create-order');
    }
}