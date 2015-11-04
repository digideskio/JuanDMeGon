<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $fillable = ['name', 'level', 'shortname', 'color', 'person_id'];
	protected $guarded = ['id'];

	public function person()
	{
		$this->belongsTo('Portfolio\Person');
	}
}