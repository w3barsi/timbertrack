<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'status', 'total'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function completed($i)
    {
        if ($i === true) {
            foreach ($this->purchases as $purchase) {
                if ($purchase->is_prepared === 0) {
                    $purchase->is_prepared = 1;
                    $purchase->save();
                }
            }
        } else {
            foreach ($this->purchases as $purchase) {
                if ($purchase->is_prepared === 1) {
                    $purchase->is_prepared = 0;
                    $purchase->save();
                }
            }
        }
        $this->checkStatus();
    }

    public function getTotal()
    {
        $this->total = 0;
        foreach ($this->purchases as $purchase) {
            $this->total = $purchase->total += $this->total;
        }
        $this->save();
    }

    public function checkStatus()
    {
        foreach ($this->purchases as $purchase) {
            if ($purchase->is_prepared === 0) {
                $this->status = 'ongoing';
                $this->save();
                return;
            }
        }
        $this->status = 'completed';
        $this->save();
        return;
    }
}