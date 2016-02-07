<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	use \Dimsav\Translatable\Translatable;

	public $translatedAttributes = ['title', 'description'];
	protected $fillable = ['title', 'description', 'image', 'link', 'person_id'];
	protected $guarded = ['id'];
	protected $with = ['translations'];

	public function person()
	{
		$this->belongsTo('Portfolio\Person');
	}
}