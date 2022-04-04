<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionSection extends Model
{
    use HasFactory;

    public function subsections()
    {
        return $this->hasMany(InspectionSubsection::class);
    }
}
