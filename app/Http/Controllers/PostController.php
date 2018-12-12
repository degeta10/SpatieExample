<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        if ( Auth::check() ) {
            $posts = Post::all();
            return view('posts.index',compact('posts'));
        } 
    }

    public function create()
    {
        if ( Auth::check() ) {
            return view('posts.create');
        } 
    }

    public function store(Request $request)
    {
        if ( Auth::check() ) {

            $request->validate([
                'title' => 'required|max:255',
                'body' => 'required|max:255',
            ]);

            $post = Post::create([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'form_date' => Carbon::now(),
            ]);

            if($post){
                return redirect()->route('posts.index')
                ->with('success' , 'Post created successfully');
            }
        }
        return back()->withInput()->with('errors', 'Post failed !');
    }

    public function edit()
    {
        if ( Auth::check() ) {
            return view('posts.edit');
        } 
    }

    public function update(Request $request,$id)
    {
        if ( Auth::check() ) {

            $request->validate([
                'title' => 'required|max:255',
                'body' => 'required|max:255',
            ]);

            $post = Post::where('id',$id)->create([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'form_date' => Carbon::now(),
            ]);

            if($post){
                return redirect()->route('posts.index')
                ->with('success' , 'Post updated successfully');
            }
        }
        return back()->withInput()->with('errors', 'Post update failed !'); 
    }

    public function delete($id)
    {
        if ( Auth::check() ) {

            $findResult = Post::where('id','=',$id)->first();
            if ($findResult->delete())
            {
                return redirect()->route('posts.index')
                    ->with('success' , 'Post deleted successfully');
            }
            return back()->withInput()->with('error' , 'Post could not be deleted');
        } 
    }

}
