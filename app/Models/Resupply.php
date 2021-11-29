<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resupply extends Model
{
    use HasFactory;

    protected $fillable = [
        'accept', 'reject','stocks_id'
    ];

    // public function purchases()
    // {
    //     return $this->hasMany(Purchase::class);
    // }

    // public function stock()
    // {
    //     return $this->belongsTo(Stock::class);
    // }

    
}
