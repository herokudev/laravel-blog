<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $fields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $fields['title'] = strip_tags($fields['title']);
        $fields['body'] = strip_tags($fields['body']);
        $fields['id_user'] = auth()->id();

        Post::create($fields);
        return redirect('/');
    }
}
