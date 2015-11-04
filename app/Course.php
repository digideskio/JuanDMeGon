<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = ['title', 'description', 'image', 'link', 'person_id'];
	protected $guarded = ['id'];

	public function person()
	{
		$this->belongsTo('Portfolio\Person');
	}
}