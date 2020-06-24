<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationClass extends Model
{
    protected $guarded = [];

    // relationships to the subjects
    public function subjects()
    {
    	return $this->hasMany('Subject::class');
    }
}
