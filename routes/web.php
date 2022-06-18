<?php
use App\Http\Controllers\TestControler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\post;
use Illuminate\Support\Facades\Storage;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/show',[TestControler::class,'vera']);
//Route::get('/insert',[TestControler::class,'insert']);
//Route::get('/select',[TestControler::class,'select']);
//Route::get('update',[TestControler::class,'updatepost']);
//Route::get('delete',[TestControler::class,'deleteposts']);
//Route::get('allpost',[TestControler::class,'getpost']);
//Route::get('save-post',[TestControler::class,'postsave']);
//Route::get('update-post',[TestControler::class,'postupdate']);
//Route::get('delete-post',[TestControler::class,'postdelete']);
//Route::get('work-with-trash',[TestControler::class,'trash']);
//Route::get('restor-delete',[TestControler::class,'restordelete']);
//Route::get('force-delete',[TestControler::class,'forcedelete']);
//Route::get('find-all',[TestControler::class,'postfind']);
//
////رابطه یک به یک
//
//Route::get('user/{id}/post',function ($id){
//    $user_posts=\App\Models\User::find($id)->post->content;
//    return $user_posts;
//});
//Route::get('post/{id}/user',function ($id){
//   $post_user=\App\Models\post::find($id)->user->email;
//   return $post_user;
//});
//
////رابطه یک به چند
//
//Route::get('user/{id}/posts',function ($id){
//   $user_posts= \App\Models\User::find($id)->posts;
//    foreach ($user_posts as $post){
//        echo $post->content.'</br>';
//    }
//});
//
////چند به چند
//
//Route::get('user/{id}/role',function ($id){
//   $user = \App\Models\User::find($id);
//   foreach ($user->roles as $role) {
//       echo $role->name . '<br/>';
//   }
//});
//Route::get('pivot',function (){
//   $user= \App\Models\User::find(1);
//   foreach ($user->roles as $role1){
//       echo $role1->pivot->created_at;
//       echo '<br/>';
//   }
//});
////رابطه چند به چند
//Route::get('user/country',function (){
//   $country = \App\Models\country::find(1);
//   foreach ($country->posts as $post){
//       echo $post->title;
//       echo '<br/>';
//   }
//});
//
//// رابطه  یک به چند پولی مورفیگ
//
//Route::get('photo/user',function (){
//   $user =\App\Models\User::find(1);
//   foreach ($user->photos as $photo){
//       echo $photo->path;
//       echo '<br/>';
//   }
//});
//Route::get('photo/post',function (){
//    $post =\App\Models\post::find(5);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo '<br/>';
//    }
//});
//Route::get('photo/{id}/post',function (){
//   $photo =\App\Models\photo::find(2);
//   return $photo->imageable;
//});
//
////رابطه چند به چند پولیمورفیک
//
//Route::get('post/tag',function (){
//    $post =\App\Models\post::find(5);
//    foreach ($post->tags as $tag){
//        echo $tag->name;
//        echo '<br/>';
//    }
//});
//Route::get('video/tag',function (){
//    $video =\App\Models\video::find(2);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo '<br/>';
//    }
//});
//Route::get('tags/{id}/video',function ($id){
//    $tag =\App\Models\tag::find($id);
//    foreach ($tag->videos as $video){
//        echo $video->name;
//        echo '<br/>';
//    }
//});
//
////اضافه کردن فیلدای جدول پست وبدونه واردکردن به صورت دستی user_id
//
//Route::get('cr/{id}',function ($id){
//   $user=\App\Models\User::find($id);
//   $post= new App\Models\post();
//   $post->title='روش جدید اضافه کردن باروت';
//   $post->content='روش جدید روووووت';
//   $user->posts()->save($post);
//});
//
////خواندن
//
//Route::get('read/{id}',function ($id){
//    $user = App\Models\User::find($id);
//    foreach ($user->posts as $post){
//        echo $post->title;
//        echo '<br/>';
//    }
//});
//Route::get('update/crud',function (){
//   $user= User::find(2);
//   $user->posts()->whereId(9)->update(['title'=>'از طریق crud','content'=>'up az crud']);
//});
//Route::get('del',function (){
//   $user=User::find(1);
//   $user->posts()->whereId(12)->delete();
//});
//
////crud در روابط چند به چند
//
//Route::get('create/crud',function (){
//   $user= User::find(1);
//   $role=new App\Models\Role();
//   $role->name='نویسنده';
//   $user->roles()->save($role);
//});
//
//Route::get('reead',function (){
//   $user=User::find(1);
//   foreach ($user->roles as $role)
//      echo $role->name,'<br/>';
//
//});
//
//Route::get('update/crud',function (){
//   $user=User::find(1);
//   if ($user->has('roles')){
//       foreach ($user->roles as $role){
//           if($role->name == 'نویسنده'){
//               $role->name='author';
//               $role->save();
//           }
//       }
//    }
//
//});
//Route::get('delete/crud',function (){
//   $user= User::find(1);
//   foreach ($user->roles as $role){
//       if ($role->name =='author') {
//           $role->delete();
//
//       }
//   }
//});
//Route::get('detach',function (){
//   $user=User::find(1);
//   $user->roles()->detach(3);
//});
//Route::get('attach',function (){
//   $user=User::find(1);
//   $user->roles()->attach(3);
//});
//Route::get('sync',function (){
//   $user=User::find(1);
//   $user->roles()->sync([1,2,3]);
//});
//
////رابطه پولیمورفیگ با crud
//Route::get('morph/crud',function (){
//   $video= \App\Models\video::find(1);
//   $video->tags()->create(['name'=>'morph video']);
//});
//Route::get('reeead',function (){
//   $video=\App\Models\video::find(1);
//   foreach ($video->tags as $tag){
//       echo $tag->name;
//       echo'<br/>';
//   }
//});
//Route::get('updetecrud',function (){
//   $video=\App\Models\video::find(1);
//   $tag=$video->tags;
//   $newtag = $tag->where('id',3)->first();
//   $newtag->name='تگ جدید با crud';
//   $newtag->save();
//
//});
//Route::get('del2',function (){
//    $video=\App\Models\video::find(1);
//    $tag= $video->tags;
//    $deltag=$tag->where('id',3)->first();
//    $deltag->delete();
//});
//Route::get('detach2',function (){
//    $video= \App\Models\video::find(1);
//    $video->tags()->detach();
//});
//Route::get('attach2',function (){
//    $video= \App\Models\video::find(1);
//    $video->tags()->attach(1);
//});
//Route::get('sync2',function (){
//    $video= \App\Models\video::find(1);
//    $video->tags()->sync([1,2]);
//
//});

//Route::resource('/posts',\App\Http\Controllers\PostsController::class);
//Route::get('file',function(){
////   $file=\Illuminate\Support\Facades\Storage::disk('public')->get('image\ibZ0FxOQSff4fflc2GyhKJEAnZGymnwwbd2jwyGX.jpg');
////    $file=Storage::url('image/ibZ0FxOQSff4fflc2GyhKJEAnZGymnwwbd2jwyGX.jpg');
////   echo $file;
//    return Storage::disk('public')->download('image/ibZ0FxOQSff4fflc2GyhKJEAnZGymnwwbd2jwyGX.jpg');
//
//});

//


//Auth::routes(['verify'=>true]);
//Route::middleware(['auth','verified'])->group(function (){
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/');
//});

//Route::get('/',function (){
////   $user= Auth::user();
////   $id= Auth::id();
////   if(Auth::check()){
////       echo "hello :" . $user->name;
////       echo "<br/>";
////       echo "ID :" .$id;
////   }
////   else{
////    return  redirect()->to('/home');
////   }
//
//
////    $email='sani@gmail.com';
////    $password='87654321';
////    $auth=Auth::attempt(['email'=>$email,'password'=>$password]);
//    $main_user = User::findOrfail(9);
//    $user= Auth::login($main_user);
//    dd($user);
//});


Auth::routes(['verify'=>true]);
Route::middleware(['auth','verified'])->group(function (){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/posts',\App\Http\Controllers\PostsController::class);
});
Route::get('/');
Route::get('/admin',function (){
    echo "hello to admin page";
})->middleware('isAdmin:نویسنده');

//
//یک تغییر ایجاد میکنیمبرای تست گیت هاب
//تغییرات
