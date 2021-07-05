<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product', 'description', 'category', 'subcategory', 'available', 'price'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }


    public function getSum()
    {
        $this->purchases()->whereDate('created_at', '<=', date('2020-12-27'))->whereDate('created_at', '>=', date('2020-12-25'))->get();
    }

    public function hasStock($qty)
    {
        if ($this->available >= $qty) {
            return true;
        }
        return false;
    }
}