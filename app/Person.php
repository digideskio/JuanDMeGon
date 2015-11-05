<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	use \Dimsav\Translatable\Translatable;

	public $translatedAttributes = ['name', 'title', 'description'];
	protected $fillable = ['name', 'title', 'description', 'picture', 'resume'];
	protected $guarded = ['id'];

	public function skills()
	{
		return $this->hasMany('Portfolio\Skill');
	}

	public function jobs()
	{
		return $this->hasMany('Portfolio\Job');
	}

	public function courses()
	{
		return $this->hasMany('Portfolio\Course');
	}

	public function socialNetworks()
	{
		return $this->hasMany('Portfolio\SocialNetwork');
	}
}