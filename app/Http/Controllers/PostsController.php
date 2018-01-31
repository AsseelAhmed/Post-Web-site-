<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
  

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
 
    }

    public function index()
    {
        $posts=POST::latest()->get();


        return view('Post.index',compact('posts'));
        
    }



    public function create()
    {
        return view('Post.Create');
    }




    public function store(Request  $request)
    {
      /*$post= new Post;  // or \App\Post
      $post->title=request('title');
      $post->body=request('body');
      $post->save();
     
      //Second Way  problem with it it required to get all filed to solve this go to model 
      Post::create([
       'title'=>request('title'),
      'body'=>request('body')

      ]);*/
      //or
      $this->validate(request(),[
          'title'=>'required',
          'body'=>'required',
          'url'=>'image|mimes:jpg,jpeg,gif,png|max:2048'
      ]);


      $imag_name=time().'.'.$request->url->getClientOriginalExtension();
      $request->url->move(public_path('upload'),$imag_name);
      $post= new Post;  
      $post->title=request('title');
      $post->body=request('body');
      $post->url= $imag_name;
      auth()->user()->publish($post);
     
    return redirect('/');
    }

    public function show(Post $post)
    {
        //$post=Post::find($id);
        return view('Post.show',compact('post'));
    }
    

    
}
