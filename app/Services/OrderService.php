<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\PaginationEnum;
use App\Repositories\OrderRepository;

class OrderService
{
    private OrderRepository $repository;

    public function __construct(OrderRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * @param int $user_id
     * @param array $params
     * @return array
     */
    public function getDetailsByUser(int $user_id, array $params): array
    {
        return $this->repository->getOrderListByUser($user_id, $params['page'] ?? 0);
    }
}
