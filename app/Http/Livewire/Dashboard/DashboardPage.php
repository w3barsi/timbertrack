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
    //SALES
    public $wood;
    public $plastic;
    public $concrete;
    public $metal;
    public $others;
    //OVERALL
    public $overall;

    public function updatedDate(){

        $this->chosenDate = $this->date;
        $this->day = date("d",strtotime($this->date));
        $this->weekname = date("l",strtotime($this->date));
        $this->month = date("F",strtotime($this->date));
        $this->year = date("y",strtotime($this->date)) + 2000;

        //SALES
        $this->wood=0;
        $this->plastic=0;
        $this->concrete=0;
        $this->metal=0;
        $this->others=0;

        $wood = Stock::where('category','wood')->get('id')->toArray();
        $plastic = Stock::where('category','plastic')->get('id')->toArray();
        $concrete = Stock::where('category','concrete')->get('id')->toArray();
        $metal = Stock::where('category','metal')->get('id')->toArray();
        $others = Stock::where([['category', '!=', 'wood'],['category', '!=', 'plastic'],['category', '!=', 'metal'],['category', '!=', 'concrete'],])
        ->get('id')->toArray();

        $purchase;

        $woodArray = array();
        $plasticArray = array();
        $concreteArray = array();
        $metalArray = array();
        $othersArray = array();

        //WOOD
        foreach($wood as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($woodArray,$purchase);
        }

        foreach($woodArray as $wood){
            $this->wood+=$wood;
        }

        //PLASTIC
        foreach($plastic as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($plasticArray,$purchase);
        }

        foreach($plasticArray as $plastic){
            $this->plastic+=$plastic;
        }

        //CONCRETE
        foreach($concrete as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($concreteArray,$purchase);
        }

        foreach($concreteArray as $concrete){
            $this->concrete+=$concrete;
        }     

        //METAL
        foreach($metal as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($metalArray,$purchase);
        }

        foreach($metalArray as $metal){
            $this->metal+=$metal;
        }

        //OTHERS
        foreach($others as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($othersArray,$purchase);
        }

        foreach($othersArray as $others){
            $this->others+=$others;
        }

        $this->overall = $this->wood + $this->plastic + $this->concrete + $this->metal + $this->others;

    }

    public function selected($selected)
    {
        $this->arr=array();
        $this->selected = $selected;
        if ($this->selected === 'others') {
            $this->stocks = Stock::where([
                ['category', '!=', 'wood'],
                ['category', '!=', 'plastic'],
                ['category', '!=', 'metal'],
                ['category', '!=', 'concrete'],
            ])->orderBy('created_at', 'desc')->get();
        } else {
            $this->stocks = Stock::where('category', $selected)->orderBy('created_at', 'desc')->get();
        }

        foreach($this->stocks as $prods){
            $this->total = Purchase::where('stock_id',$prods->id)
            ->whereDate('created_at', '=', $this->chosenDate)
            ->get()->sum('total');
            array_push($this->arr,$this->total);
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
        $this->i=0;
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

        //SALES 
        $this->wood=0;
        $this->plastic=0;
        $this->concrete=0;
        $this->metal=0;
        $this->others=0;

        $wood = Stock::where('category','wood')->get('id')->toArray();
        $plastic = Stock::where('category','plastic')->get('id')->toArray();
        $concrete = Stock::where('category','concrete')->get('id')->toArray();
        $metal = Stock::where('category','metal')->get('id')->toArray();
        $others = Stock::where([['category', '!=', 'wood'],['category', '!=', 'plastic'],['category', '!=', 'metal'],['category', '!=', 'concrete'],])
        ->get('id')->toArray();

        $purchase;

        $woodArray = array();
        $plasticArray = array();
        $concreteArray = array();
        $metalArray = array();
        $othersArray = array();

        //WOOD
        foreach($wood as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($woodArray,$purchase);
        }

        foreach($woodArray as $wood){
            $this->wood+=$wood;
        }

        //PLASTIC
        foreach($plastic as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($plasticArray,$purchase);
        }

        foreach($plasticArray as $plastic){
            $this->plastic+=$plastic;
        }

        //CONCRETE
        foreach($concrete as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($concreteArray,$purchase);
        }

        foreach($concreteArray as $concrete){
            $this->concrete+=$concrete;
        }     

        //METAL
        foreach($metal as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($metalArray,$purchase);
        }

        foreach($metalArray as $metal){
            $this->metal+=$metal;
        }

        //OTHERS
        foreach($others as $stock =>$id){
            $purchase = Purchase::where('stock_id',$id)
            ->whereDate('created_at','=',$this->chosenDate)
            ->get('total')
            ->sum('total');
            array_push($othersArray,$purchase);
        }

        foreach($othersArray as $others){
            $this->others+=$others;
        }

        $this->overall = $this->wood + $this->plastic + $this->concrete + $this->metal + $this->others;
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-page')
            ->extends('layouts.app')
            ->section('body');
    }
}
