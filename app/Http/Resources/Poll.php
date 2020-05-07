<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Poll extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'poll title' => mb_strimwidth($this->title, 0, 10, '...'),
            'questions' => $this->questions,
        ];
        // return parent::toArray($request);
    }
}
