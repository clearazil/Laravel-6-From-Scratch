<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello first blog bla bla',
            'my-second-post' => 'Hello second post bla',
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view('post.show', [
            'post' => $posts[$post],
        ]);
    }
}
