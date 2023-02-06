<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"            => $this->id,
            "name"          => $this->name,
            "email"         => $this->email,
            "role"          => $this->role->name,
            "country"       => $this->country->name,
            "calling_code"  => $this->country->calling_code,
            "products"      => ProductResource::collection($this->products)
        ];
    }
}
