<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'stock_id', 'quantity', 'total', 'is_prepared'
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function updateStock($qty)
    {
        $this->stock->available -= ($qty - $this->quantity);
        $this->quantity = $qty;
        $this->save();
        $this->stock->save();
    }

    public function drop()
    {
        $this->stock->available += $this->quantity;
        $this->stock->save();

        $this->delete();
        return null;
    }
}
