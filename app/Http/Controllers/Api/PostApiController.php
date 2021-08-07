<?php

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Services\CreatePostService;

class PostApiController extends Controller {
    public function create(
        CreatePostRequest $request,
        CreatePostService $createPostService
    ) {
        $post = $createPostService->handle($request->all());

        return response([
            'data' => $post
        ], 200);
    }
}
