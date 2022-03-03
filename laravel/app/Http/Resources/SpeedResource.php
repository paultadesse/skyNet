<?php

namespace App\Http\Resources;

use App\Http\Resources\ServiceTypeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SpeedResource extends JsonResource
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
            'id' => $this->id,
            'speed' => $this->speed,
            'birr' => $this->birr,
            'service_type' => ServiceTypeResource::make($this->whenLoaded('serviceType')),
        ];
    }
}
