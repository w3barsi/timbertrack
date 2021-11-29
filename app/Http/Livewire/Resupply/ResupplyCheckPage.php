<?php

namespace App\Http\Livewire\Stock;
namespace App\Http\Livewire\Resupply;

use App\Models\History;
use App\Models\Stock;
use Livewire\Component;
use App\Models\Purchase;
use App\Models\Resupply;

class ResupplyCheckPage extends Component
{

    public $accept;
    public $reject;

    public $stock;

    public $product;
    public $category;
    public $subcategory;
    public $price;
    public $available;
    public $description;

    public $i;

    ////All Purchases

    public $resupplyHistory;

    // public $purchases;

    public $restocks;


    ///

    public function store($id)
    {
        Resupply::create([
            'accept' => $this->accept,
            'reject' => $this->reject,
            'stocks_id' => $id,
            // 'subcategory' => $this->subcategory,
            // 'available' => $this->available,
            // 'price' => $this->price,
        ]);
        // $this->display = false;

        $test=$this->stock->available+=$this->accept;
        $this->stock->save();
        return redirect()->route('Resupply');
    }

    public function submit()
    {
        // dd($this->stock->id);

        $this->stock->product = $this->product;
        $this->stock->category = $this->category;
        $this->stock->subcategory = $this->subcategory;
        $this->stock->price = $this->price;
        $this->stock->available = $this->available;
        $this->stock->description = $this->description;


        $history = History::create([
            'product' => $this->stock->product,
            'user_id' => auth()->user()->id,
            'status' => 'update'
        ]);

        $this->stock->save();
    }

    public function mount(Stock $stock)
    {
        // dd($this->stock->purchases()->whereDate('created_at', '<=', date('2020-12-27'))->whereDate('created_at', '>=', date('2020-12-25'))->sum('quantity'));
        $this->stock = $stock;
        $this->product = $stock->product;
        $this->category = $stock->category;
        $this->subcategory = $stock->subcategory;
        $this->price = $stock->price;
        $this->available = $stock->available;
        $this->description = $stock->description;


        $this->purchases = Purchase::where('stock_id',$stock->id)->get();
        $this->restocks = Resupply::where('stocks_id',$stock->id)->get();
    }
    public function render()
    {
        // return view('livewire.resupply.resupply-check-page')
        return view('livewire.resupply.resupply-check-page')
            ->extends('layouts.app')
            ->section('body');
    }
}
