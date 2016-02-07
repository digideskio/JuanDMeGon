<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class PersonTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'title', 'description'];
}
