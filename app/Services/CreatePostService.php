<?php

namespace App\Services;

use App\Models\Post;

class CreatePostService
{
    public function handle($data) {
        $post = Post::create([
            'title' => $data['title'],
            'content' => $data['content']
        ]);

        return $post;
    }
}
