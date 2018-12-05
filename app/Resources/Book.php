<?php
/**
 * Created by PhpStorm.
 * User: arnaud
 * Date: 05/12/18
 * Time: 08:20
 */

namespace App\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->summary
        ];
    }
}