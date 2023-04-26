<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'food_id'=>$this->food_id,
            'type'=>$this->type,
            'first_price'=>$this->first_price,
            'last_price'=>$this->last_price,
            'name'=>$this->name,
            'id_shop'=>$this->id_shop,
        ];
    }
}
