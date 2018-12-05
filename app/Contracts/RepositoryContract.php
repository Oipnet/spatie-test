<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 04/12/18
 * Time: 18:05
 */

namespace App\Contracts;


interface RepositoryContract
{
    public function all();
    public function find($id);
}