<?php

namespace App\Http\Controllers\admin\posts;

use App\Http\Controllers\Controller;

use App\Http\Resources\PostsResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {

        //Если есть в кеше посты берем, иначе берем из базы и так же кидаем в кеш
        $posts = Cache::rememberForever('posts:all', function () {
            return Post::all();
        });

        return PostsResource::collection($posts);
    }
}
