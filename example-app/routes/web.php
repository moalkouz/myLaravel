<?php

use App\Models\Category;
use App\Models\Post;
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
    $posts=Post::All();
    return view('posts',["posts"=>$posts]);
});
//->where('post',[]) we can add where to set constraint to the url befoer route to is
// ->whereAlpha /// special constarain

Route::get('/post/{post:slug}', function (Post $post) {


    return view('post',['post'=>$post]);
});
Route::get('/categories/{category:slug}',function(Category $category){

    return view('posts',["posts"=>$category->posts]);

});

    //any thing in {post} will move to slug
    //abort(404) return a 404 messsage
    //file_get_content to get all content in html file
//     $path=__DIR__."/../resources/posts/{$slug}.html";
//    if(!file_exists($path)){
//     abort(404);
//    }
//    //in cash will cash all the content in cash and will keep it 5 second so through the 5 second the file will return from cash
//    //posts.{$slug} will be the id of our cash
//    $post=cache()->remember("posts.{$slug}",5,function() use ($path){
//     return file_get_contents($path);
//    });

    // $post=Post::find($id);


    // Route::get('/post/{post:slug}', function (Post $post) {
        //this route will make a query to get the post the have slug equal with the $post
        //this approsh called route model binding
    //     return view('post',['post'=>$post]);
    // });
