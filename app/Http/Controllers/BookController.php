<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:00
 */

namespace App\Http\Controllers;


use App\Contracts\BookRepositoryContract;
use App\Resources\Book;
use App\Resources\BookCollection;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    /**
     * @var BookRepositoryContract
     */
    private $repository;

    public function __construct(BookRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $books = $this->repository->all();

        return (new BookCollection($books))->response();
    }

    public function show($id) {
        $book = $this->repository->find($id);

        return (new Book($book))->response();
    }
}