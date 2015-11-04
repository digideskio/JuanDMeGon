<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = ['name', 'title', 'description', 'picture', 'resume'];
	protected $guarded = ['id'];

	public function skills()
	{
		return $this->hasMany('Portfolio\Skill');
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