<?php

namespace App\Http\Controllers;
use App\Events\PostViewEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\post;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request )
    {
//        $post= new  post();
//        if($file=$request->file('file')) {
//            $name = $file->getClientOriginalName();
//            $file->store('public/image');
//        }


////        $post= new  post();
//        if($file=$request->file('file')){
//            $name=$file->getClientOriginalName();
//            $file->move('image',$name);
//            $post->path=$name;
//        }
//
//
        $post->title=$request->title;
        $post->content=$request->description;
        $post->user_id=1;
        $post->save();


        //        return $request->input('title');
    }

    public function index()
    {
//        echo asset('storage/javascript.jpg');

//        $posts= post::all();
        $posts= post::with('user')->get();
        return view('posts.index',compact(['posts']));
    }

    public function show($id)
    {
        $post = post::findOrfail($id);
        event(new PostViewEvent($post));
        return view('posts.show',compact(['post']));

    }

    public function edit($id)
    {
        $post= post::findOrfail($id);
        return view('posts.edit',compact(['post']));

//        $post= post::findOrfail($id);
//        $user= Auth::user();
//        if ($user->can('update',$post)) {
//            return view('posts.edit',compact(['post']));
//        }else{
//            return "اجازه ویرایش ندارید";
//        }



//        $post=post::findOrfail($id);
//        if (Gate::allows('edit-post',$post)) {
//            return view('posts.edit',compact(['post']));
//        }else{
//            return "شما اجازه ویرایش این پست را ندارید";
//        }

    }

    public function update(Request $request,$id)
    {
        $post=post::findOrfail($id);
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();
        return redirect('posts');

    }

    public function destroy($id)
    {
        $post = post::findOrfail($id);
        $post->delete();
        return redirect('posts');

    }
}
