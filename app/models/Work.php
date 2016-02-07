<?php
	class Work extends Eloquent
	{
		//public $timestamps = false;
		protected $fillable = array('title', 'description', 'image', 'link');
		protected $guarded = array('id');

		public function setAttributes($title, $description, $image, $link)
		{
			$this->id = sha1($title.$image.$link);
			$this->title = $title;
			$this->description = $description;
			$this->image = $image;
			$this->link = $link;
		}

		/*public function person()
	    {
	        return $this->belongsTo('Person');
	    }*/

	    public function getId()
		{
			return $this->id;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function getDescription()
		{
			//Returning description according with the language			
			$language = App::getLocale();//Language is obtained
			return $this->description[$language];
		}

		public function getImage()
		{
			return $this->image;
		}

		public function getLink()
		{
			return $this->link;
		}
	}