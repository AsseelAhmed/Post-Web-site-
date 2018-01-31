
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Laravel</title>
      
    </head>
    <body>

    
@include('layouts.nav')

<div class="col-sm-8 offset-sm-1" style="margin-left:30">  
@yield('content')

</div>
    
@include('layouts.sidebar')




<br>

@include('layouts.footer')
    </body>
</html>
