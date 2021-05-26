<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use App\Notifications\OrderAdded;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    public function order_item()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction(){
        return $this->hasOne(Transaction::class);
    }

    public function debt(){
        return $this->hasOne(Debt::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
