<?php
	class Work extends Moloquent
	{
		//public $timestamps = false;
		protected $fillable = array('title', 'description', 'image');
		protected $guarded = array('_id');

		public function setAttributes($title, $description, $image)
		{
			$this->_id = sha1($title.$description.$image);
			$this->title = $title;
			$this->description = $description;
			$this->image = $image;
		}

		/*public function person()
	    {
	        return $this->belongsTo('Person');
	    }*/

	    public function getId()
		{
			return $this->_id;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function getImage()
		{
			return $this->image;
		}
	}