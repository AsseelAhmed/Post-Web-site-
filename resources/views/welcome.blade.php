<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <title>Laravel</title>
      
    </head>
    <body>
     <h1>Welcom 
     <ul>
     <?php 
     //tasks is collection of object so we must use $arr->nameof object 
     foreach($tasks as $ar):?>
     <li>{{$ar->body}}</li>
    

     
<?php endforeach; ?></h1>
</ul>
    </body>
</html>
