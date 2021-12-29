<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Posts;

class PostComments extends Controller
{
    public function addPostComment()
    {
        // $post = new Posts;
        // $post->name = "Lorem ipsum, dolor sit amet consectetur  ";
        // $post->save();
        // $comment1 = new Comments;
        // $comment1->post_id  = 1;
        // $comment1->comment = "Hi ItSolutionStuff.com Comment 1";
        // $comment1->save();

        // $comment2 = new Comments;
        // $comment2->post_id = 1;
        // $comment2->comment = "Hi ItSolutionStuff.com Comment 2";
        // $comment2->save();

        
        $post = Posts::find(1);
        
        $comments = Comments::where('post_id', "=", 1);
 
    //    return view('post', compact('post', 'comments'));
       return view('post', ['post' => $post, 'comment' => $comments]);
         
        
    }
}