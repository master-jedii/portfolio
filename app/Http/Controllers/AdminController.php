<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        // $blogs = DB::table('blogs')->paginate(5); /// อันนี้คือ Query builder คือการใช้ อ้างอิงไปยังฐานข้อมูลเพื่อแสดผลข้อมูล
        $blogs = Blog::paginate(5);  /// อันนี้คือ Eloquent คือการใช้ Model มาแสดงผลข้อมูล แทนการ Query builder [ORM]
        return view('blog',compact('blogs'));
    }

    function about(){
        $name = "Bass";
        $date = "13 sep 2002";
        return view('about',compact('name','date'));
    }

    function create(){
        return view('form');
    }

    function welcome(){
        return view('welcome');
    }

    function insert(Request $request){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required'
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        Blog::insert($data);
        return redirect('/admin/blog');
    }

    function delete($id){
        Blog::find($id)->delete();
        return redirect()->back();
    }

    function change($id){
        $blog=Blog::find($id);
        $data=[
            'status'=>!$blog->status
        ];
        $blog=Blog::find($id)->update($data);
        return redirect()->back();
    }

    function edit($id){
        $blog=Blog::find($id);
        return view('edit',compact('blog'));
    }

    function update(Request $request,$id){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required'
        ]);
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        Blog::find($id)->update($data);
        return redirect('/admin/blog');
    }
}
