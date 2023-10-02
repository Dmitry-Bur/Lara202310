<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\CategoriesResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
   public function index()
   {
       //Если есть в кеше категории берем, иначе берем из базы и так же кидаем в кеш навсегда
      $categories = Cache::rememberForever('categories:all', function () {
           return Category::all();
       });

      return CategoriesResource::collection($categories);
   }
}
