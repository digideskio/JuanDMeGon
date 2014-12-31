<?php
	class Person extends Moloquent
	{
		//public $timestamps = false;
		protected $fillable = array('name', 'title', 'description', 'picture', 'resume');
		protected $guarded = array('_id');

		public function setAttributes($name, $title, $description, $picture, $resume)
		{
			$this->_id = sha1($name.$title.$description.$picture.$resume);
			$this->name = $name;
			$this->title = $title;
			$this->description = $description;
			$this->picture = $picture;
			$this->resume = $resume;
		}

		public function socialnetworks()
	    {
	        return $this->embedsMany('SocialNetwork');
	    }

	    public function skills()
	    {
	        return $this->embedsMany('Skill');
	    }

	    public function works()
	    {
	        return $this->embedsMany('Work');
	    }

		public function getId()
		{
			return $this->_id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function getPicture()
		{
			return $this->picture;
		}

		public function getResume()
		{
			return $this->resume;
		}
	}