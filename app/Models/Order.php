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

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}