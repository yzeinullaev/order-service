<?php

namespace App\Http\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *    type="object",
 *    title="UserOrderRequest",
 *    description="Order status request params",
 *
 *    @OA\Property(
 *      property="user_id",
 *      title="ID пользователя",
 *      type="integer"
 *    ),
 *     @OA\Property(
 *      property="page",
 *      title="Страница",
 *      type="integer"
 *    ),
 *     @OA\Property(
 *      property="limit",
 *      title="Лимит",
 *      type="integer"
 *    ),
 *    example={"user_id": 777, "page": 1, "limit": 0}
 * )
 */
class UserOrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'page' => [
                'integer',
            ],
            'limit' => [
                'integer',
            ]
        ];
    }
}
