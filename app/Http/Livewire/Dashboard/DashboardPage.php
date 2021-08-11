<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Stock;
use App\Models\Purchase;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardPage extends Component
{
    use WithPagination;

    public $selected;
    public $stocks;
    //DATE
    public $date;
    public $day ;
    public $month ;
    public $year ;
    public $weekname;
    public $today;
    public $chosenDate;
    //PURCHASED
    public $purchased;
    public $pID;
    ///TOTAL
    public $total;
    public $arr;
    public $i;
    //

    public function updatedDate(){
        $this->chosenDate = $this->date;
        $this->day = date("d",strtotime($this->date));
        $this->weekname = date("l",strtotime($this->date));
        $this->month = date("F",strtotime($this->date));
        $this->year = date("y",strtotime($this->date)) + 2000;
    }

    public function selected($selected)
    {
        $this->selected = $selected;
        if ($this->selected === 'others') {
            $this->stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->whereDate('created_at','=',$this->chosenDate)->orderBy('created_at', 'desc')->get();
        } else {
            $this->stocks = Stock::where('category', $selected)->orderBy('created_at', 'desc')->get();

            $this->arr=array();

            foreach($this->stocks as $prods){
                $this->total = Purchase::where('stock_id',$prods->id)
                ->whereDate('created_at', '=', $this->chosenDate)
                ->get()->sum('total');
                array_push($this->arr,$this->total);
            }
        }
    }

    public function purchases($id){
        $this->pID = $id;
        $this->purchased = Purchase::where('stock_id',$id)
        ->whereDate('created_at', '=', $this->chosenDate)
        ->get();
    }

    public function mount()
    {
        //DATE
        $this->selected="";
        $this->today=Carbon::now();
        $this->chosenDate  = $this->today;
        $this->day=date("d",strtotime($this->today));
        $this->weekname=date("l",strtotime($this->today));
        $this->month=date("F",strtotime($this->today));
        $this->year=date("y",strtotime($this->today)) + 2000;
        //STOCKS
        $this->stocks = Stock::where('category',$this->selected)->orderBy('created_at', 'desc')->get();
        //PURCHASE
        $this->pID = "";
        $this->purchased = Purchase::where('stock_id',$this->pID)
        ->whereDate('created_at', '=', $this->chosenDate)
        ->get();
        $this->i=0;
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-page')
            ->extends('layouts.app')
            ->section('body');
    }
}
