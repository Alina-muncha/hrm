<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\RegistrationController;

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
require_once('admin.php');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-login', function () {
    return view('layouts.auth.login');
});

Route::get('/admin-signup', function () {
    return view('layouts.auth.signup');
});

Route::get('/password-reset', function () {
    return view('layouts.auth.password-reset');
});

Route::get('/new-password', function () {
    return view('layouts.auth.new-password');
});

Route::get('/admin-allmembers', function () {
    return view('layouts.account.all-members');
});

Route::get('/admin-adduser', function () {
    return view('layouts.account.addUser');
});

Route::get('/admin-singleuser', function () {
    return view('layouts.account.single-user');
});

Route::get('/admin-dashboard', function () {
    return view('layouts.auth.auth');
});

// clock-in-portal

Route::get('/admin-dashboard/clock-in-portal', function () {
    return view('layouts.clock-in-portal.clock-in-portal');
});

Route::get('/admin-dashboard/clock-in-portal/holidays', function () {
    return view('layouts.clock-in-portal.holidays');
});

Route::get('/admin-dashboard/clock-in-portal/holiday-listing', function () {
    return view('layouts.clock-in-portal.holiday-listing');
});

Route::get('/admin-dashboard/clock-in-portal/reports', function () {
    return view('layouts.clock-in-portal.reports');
});

Route::get('/admin-dashboard/clock-in-portal/staffs', function () {
    return view('layouts.clock-in-portal.staffs');
});

Route::get('/admin-dashboard/clock-in-portal/leave-request', function () {
    return view('layouts.clock-in-portal.leaverequest');
});

Route::get('/admin-dashboard/clock-in-portal/admin-leaverequest', function () {
    return view('layouts.clock-in-portal.admin-leaverequest');
});

Route::get('/admin-dashboard/clock-in-portal/designation', function () {
    return view('layouts.clock-in-portal.designation');
});


Route::get('/register', [RegistrationController::class, 'index']);

Route::post('/register', [RegistrationController::class, 'register'])->name("test");


// Route::get('/about', function(){
//     echo "welcome to about page";
// });

// Route::get('/contact', function(){

// return "You can contact us here with the given number.";
// });


// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/contacts', function(){
//     return view('contacts');
// });

// Route::get('/post/{id}', function($id){
//     return "This is post number". $id;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is " . $url;
// }));

// Route::group(['middleware' => ['web']],function (){
// });

// // Route::get("list", [Products::class, 'productList']);
// // Route::get("addlist", [Products::class,'addProduct']);
// // Route::get("updatelist", [Products::class,'updateProduct']);

// Route::controller(Products::class)->group(function(){
//     Route::get("list", 'productList');
//     Route::get("addlist", 'addProduct');
//     Route::get("updatelist", 'updateProduct');
// });

// Route::get('/controllerhome', [basicCon::class, 'index']);

// Route::resource('resourceController', PostController::class);

// // Route::view("usertype", "users");                      // the given following routes are the ways to call views 

// // Route::get('/usert/{name}',function($name){
// //     return view('users', ["name"=>$name]);
// // });



//  Route::get("usertype/{name}",[UsersController::class, 'loadUserview']);                   // controller use garera view lai kasari call garney ta 

// //to insert data in the db :-
// Route::get ('/insert', function(){
//     DB::insert ('insert into posts(title,body) values(?,?)', ['Testing', 'There are 2 different section foe CSIT faculty']);
// });

// //to read data from the db:-
// Route::get('/read', function(){
//     $posts = DB::select('select * from posts where id = ?', [1]);

//     foreach($posts as $post){
//         return $post->title;
//     }
// });

// //to update data from the db:-
// Route::get('/update', function(){
//     $updated = DB::update('update posts set body = "Dogs barks a lot" where id = ?', ['3']);

//         return $updated;
  
// });

// //to delete data from the db:-
// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', ['4']);

//         return $deleted;
  
// });

// Route::get('/readdb', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }
// });

// Route::get('/findwhere', function(){
//     $findpost = Post::where('id', 3)->orderBy('id','asc')->take(1)->get();
//     return $findpost;
// });

// Route::get('/findmore', function(){
//     $findmore = Post::findOrFail(2);
//     return $findmore;
// });

// Route::get('/basicinsert2', function(){
//     $post = Post::find(3);

//     $post->title = "New Eloquent3";
//     $post->body = "Wow eloquent is really cool, look at this content. 3";

//     $post->save(); 
// });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method', 'body'=>'I\m learning alot with Edwin']);
// });

// Route::get('/softdelete',function(){
//     Post::find(5)->delete();
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('post/{$id}/user', function(){
//     return Post::find($id)->user->name;
// });


/*
|--------------------------------------------------------------------------
| Eloquent relationships
|--------------------------------------------------------------------------
|
*/
//one to one relationship
// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post;

// });

// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });

// //one to many relationship
// Route::get('posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//       echo  $post->title . "<br>";
       
//     }
// }); 

// many to many relationship

// Route::get('/user/{id}/role'. function($id){
//     $user = User::find($id)->roles()->orderBy('id','desc')->get();

//     return $user;

//     // foreach($user->roles as $role){
//     //     return $role->name;
//    // }
// });

// Route::get('/user/pivot', function(){

//     $user = User::find(2);

//     foreach($user->roles as $role){

//         return $role->pivot->created_at;

//     }
// });


//  //has-many-through-relation
// Route::get('/user/country', function(){

//     $country = Country::find(3);
//     foreach($country->$posts as $post){
//         return $post->title;
//     }
// });

//polymorphic relations
// Route::get('user/photos', function(){
//     $user = User::find(1);
//         foreach($user->photos as $photo){
//             return $photo->path;
//         }
// });

//polymorphic many to many
// Route::get('/post/tag', function(){
//     $post = Post::find(1);

//     foreach($post->tags as $tag){
//         echo $tag->name;
//         }
// });

// Route::get('/tag/post', function(){
//         $tag = Tag::find(2);

//         foreach($tag->posts as $post){
//             return $post->title;
//             }
//     });

/*
|--------------------------------------------------------------------------
| Crud Application
|--------------------------------------------------------------------------
|
*/

Route::resource('/post', 'App\Http\Controllers\PostController');
