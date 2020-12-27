<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product', 'description', 'category', 'subcategory', 'available', 'price'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }


    public function hasStock($qty)
    {
        if ($this->available >= $qty) {
            return true;
        }
        return false;
    }
}