<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'vehicle';
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "model_name"    => $this->model,
            "rating"        => $this->rating,
            "company"       => $this->whenLoaded('company', $this->company)
        ];
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
