<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name "=> $this->name,
            "price"=> $this->price,
            "quantity"=> $this->quantity,
            "image"=> $this->image,
            "category_name"=> $this->category_id->name,
        ];
    }
}
