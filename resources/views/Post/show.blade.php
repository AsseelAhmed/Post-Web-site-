@extends('layouts.master')
@section('content')



<div class="col-sm-8 blog-main">



<h1>{{$post->title}}</h1>

{{$post->body}}
<hr> 
<h3 class="page-header"> Comments:</h3>

<div  class="comments"> 
  <ul class="list-group">  
   
   @foreach($post->comments as $comment)
      <li class="list-group-item"> 
      <p>{{$comment->created_at->diffForHumans()}}</p>

      </br>
      {{$comment->body}}

      </li>
   @endforeach
  </ul>

</div>
<hr>
<div class="card">  
  <div class="card-block"> 

    <form method="POST" action="/posts/{{$post->id}}/comments"> 
    @include('layouts.errors')
    {{ csrf_field() }} 

        
      @if(Auth::check())
        <div class="form-group"> 
              <textarea name="body" placeholder="Your comment here" class="form-control">  </textarea>
       <div> 

        <br>
        <div class="form-group">  
                <button type="submit" class="btn btn-primary">Add comment</button>
        </div>

      @endif 
      

    </form>

  </div>


</div>
</div>
<hr>




@endsection