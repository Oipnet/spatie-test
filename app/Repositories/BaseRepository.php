<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:07
 */

namespace App\Repositories;

use App\Models\Model;
use Illuminate\Contracts\Container\Container;
use Spatie\QueryBuilder\QueryBuilder;

abstract class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;
    protected $allowedFilters = [];
    protected $allowedIncludes = [];
    protected $allowedSorts = [];

    public function __construct(Container $container)
    {
        $this->model = $container->make($this->model());
        $this->queryBuilder = QueryBuilder::for($this->model())
            ->allowedFilters($this->getAllowedFilters())
            ->allowedIncludes($this->getAllowedIncludes())
            ->allowedSorts($this->getAllowedSorts());
    }

    abstract function model(): string;

    private function getAllowedFilters()
    {
        $filters = $this->allowedFilters;

        return array_merge($filters, $this->model->getFilterable());
    }

    private function getAllowedIncludes()
    {
        return $this->allowedIncludes;
    }

    private function getAllowedSorts()
    {
        $sorts = $this->allowedSorts;

        return array_merge($sorts, $this->model->getSorterable());
    }

    public function all()
    {
        return $this->queryBuilder->paginate(config('paginate.item_per_page'));
    }

    public function find($id)
    {
        return $this->queryBuilder->find($id);
    }
}