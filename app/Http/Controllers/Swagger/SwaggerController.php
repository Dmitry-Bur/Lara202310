<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 *
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="",type="array", @OA\Items(
 *                         @OA\Property(property="title", type="string"),
 *                         @OA\Property(property="description", type="string"),
 *                         @OA\Property(property="category_id", type="integer"),
 *                     )),
 *             example={
 *             {
 *                 {
 *                      "title": "Some title",
 *                      "description": "Some description",
 *                      "category_id": "1"
 *                 },
 *                 {
 *                      "title": "Another title",
 *                      "description": "Another description",
 *                      "category_id": "2"
 *                 }
 *
 *             }}
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response="200",
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="object",

 *             ),
 *             example={
 *                 "message": "ok"
 *             }
 *         )
 *     ),
 *
 * ),
 *
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список постов",
 *     tags={"Post"},
 *
 *     @OA\Response(
 *         response="200",
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="description", type="text", example="Some title"),
 *                 @OA\Property(property="category", type="string", example="Some category"),
 *             )
 *             ),
 *         )
 *     ),
 *
 * ),
 *
 *
 *
 */

class SwaggerController extends Controller
{
    //
}
