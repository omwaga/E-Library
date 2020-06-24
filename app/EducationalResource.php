<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalResource extends Model
{
    protected $guarded = [];

    public function class()
    {
    	return $this->belongsTo(EducationClass::Class, 'education_class_id', 'id');
    }

    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }
}
