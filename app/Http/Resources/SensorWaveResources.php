<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SensorWaveResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=> $this->id,
            'time'=>$this->time,
            'date'=>$this->date,
            'ketinggian_air'=>$this->ketinggian_air
        ];
    }
    public function with($request){
        return[
            'version'=> '1.0.0',
            'author_url'=> url('http://localhost/nelayan-laravel')
        ];
    }
}
