@extends('layouts.master')


@section('content')
  <div class="col-sm-8">  
  <h2>Sign In</h2>
  <form method="POST" action="/login" style="margin-left:90px">  
  @include('layouts.errors')
   {{csrf_field()}}

  

   <div class="form-group"> 

     <lable for="email"> email:</lable> 
     <input type="email" class="form-control" id="email" name="email" required>
     
   </div>
   
   <div class="form-group"> 

     <lable for="password"> Password:</lable> 
     <input type="password" class="form-control" id="password" name="password"required>
     
   </div>
   
   <div class="form-group"> 
     <button type="submit" class="btn btn-primary">Register</button>     
   </div>


  </form>
  </div>



@endsection