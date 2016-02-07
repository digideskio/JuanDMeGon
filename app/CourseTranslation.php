<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
