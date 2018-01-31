
 <h3 class="blog-post-title">

 <a href="/Posts/{{$post->id}}"> 
 {{$post->title}} 
 </a>  
 </h3>
 <span class="blog-post-meta"> created on {{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}</span> </br>


   
    <strong>{{$post->body}}</strong>
    <br>
    @if($post->url!=null)
    <img src="upload/{{$post->url}}" style="width:500px; hight:200px">
    @endif
    </br>
    <br>
    @php
    $countlike=0;
    $countdislike=0; 
 
    @endphp
    @foreach($post->likes as $like)
        @php
            if($like->like==1)
            $countlike++;
            else
            $countdislike++;
        @endphp
    @endforeach
   <div style="margin-left:5px">
   
    <button  style="margin-right:20px; width:80px" type="button" class="btn btn-success">like <span class="glyphicon glyphicon-thumbs-up "></span> <b>{{$countlike}}</b></button>
    <button style="margin-right:20px; width:85px" type="button" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span> <b>{{$countdislike}}</b></button>
    </div>
<hr> 