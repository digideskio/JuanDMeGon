<?php 

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
	protected $fillable = ['name', 'link', 'icon', 'person_id'];
	protected $guarded = ['id'];

	public function person()
	{
		$this->belongsTo('Portfolio\Person');
	}
}