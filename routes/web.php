<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Tag;
use Carbon\Carbon;
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


/*
Route::get('/url',function(){
	return "test";
});

Route::get('/url',[PostController::class,'index']);

Route::get('/read', function () {
    $result = DB::select('select * from posts where id = ?',[1]);
	
	foreach($result as $post){
		return $post->title;
	}
});

Route::get('/update', function () {
    $results = DB::update('update posts set title= "android studio"',[1]);
	return $results;
});

Route::get('/delete', function () {
    $results = DB::update('delete from posts where id=?',[1]);
	return $results;
});

Route::get('/readelq', function () {
    $result = Post::find(2);
	
	return $result->title;
});
Route::get('/whereidelq', function () {
    $result = Post::where('id',2)->orderBy('id','asc')->take(1)->get();
	
	foreach($result as $post){
		return $post->title;
	}
});

Route::get('/findorfail', function () {
    $result = Post::findOrFail(2);
	
	return $result->title;
});

Route::get('/wherelessthan', function () {
    $result = Post::where('id','=',2)->firstOrFail();
	
		return $result->title;
	
});

Route::get('/saveinsert', function () {
    $result = new Post;
	$result->title = "laravel";
	$result->body = "laravel framework";
	$result->footer = "laravel framework 2022";
	$result->user_id = 1;
	$result->save();
	
});

Route::get('/saveupdate', function () {
    $result = Post::find(2);
	$result->title = "mocu";
	$result->body = "laravel framework";
	$result->footer = "laravel framework 2022";
	$result->save();
	
});

Route::get('/create', function () {
    $result = Post::create(['title'=>'php','body'=>'programming','footer'=>'language']);
	return $result;
});

Route::get('/updatemass', function () {
    $result = Post::where('id',2)->update(['title'=>'fujo','body'=>'mwapashua','footer'=>'hamisi']);
	return $result;
});

Route::get('/deletefun1', function () {
    $result = Post::where('id',2)->delete();
	return $result;
});

Route::get('/deletefun2', function () {
    $result = Post::find(7);
	$result->delete();
});

Route::get('/deletefun3', function () {
    $result = Post::destroy([5,6]);
});

Route::get('/viewTrashed', function () {
    $result = Post::onlyTrashed()->get();
	return $result;
});

Route::get('/retore', function () {
    $result = Post::onlyTrashed()->where('id',7)->restore();
	return $result;
});

Route::get('/forcedelete', function () {
    $result = Post::onlyTrashed()->where('id',7)->forceDelete();
	return $result;
});


Route::get('/onetoone', function () {
    //return User::findOrFail(1)->post->title;
    return User::findOrFail(1)->post->body;
});

Route::get('/onetoonerev', function () {
    return Post::findOrFail(8)->user->email;
});

Route::get('/onetomany', function () {
    //return User::findOrFail(1)->post->title;
    $user = User::findOrFail(1);
	
	foreach($user->posts as $posts){
		echo $posts->title."<br>";
	}
});

Route::get('/manytomany1', function () {
    //return User::findOrFail(1)->post->title;
    $user = User::findOrFail(2)->roles()->orderBy('id','asc')->get();
	
	foreach($user as $roles){
		echo $roles->name."<br>";
	}
});

Route::get('/manytomany2', function () {
    //return User::findOrFail(1)->post->title;
    $role = Role::findOrFail(1)->users()->orderBy('id','asc')->get();
	
	foreach($role as $users){
		echo $users->e."<br>";
	}
});

Route::get('/pivote', function () {
    //return User::findOrFail(1)->post->title;
    $role = Role::findOrFail(1)->users()->orderBy('id','asc')->get();
	
	foreach($role as $users){
		echo $users->pivot->created_at."<br>";
	}
});

Route::get('/hasmanythrough', function () {
    //return User::findOrFail(1)->post->title;
    $country = Country::findOrFail(1);
	
	foreach($country->posts as $post){
		echo $post->body."<br>";
	}
});

Route::get('/morph1',function(){
	$user = User::find(3);
	
	foreach($user->photo as $my){
		return $my->Path;
	}
});

Route::get('/morph2',function(){
	$user = Post::find(1);
	
	foreach($user->photo as $my){
		return $my->shared;
	}
});

Route::get('/tags1',function(){
	$tag = Tag::find(1);
	//return $tag->videos;
	foreach($tag->videos as $my){
		echo $my->name."<br>";
	}
});

Route::get('/tags2',function(){
	$tag = Tag::find(1);
	//return $tag->videos;
	foreach($tag->posts as $my){
		echo $my->title."<br>";
	}
});

Route::get('/insert', function () {
    DB::insert('insert into posts(title,body,footer) values(?,?,?)',['Java','android','studio']);
});
*/
Route::get('/view',[PostController::class,'index']);
Route::resource('/app',PostController::class);

Route::get('/date', function(){
	$date = new DateTime("+1 week");
	
	echo $date->format('d-m-y m:s:h');
	
	echo "<br>";
	
	$date = Carbon::now()->subDays(5)->diffForHumans();
	echo $date;
});

Route::get('/accessor',function(){
	$user = User::findOrFail(3);
	return $user->name;
});


Route::get('/mutator',function(){
	$user = User::findOrFail(3);
	$user->name = "fisi";
	$user->save();
});

Route::get('/scope',function(){
	$user = User::latest();
	return $user;
});