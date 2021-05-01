<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentPost;
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

    public function addPostComment(Request $request){
        $comment = new CommentPost();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->new_id = $request->new_id;
        $comment->save();

        $new_slug = $request->new_slug;
        return redirect()->route('new.details',['new_slug' => $new_slug]);
    }
}
