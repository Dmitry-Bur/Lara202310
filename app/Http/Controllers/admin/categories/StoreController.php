<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController extends Controller
{
   public function index(StoreRequest $request)
   {
      $category = $request->validated();

       // при создании кидаем в кеш новвую созданную категорию
       $category = Category::create($category);
       Cache::put('categories:' . $category->id ,$category);


      return response([
          "message" => 'ok'
      ]);
   }
}
