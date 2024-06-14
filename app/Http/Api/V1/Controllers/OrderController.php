<?php

namespace App\Http\Api\V1\Controllers;

use App\Http\Api\V1\Requests\UserOrderRequest;
use App\Http\Controllers\Controller;
use App\Services\OrderService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

/**
 * Контроллер заказов
 */
class OrderController extends Controller
{
    private OrderService $service;

    public function __construct(OrderService $service) {
        $this->service = $service;
    }

    /**
     * @OA\Get(
     *      operationId="getUserOrderId",
     *      path="/v1/user/order",
     *      tags={"user order v1"},
     *      summary="Получения данных о заказах пользователя",
     *      description="Получения данных о заказах пользователя",
     *      security={{ "bearerAuth":{} }},
     *      @OA\Parameter(
     *      name="order_id", in="path",required=true, @OA\Schema(type="integer", example=7777)
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="success",
     *                  title="Статус",
     *                  type="boolean",
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  title="Сообщение",
     *                  type="string",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  title="Data",
     *                  type="array",
     *                  @OA\Items(
     *                      @OA\Property(
     *                          property="response",
     *                          title="response",
     *                          type="array",
     *                          @OA\Items(),
     *                      ),
     *                      @OA\Property(
     *                          property="error",
     *                          title="error",
     *                          type="string",
     *                      ),
     *                      @OA\Property(
     *                          property="status_code",
     *                          title="status_code",
     *                          type="integer",
     *                      )
     *                  )
     *              ),
     *          ),
     *      ),
     *     @OA\Response(
     *         response="401",
     *         description="Full authentication is required to access this resource",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *     @OA\Response(
     *         response="500",
     *         description="Uncaught ErrorException: Attempt to read property ______",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *  )
     *
     * @param UserOrderRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function getUserOrder(UserOrderRequest $request): JsonResponse
    {
        $userId = Auth::user()->id;
        $params = $request->validated();

        return $this->response($this->service->getDetailsByUser($userId, $params));
    }


}

