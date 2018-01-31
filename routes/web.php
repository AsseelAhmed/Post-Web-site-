<?php

use App\Task;
//method 1 to pass argument
/*Route::get('/', function () {
    return view('welcome',[

        'name'=>'Asseel',
        'Age'=>'220',
        'Tall'=>'330'
    ]);
});

//or method 2 to pass argument

Route::get('/', function () {
    $name='World';
    $arr=[
        'Go to School',
        'Play Football',
        'Play Tenis',
        'Go To home'
        ];
    return view('welcome',compact('arr'));
});


//to get from database
Route::get('/tasks', function () {
    $tasks=Task::all();
    return view('tasks.index ',compact('tasks'));
    });
Route::get('/tasks/{task}', function ($id) {     
//$task=DB::table('tasks')->find($id);
$task=Task::find($id);
return view('tasks.show ',compact('task'));
});

//to deal with controller
Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');

*/

Route::get('/Posts/{post}','PostsController@show');
Route::get('/','PostsController@index')->name('home');
Route::get('/create','PostsController@create');
Route::Post('/Posts','PostsController@store');
Route::Post('/posts/{post}/comments','CommentsController@addComment');

Route::get('/register','RegistrationController@create');

Route::Post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destory');

