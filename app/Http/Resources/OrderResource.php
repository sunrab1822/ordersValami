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
            // "id"=> $request->id,
            // "name "=> $request->name,
            // "price"=> $request->price,
            // "quantity"=> $request->quantity,
            // "image"=> $request->image,
            // "category_name"=> $request->category_id->name,
            "valami" => $request->attributes['id'],
        ];
    }
}
