<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function listPosts()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function createSamplePost()
    {
        $post = Post::create([
            'title' => 'Sample Post ' . now(),
            'content' => 'This is a sample post created at ' . now(),
        ]);

        return redirect('/posts')->with('success', 'Sample post created!');
    }
}
