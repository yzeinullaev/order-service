<?php

namespace App\Repositories;

use App\Enums\PaginationEnum;
use App\Models\Orders;
use App\Repositories\Eloquent\BaseRepository;

class OrderRepository extends BaseRepository
{
    public function __construct(Orders $model)
    {
        $this->model = $model;
    }

    public function getOrderListByUser(int $userId, int $paginate = PaginationEnum::DEFAULT_PAGE)
    {
        return $this->model->where('user_id', $userId)->paginate($paginate)->toArray();
    }
}
