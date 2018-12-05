<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 05/12/18
 * Time: 08:29
 */

namespace App\Resources;


use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => $request->fullUrl()
            ]
        ];
    }
}