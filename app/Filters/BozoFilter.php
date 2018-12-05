<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 05/12/18
 * Time: 08:49
 */

namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class BozoFilter implements Filter
{

    public function __invoke(Builder $query, $value, string $property): Builder
    {
        return $query->where('id', 1);
    }
}