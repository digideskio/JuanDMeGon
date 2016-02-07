<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class JobTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
