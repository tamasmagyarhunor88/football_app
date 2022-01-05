<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PlayerResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'team_id' => $this->team_id,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->birth_place,
            'height' => $this->height,
            'weight' => $this->weight,
            'postition' => $this->postition,
            'total_goals' => $this->total_goals,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
    ];
    }
}
