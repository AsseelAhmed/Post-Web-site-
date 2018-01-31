<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
class SessionsController extends Controller
{

    public function  __construct()
    {

        $this->middleware('guest', ['except' => ['destory']]);
    }
    public function create()
    {
        
        return view('sessions.create');
    }
    public function store()
    {
       
       if(!auth()->attempt(request(['email','password'])))
       {
           return back()->withErrors([

            'message' =>'place check your credentials and try agin.'
           ]);

       } 
       return redirect('/');
    }

    public function destory()
    {
         auth()->logout();
       
         return redirect('/');
    
    }
}
