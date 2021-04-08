<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function limit(){
        Str::limit($this->content, $limit = 150, '...');
    }

    public function post_category()
    {
        return $this->belongsTo(PostCategory::class,'post_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
