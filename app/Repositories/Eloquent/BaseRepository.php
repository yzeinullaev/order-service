<?php

namespace App\Repositories\Eloquent;

use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository implements IBaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @return Model|null
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @param $columns
     * @return Model
     */
    public function findOrNew($id, $columns = ['*']): Model
    {
        return $this->model->findOrNew($id, $columns);
    }

    /**
     * @param array $attributes
     * @param array $values
     * @return Model
     */
    public function firstOrCreate(array $attributes = [], array $values = []): Model
    {
        return $this->model->firstOrCreate($attributes, $values);
    }

    /**
     * @param array $columns
     * @return Model|ModelNotFoundException
     */
    public function firstOrFail(array $columns = ['*']): Model|ModelNotFoundException
    {
        return $this->model->firstOrFail($columns);
    }

    /**
     * @param array $columns
     * @param Closure|null $callback
     * @return Model|Closure
     */
    public function firstOr(array $columns = ['*'], Closure $callback = null): Model|Closure
    {
        return $this->model->firstOr($columns, $callback);
    }

    /**
     * @param array $condition
     * @return Collection
     */
    public function get(array $condition = []): Collection
    {
        return $this->model->where($condition)->get();
    }

    /**
     * @param array $condition
     * @return bool
     */
    public function exists(array $condition): bool
    {
        return $this->model->where($condition)->exists();
    }

    /**
     * @param int $id
     * @param array $requestData
     * @return mixed
     */
    public function update(int $id, array $requestData)
    {
        return $this->model->whereId($id)->update($requestData);
    }
}
