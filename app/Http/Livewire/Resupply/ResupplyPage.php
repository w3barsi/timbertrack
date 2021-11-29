<?php

namespace App\Http\Livewire\Stock;
namespace App\Http\Livewire\Resupply;

use App\Models\Stock;
use App\Models\Resupply;
use App\Models\History;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

class ResupplyPage extends Component
{
    use WithPagination;

    public $selected = "all";
    public $search;

    public $stocks;

    public $acceptArray;
    public $rejectArray;

    public $i;
    public $j;

    public $stock;

    public function updatedSearch()
    {
        $stocks;
        if ($this->selected === 'others') {
            $stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('created_at', 'desc')->where('subcategory', 'LIKE', '%' . $this->search . '%')->orWhere('product', 'LIKE', '%' . $this->search . '%')->get('id')->toArray();

            $this->stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('created_at', 'desc')->where('subcategory', 'LIKE', '%' . $this->search . '%')->orWhere('product', 'LIKE', '%' . $this->search . '%')->get();
            $this->acceptArray = array();
            $this->rejectArray = array();
            foreach($stocks as $stock=>$id){
                $accepts = Resupply::where('stocks_id',$id)->get('accept')->sum('accept');
                $rejects = Resupply::where('stocks_id',$id)->get('reject')->sum('reject');
                array_push($this->acceptArray,$accepts);
                array_push($this->rejectArray,$rejects);
            }
        } else if ($this->selected === 'all') {
            $stocks = Stock::where('product', 'LIKE', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get('id')->toArray();
            $this->stocks = Stock::where('product', 'LIKE', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();
            $this->acceptArray = array();
            $this->rejectArray = array();
            foreach($stocks as $stock=>$id){
                $accepts = Resupply::where('stocks_id',$id)->get('accept')->sum('accept');
                $rejects = Resupply::where('stocks_id',$id)->get('reject')->sum('reject');
                array_push($this->acceptArray,$accepts);
                array_push($this->rejectArray,$rejects);
            }
            return;
        }
        
        $this->stocks = Stock::where('category', $this->selected)->where('product', 'LIKE', '%' . $this->search . '%')->get();
        $stocks = Stock::where('category', $this->selected)->where('product', 'LIKE', '%' . $this->search . '%')->get('id')->toArray();

        $this->acceptArray = array();
        $this->rejectArray = array();
        foreach($stocks as $stock=>$id){
            $accepts = Resupply::where('stocks_id',$id)->get('accept')->sum('accept');
            $rejects = Resupply::where('stocks_id',$id)->get('reject')->sum('reject');
            array_push($this->acceptArray,$accepts);
            array_push($this->rejectArray,$rejects);
        }
    }


    public function selected($selected)
    {
        $stocks;
        $this->selected = $selected;
        $accepts;
        $rejects;
        if ($this->selected === 'others') {
             $this->stocks =Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('product','asc')->get();

            $stocks=Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('product','asc')->get('id')->toArray();

        } else if ($this->selected === 'all') {
            $this->stocks = Stock::orderBy('product','asc')->get();
            $stocks = Stock::orderBy('product','asc')->get('id')->toArray();
        } else {
            $this->stocks = Stock::where('category', $selected)->orderBy('product', 'asc')->get();
            $stocks = Stock::where('category', $selected)->orderBy('product', 'asc')->get('id')->toArray();
        }

        $this->acceptArray = array();
        $this->rejectArray = array();
        foreach($stocks as $stock=>$id){
            $accepts = Resupply::where('stocks_id',$id)->get('accept')->sum('accept');
            $rejects = Resupply::where('stocks_id',$id)->get('reject')->sum('reject');
            array_push($this->acceptArray,$accepts);
            array_push($this->rejectArray,$rejects);
        }
    }


    public function mount()
    {
        $this->i=0;
        $this->j=0;

        $accepts;
        $rejects;

        $this->acceptArray = array();
        $this->rejectArray = array();

        $stocks = Stock::orderBy('product','asc')->get('id')->toArray();

        foreach($stocks as $stock=>$id){
            $accepts = Resupply::where('stocks_id',$id)->get('accept')->sum('accept');
            $rejects = Resupply::where('stocks_id',$id)->get('reject')->sum('reject');
            array_push($this->acceptArray,$accepts);
            array_push($this->rejectArray,$rejects);
        }

        $this->stocks = Stock::orderBy('product','asc')->get();
    }


    public function render()
    {

        return view('livewire.resupply.resupply-page', [
            'history' => History::orderBy('created_at', 'desc')->paginate(2),
        ])
            ->extends('layouts.app')
            ->section('body');
    }
}