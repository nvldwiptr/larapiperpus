<?php

namespace App\Http\Resources\Master\Gender;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GenderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'  => $this->collection->transform(function($gender) {
                return [
                    'id'    => $gender->id,
                    'name'  => $gender->name
                ];
            })
        ];
    }
}
