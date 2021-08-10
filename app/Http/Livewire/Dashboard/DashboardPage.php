<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Stock;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardPage extends Component
{
    use WithPagination;

    public $selected;

    public $stocks;

    public $date;

    public $day ;
    public $month ;
    public $year ;
    public $weekname;

    public function updatedDate(){


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
            ])->orderBy('created_at', 'desc')->get();
        } else {
            $this->stocks = Stock::where('category', $selected)->orderBy('created_at', 'desc')->get();
        }
    }

    public function mount()
    {
        $this->selected="";
        $this->stocks = Stock::where('category',$this->selected)->orderBy('created_at', 'desc')->get();

    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-page')
            ->extends('layouts.app')
            ->section('body');
    }
}
