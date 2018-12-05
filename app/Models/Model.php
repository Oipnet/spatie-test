<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:09
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\QueryBuilder\Filter;

abstract class Model extends EloquentModel
{
    use SoftDeletes;

    protected $filterable = [];
    protected $sorterable = [];

    /**
     * @return array
     */
    public function getFilterable(): array
    {
        return $this->filterable;
    }

    /**
     * @return array
     */
    public function getSorterable(): array
    {
        return $this->sorterable;
    }

    protected function addCustomFilter($name, $class)
    {
        $this->filterable[] = Filter::custom($name, $class);
    }
}