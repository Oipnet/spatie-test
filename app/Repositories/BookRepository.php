<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:06
 */

namespace App\Repositories;


use App\Contracts\BookRepositoryContract;
use App\Models\Book;
use App\Models\Model;

class BookRepository extends BaseRepository implements BookRepositoryContract
{
    function model(): string
    {
        return Book::class;
    }
}