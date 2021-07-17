<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index_view ()
    {
        return view('pages.post.post-data', [
            'post' => Post::class
        ]);
    }
}
