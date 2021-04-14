<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addProductComment(Request $request){
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->product_id = $request->product_id;
        $comment->save();

        $slug = $request->slug;
        return redirect()->route('product.details',['slug' => $slug]);
    }
}
