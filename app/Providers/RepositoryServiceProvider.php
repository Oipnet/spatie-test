<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:13
 */

namespace App\Providers;


use App\Contracts\BookRepositoryContract;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Spatie\QueryBuilder\QueryBuilderServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(BookRepositoryContract::class, function(Container $app) {
            return new BookRepository($app);
        });
    }
}