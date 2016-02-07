<?php
	class Person extends Eloquent
	{
		//public $timestamps = false;
		protected $fillable = array('name', 'title', 'description', 'picture', 'resume');
		protected $guarded = array('id');

		public function setAttributes($name, $title, $description, $picture, $resume)
		{
			$this->id = sha1($name.$picture.$resume);
			$this->name = $name;
			$this->title = $title;
			$this->description = $description;
			$this->picture = $picture;
			$this->resume = $resume;
		}

		public function socialnetworks()
	    {
	        return $this->hasMany('SocialNetwork');
	    }

	    public function skills()
	    {
	        return $this->hasMany('Skill');
	    }

	    public function works()
	    {
	        return $this->hasMany('Work');
	    }

	    public function courses()
	    {
	        return $this->hasMany('Course');
	    }

		public function getId()
		{
			return $this->id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getTitle()
		{
			//Returning title according with the language			
			$language = App::getLocale();//Language is obtained
			return $this->title[$language];
		}

		public function getDescription()
		{
			//Returning description according with the language			
			$language = App::getLocale();//Language is obtained
			return $this->description[$language];
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