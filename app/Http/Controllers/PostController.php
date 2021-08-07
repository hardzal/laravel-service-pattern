<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use App\Services\CreatePostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(
        CreatePostRequest $request,
        CreatePostService $createPostService
    )
    {
        $post = $createPostService->handle($request->all());

        return redirect()->back()->withSuccess('Berhasil membuat post');
    }
}
