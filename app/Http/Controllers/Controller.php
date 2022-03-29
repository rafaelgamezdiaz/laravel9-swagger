<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0",
 *         title="Laravel-Swagger",
 *         description="Demo Api Documentation",
 *     ),
 *     @OA\Server(url="https://myweb.com/api/", description="My web API Server"),
 *     @OA\Server(url="http://127.0.0.1:8000/api/", description="Localhost API Server"),
 *     @OA\Components(@OA\SecurityScheme(securityScheme="bearerAuth", type="http", name="Authorization", in="header", scheme="bearer", bearerFormat="JWT")),
 *     @OA\Tag(name="Auth", description="Autenticación endpoints"),
 *     @OA\Tag(name="Users", description="Users endpoints"),
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
