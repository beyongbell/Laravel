<?php
use App\Http\Middleware\CheckAge;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function(){
    return "Tinnakorn Choompee";
});

Route::match(['get','post'],'foo2', function(){
    return "Tinnakorn Choompee";
});

Route::any('foo3', function(){
    return redirect('showRedirect');
});

Route::get('/showRedirect', function(){
    return 'Hi redirect Route';
});

Route::view('bell', 'bell');

Route::get('users/{id}',function($id){
    return "User".$id;
});

Route::get('post/{post}/comments/{comment}', function($postId,$commentId){
    echo "Post ".$postId;
    echo "<br>";
    echo "Comments ".$commentId;
});

Route::get('userss/{name?}', function($name=NULL){
    return $name;
});

Route::get('user/{name?}', function($name="Tinnakorn"){
    return $name;
});

Route::get('name/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('id/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

Route::get('test', 'TestController@index');

Route::get('test/view', 'TestController@view');

Route::get('user', 'User\UserController@index');

Route::get('student', 'StudentController@index');

Route::get('student/profile', 'StudentController@play');

Route::get('student/list', 'StudentController@list_student');

Route::resource('lib','LibController');

Route::get('home', function(){
    return "Your Age is Less then 100 or equal 100";
});

Route::get('user/age/{age}',function(){
    return "You are permission";
})->middleware(CheckAge::class);

Route::get('child',function(){
    $name = '<h1> Bell </h1>';
    return view('child', compact('name'));
}); 

Route::get('home', function(){
    $data = ['A' , 'B', 'C'];
    return view('home', ['data' => $data]);
});

Route::get('admin', 'AdminController@home');

Route::get('admin/id/{id}', 'AdminController@id');

Route::get('admin/html', 'AdminController@html');

Route::get('admin/getUser', 'AdminController@getUser');

Route::get('admin/aggregate', 'AdminController@aggregate');

Route::get('admin/join', 'AdminController@join');

Route::get('admin/union', 'AdminController@union');

Route::get('role', 'ModelController@getRole');

Route::get('rolewhere', 'ModelController@rolewhere');

Route::get('chunk', 'ModelController@chunk');





