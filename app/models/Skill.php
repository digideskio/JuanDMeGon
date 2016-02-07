<?php
	class Skill extends Eloquent
	{
		//public $timestamps = false;
		protected $fillable = array('name', 'level', 'shortname', 'color');
		protected $guarded = array('_id');

		public function setAttributes($name, $level, $shortname, $color)
		{
			$this->_id = sha1($name.$level.$shortname.$color);
			$this->name = $name;
			$this->level = $level;
			$this->shortname = $shortname;
			$this->color = $color;
		}

		/*public function person()
	    {
	        return $this->belongsTo('Person');
	    }*/

	    public function getId()
		{
			return $this->_id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getLevel()
		{
			return $this->level;
		}

		public function getShortname()
		{
			return $this->shortname;
		}

		public function getColor()
		{
			return $this->color;
		}
	}