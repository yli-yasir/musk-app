<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class InspectionSiteResource extends JsonResource
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
            'long' => $this->long,
            'lat' => $this->lat,
            'inspectionCount' => $this->inspections_count,
            'interventionCount' => $this->inspections_sum_intervention_count,
            'commendationCount' => $this->inspections_sum_commendation_count,
            'icon' => Storage::url($this->icon),
        ];
    }
}
