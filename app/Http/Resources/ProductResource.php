<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'compare_price' => $this->compare_price,
            'charge_tax' => $this->charge_tax,
            'sale_channel' => $this->sale_channel,
            'vendor' => $this->vendor,
            'tags' => $this->tags,
            'images' => $this->images,
            'error' => $this->error,
        ];
    }
}
