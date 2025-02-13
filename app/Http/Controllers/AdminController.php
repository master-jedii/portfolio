<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){
        $blogs = DB::table('blogs')->get();
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

    function insert(Request $request){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required'
        ]);
    }
}
