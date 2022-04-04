<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class InspectionResource extends JsonResource
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
            'inspectionSiteId' => $this->inspection_site_id,
            'interventionCount' => $this->intervention_count,
            'commendationCount' => $this->commendation_count,
            'reportFile' => Storage::url($this->report_file),
            'date' => $this->created_at
        ];
    }
}
