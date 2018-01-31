<?php

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

//Parent class to implemnt guarded
class Model extends Eloquent
{
     //to solve problem in controller this mean store only title and body 
    //protected $fillable=['title','body'];
   // protected $guarded=['id'];   //store every filed except id
    protected $guarded=[];   //store every filed
  
}
