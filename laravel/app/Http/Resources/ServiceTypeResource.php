<?php

namespace App\Http\Resources;

use App\Http\Resources\SpeedResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceTypeResource extends JsonResource
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
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'speeds' => SpeedResource::collection($this->whenLoaded('speeds')),
            'speeds_count' => $this->whenLoaded('speeds', function(){
                return $this->speeds->count();
            }),
        ];
    }
}
