<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index',  ['posts' => $posts]);
    }
    public function show()
    {
        $posts = Post::all();
        return view('post.show', ['posts' => $posts]);
    }
    public function create(){
        if(Gate::allows('isAuthor')){
            dd('Author allowed');
        } else{
            dd('You are not an Author');
        }
    }
    public function edit(){
        if(Gate::allows('isAuthor')){
            dd('Author allowed');
        } else{
            dd('You are not an Author');
        }
    }
    public function delete(){
        if(Gate::allows('isAdmin')){
            dd('Admin allowed');
        } else{
            dd('You are not Admin');
        }
    }
    //
}
