<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestControler extends Controller
{
//    public function vera()
//    {
//        $people=['sanaz','yiobo','zhan','yzahan','arad'];
//        return view('pages.content',compact('people'));
//    }
//
//    public function insert()
//    {
//        DB::insert('insert into posts(title,content) values (?,?)',['insert','in test baraieh insert ast ']);
//
//    }
//
//    public function select()
//    {
//        $allposts = DB::select('select * from posts');
//        return $allposts;
//    }
//
//    public function updatepost()
//    {
//        $updateposts = DB::update('update posts set title="update title" where id=?',[1]);
//        return $updateposts;
//
//    }
//
//    public function deleteposts()
//    {
//        $deleteposts= DB::delete('delete from posts where id=?',[2]);
//        return $deleteposts;
//
//    }
//
//    public function getpost()
//    {
//        $getallpost = post::where('title','insert')->orderBy('id','asc')->take(1)->get();
//        return $getallpost;
//
//    }
//
//    public function postsave()
//    {
////        $post = new post();
////        $post->title="این یک تایتل برای مدل پست است";
////        $post->content="این یک کانتنت برای مدل پست است.";
////        $post->save();
//
//        //یا به روش پایین
//        $post =post::create(['title'=>'post shomareh1','content'=>'contentshomareh1']);
////           دقت شود که خطا میگیرد برای رفع خطا باید در مدل پست پروکتید فیل ابل رابنویسیم
//
//    }
//
//    public function postupdate()
//    {
////        $update = post::where('id',4)->update(['title'=>'new title','content'=>'new content']);
//        // یا از روش پایین
//        $update = post::findOrfail(4);
//        $update->title="title jadid";
//        $update->content="content jadid";
//        $update->save();
//        return $update;
//    }
//
//    public function postdelete()
//    {
////        $post= post::where('id',3)->first();
////        $post->delete();
//
//        //یابه روش پایین
////        $post = post::destroy( 1);
//
//        //یاروش پایین
//        $post = post::where('id',7)->delete();
//    }
//
//    public function trash()
//    {
//        $post = post::onlyTrashed()->get();
//        return $post;
//
//    }
//
//    public function restordelete()
//    {
//        $post= post::onlyTrashed()->where('id',4)->restore();
//    }
//
//    public function forcedelete()
//    {
//        $post = post:: onlyTrashed()->where('id',7)->forceDelete();
//    }
//
//    public function postfind()
//    {
//        $post = post::all();
//        return $post;
//    }
}
