<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Month;
use App\Http\Middleware\Role;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StudentInsertController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;

// Basic Routes
Route::get('/kk', function () {
    return 'My name is Keerthi';
});

Route::get('/sun', function () {
    return 'Sun rises in the East';
});

Route::get('/if', function() {
    if (true) {
        return '<h1> This is Keerthi</h1>';
    }
    return '<h1> I am Vidhi </h1>';
});

Route::get('/ab', function() {
    if (true) {
        return '<h1> Sun rises in the east </h1>';
    }
    return '<h1> Sun rises in the west </h1>';
});

Route::get('/url', function() {
    if (true) {
        return '<h1> Sun rises in the east </h1>';
    }
    return '<h1> Sun rises in the west </h1>';
});

// Routing Parameters (Required)
Route::get('/user/{id}', function($id){
    return '<b>' . $id . '<b>';
});

// Optional Parameters
Route::get('/abc/{name?}', function ($name = null){
    return $name;
});

Route::get('/name/{name?}', function($name = 'Keerthi'){
    return $name;
});

// Redirection
Route::get('/first', function(){
    return redirect('kk');
});

Route::get('/redir1', function() {
    if(true) {
        return redirect('kk');
    }
    return '<h1> I am VidhiSingh </h1>';
});

Route::get('/redir2', function() {
    return redirect('sun');
});

Route::get('/redir3', function() {
    if(true) {
        return '<h1>I am Not Keerthi</h1>';
    }
    return redirect('kk');
});

// Naming Routing
Route::get('/redir4', function(){
    if (true){
        return redirect()->route('paris');
    }
    return '<h1> I am Keerthi</h1>';
});

Route::get('/olympic2024', function(){
    return 'The Olympics2024 is happening in Paris';
})->name('paris');

Route::get('/user1/{id}', function($id){
    if($id == 1){
        return redirect('kk');
    }
    elseif($id == 2){
        return redirect('sun');
    }
    else {
        return '404 error';
    }
});

// Form Routes
Route::get('/user_form', function(){
    $title = "Resume / CV";
    return view('user_form', ['title' => $title]);
});

Route::post('/get-userdata', function (Request $request) {
    $name = $request->input('name');
    $age = $request->input('age');
    $phone = $request->input('phone');

    // You can process the data here (e.g., save to database)

    return redirect('user_form')->with('message', 'Data submitted successfully!<br>' . 
        'My name is ' . $name . '. My age is ' . $age . '. My mobile number is ' . $phone . '.');
});

// Passing Data to Views
Route::get('/heros', function () { 
    $heading = "Tomorrow is Oct 2 HOLIDAY"; 
    return view('hero', compact('heading')); 
});

Route::get('/screen', function () { 
    $no_of_user = 10; 
    return view('screenshot', compact('no_of_user')); 
});

Route::get('/hero', function () { 
    $authors = ['Karthick','Ramya','Panneerselvam','Tamil', 'Sona']; 
    return view('hero', compact('authors')); 
});

// Middleware Routes
Route::get('month/{num}', function ($num){
    if($num == 1){
        return '<h1> January </h1>';
    } else if($num == 2){
        return '<h1> February </h1>';
    } else if($num == 3){
        return '<h1> March </h1>';
    }
})->middleware(Month::class);

Route::get('role/{num}', function ($num){
    if($num == 'admin'){
        return '<h1> This is admin page </h1>';
    } else {
        return '<h1> Access Denied </h1>';
    }
})->middleware(Role::class);

// Controller Routes
Route::get('/login', [LoginController::class, 'login_form'])->name('login.form');
Route::get('/logout', [LogoutController::class, 'logout_form'])->name('logout.form');

// Student Management Routes

   // Route::get('/', [StudentInsertController::class, 'student_list']);
    //Route::get('/insert', [StudentInsertController::class, 'insert_form']);
    //Route::post('/create', [StudentInsertController::class, 'insert']);
    //Route::get('/edit/{id}', [StudentInsertController::class, 'edit']);
    //Route::post('/update/{id}', [StudentInsertController::class, 'update']);
    //Route::get('/delete/{id}', [StudentInsertController::class, 'delete']);




    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    */
    
    

    Route::post('/', [StudentController::class, 'students_list']);
    Route::post('/create', [StudentController::class, 'add_student']);

    Route::get('/registration', [RegistrationController::class, 'create'])->name("register.create");
    Route::post('/registration', [RegistrationController::class, 'store'])->name("register.store");

    use App\Http\Controllers\PostController;

    Route::resource('posts', PostController::class);
    

    //session - store the data by a request - get - put- - delete

    Route::get('/get-session', [SessionController::class, 'getSession']);
    Route::get('/set-session', [SessionController::class, 'setSession']);
    Route::get('/del-session', [SessionController::class, 'deleteSession']);