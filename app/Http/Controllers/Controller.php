<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="0.0.1",
 *      title="Order Service (API)",
 *      description="<b>Описание:</b>",
 * )
 *
 * @OA\Tag(
 *     name="Orders",
 *     description="API Endpoints of Orders"
 * )
 * @OA\SecurityScheme(
 *   type="http",
 *   description="Authorization token",
 *   scheme="bearer",
 *   bearerFormat="JWT",
 *   securityScheme="bearerAuth",
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ResponseTrait;
}
