<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Purchase;

class StockController extends Controller
{

    public function index()
    {
        return view('Official-Content/Stock');
    }

    public function wood()
    {
        return view('Official-Content/Stock/wood');
    }

    public function plastic()
    {
        return view('Official-Content/Stock/plastic');
    }

    public function concrete()
    {
        return view('Official-Content/Stock/concrete');
    }

    public function metal()
    {
        return view('Official-Content/Stock/metal');
    }

    public function others()
    {
        return view('Official-Content/Stock/others');
    }

    public function edit($id)
    {
        $stock = Stock::find($id);
        $purchases = Purchase::where('stock_id', $id)->get();
        if($stock){
            return view('livewire.stock.stock-check-page', ['stock' => $stock, 'purchases' => $purchases]);
        }
    }

    public function update(Request $req, $id)
    {
        $stock = Stock::find($id);
        $purchases = Purchase::where('stock_id', $id)->get();
        $destination_path = 'public/stocks';
        $inputs = $req->except('_token', '_method');
        if($stock)
        {
            if($req->has('editingProduct')){
                $image = $_FILES['editingProduct'];
                $inputs['image'] = $image['name'];
                request(('editingProduct'))->storeAs($destination_path, $image['name']);
            }
            $stock->update($inputs);
            return view('livewire.stock.stock-check-page', ['stock' => $stock, 'purchases' => $purchases]);
        }
    }
}
