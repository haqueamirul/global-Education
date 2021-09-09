<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blogPosts;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.add_post');
    }

    public function allPosts()
    {
    	$blogosts = blogPosts::all();
    	return view('backend.all_post', compact('blogosts'));
    }

    public function StorPosts(Request $request)
    {
    	// print_r($request->all());

		$title = $request->title;
        $description = $request->description;
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $post = new blogPosts();
        $post->title=$title;
        $post->description=$description;
        $post->post_image=$imageName;
        $post->save();
        return redirect()->route('addPost')->with('post_created', 'Post has been created successfully');

    }

    public function editPosts($id)
    {
    	$editpost = blogPosts::find($id);
    	return view('backend.edit_post', compact('editpost'));
    }

    public function updatePost(Request $request)
    {
    	$title = $request->title;
        $description = $request->description;
    	$image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $post = blogPosts::find($request->id);
        $post->title=$title;
        $post->description=$description;
        $post->post_image=$imageName;
        $post->save();
        return redirect()->route('allPost')->with('post_created', 'Post has been created successfully');
    }

    public function DeletePost($id)
    {
    	$deletepost = blogPosts::find($id);
    	$deletepost->delete();
    	return redirect()->route('allPost')->with('post_created', 'Post has been created successfully');
    }

}
