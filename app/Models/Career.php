<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;

    protected $table = "careers";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
