@extends('layouts.master')


@section('content')
<h2 >Sign Up</h2>
  <div class="col-sm-8">  
  <form method="POST" action="/register" style="margin-left:50px">  
  @include('layouts.errors')
   {{csrf_field()}}

  
   <div class="form-group"> 

     <lable for="name"> Name:</lable> 
     <input type="text" class="form-control" id="name" name="name" required>

   </div>

   <div class="form-group"> 

     <lable for="email"> email:</lable> 
     <input type="email" class="form-control" id="email" name="email"required>
     
   </div>
   
   <div class="form-group"> 

     <lable for="password"> Password:</lable> 
     <input type="password" class="form-control" id="password" name="password"required>
     
   </div>
   <div class="form-group"> 

     <lable for="password_confirmation">  Password Confirmation:</lable> 
     <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"required>
     
   </div>
   <div class="form-group"> 
     <button type="submit" class="btn btn-primary">Register</button>     
   </div>


  </form>
  </div>



@endsection

