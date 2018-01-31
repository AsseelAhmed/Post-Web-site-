<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <title>Laravel</title>
      
    </head>
    <body> 
   
   
    <ul>
     <?php 
     //tasks is collection of object so we must use $arr->nameof object 
     foreach($tasks as $ar):?>
     <li>
     <a href="/tasks/{{$ar->id}}">
     {{$ar->body}}</li>
  </a>
     
<?php endforeach; ?></h1>
</ul>

    </body>
</html>
