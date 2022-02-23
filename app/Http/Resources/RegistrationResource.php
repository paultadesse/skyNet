<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
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
            'name' =>$this->name ,
            'phone_number' =>$this->phone_number ,
            'email' =>$this->email , 
            'service_type' =>$this->service_type , 
            'desired_speed' =>$this->desired_speed , 
            'site_location' => $this->site_location,
            'site_location_not_listed' => $this->site_location_not_listed ,
            'comment' => $this->comment,
        ];
        // return parent::toArray($request);
    }
}
