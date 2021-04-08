<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = "post_categories";

    public function new()
    {
        return $this->hasMany(News::class);
    }
}
