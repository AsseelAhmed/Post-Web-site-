<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addComment(Post $post)
    {
        $this->validate(request(),[
            'body'=>'required'
        ]);

        $post->addComment(request('body'));
        return back();
    }

}
