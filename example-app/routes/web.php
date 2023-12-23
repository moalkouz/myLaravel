<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});
//->where('post',[]) we can add where to set constraint to the url befoer route to is
// ->whereAlpha /// special constarain

Route::get('/post/{post}', function ($slug) {
    //any thing in {post} will move to slug
    //abort(404) return a 404 messsage
    //file_get_content to get all content in html file
    $path=__DIR__."/../resources/posts/{$slug}.html";
   if(!file_exists($path)){
    abort(404);
   }
   //in cash will cash all the content in cash and will keep it 5 second so through the 5 second the file will return from cash
   //posts.{$slug} will be the id of our cash
   $post=cache()->remember("posts.{$slug}",5,function() use ($path){
    var_dump("ssdsd");
    return file_get_contents($path);
   });

    return view('post',['post'=>$post]);
});

