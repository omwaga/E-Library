<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function level()
    {
    	return $this->belongsTo(EducationLevel::class, 'education_level_id', 'id');
    }
}
