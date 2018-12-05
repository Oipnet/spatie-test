<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:03
 */

namespace App\Models;


use App\Filters\BozoFilter;
use Spatie\QueryBuilder\Filter;

class Book extends Model
{
    protected $filterable = [
        'title',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->addCustomFilter('bozo', BozoFilter::class);
    }
}