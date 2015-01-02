<?php
	class SocialNetwork extends Moloquent
	{
		//public $timestamps = false;
		protected $fillable = array('name', 'link', 'icon');
		protected $guarded = array('_id');

		public function setAttributes($name, $link, $icon)
		{
			$this->_id = sha1($name.$link.$icon);
			$this->name = $name;
			$this->link = $link;
			$this->icon = $icon;
		}

		/*public function person()
	    {
	        return $this->belongsTo('Person');
	    }*/

		public static function getFacebook($link)
		{
			$sn = new SocialNetwork;
			$sn->setAttributes('Facebook',"https://www.facebook.com/$link",'img/fb.png');
			return $sn;
		}

		public static function getTwitter($link)
		{
			$sn = new SocialNetwork;
			$sn->setAttributes('Twitter',"https://twitter.com/$link",'img/tw.png');
			return $sn;
		}

		public static function getLinkedIn($link)
		{
			$sn = new SocialNetwork;
			$sn->setAttributes('LinkedIn',"https://www.linkedin.com/pub/$link",'img/in.png');
			return $sn;
		}

		public static function getGitHub($link)
		{
			$sn = new SocialNetwork;
			$sn->setAttributes('GitHub',"https://github.com/$link",'img/gh.png');
			return $sn;
		}

		public static function getYouTube($link)
		{
			$sn = new SocialNetwork;
			$sn->setAttributes('YouTube',"https://www.youtube.com/channel/$link",'img/yt.png');
			return $sn;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getLink()
		{
			return $this->link;
		}

		public function getIcon()
		{
			return $this->icon;
		}
	}