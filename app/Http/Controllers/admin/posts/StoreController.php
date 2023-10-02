<?php

namespace App\Http\Controllers\admin\posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\posts\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $post = $request->validated();

     // при создании кидаем в кеш новый созданый пост
        $post = Post::create($post);
        Cache::put('posts:' . $post->id ,$post);


        return response([
            "message" => 'ok'
        ]);
    }
}
