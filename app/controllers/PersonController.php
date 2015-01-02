<?php
	class PersonController extends \BaseController
	{
		public function showPerson()
	    {
	        /*
	        |--------------------------------------------
	        |Setting personal properties
	        |--------------------------------------------	        
	        */
	        $me = new Person;
	        $name = 'Juan David Meza González';
	        $title = 'Systems engineer and informatics';
	        $description = 'Lover of programming and web/mobile development. www.AprenderAProgramar.com.co website owner. Addict scholar of technology and web.';
			$picture = 'img/me.jpg';
			$resume = 'resources/CV.pdf';
			$me->setAttributes($name, $title, $description, $picture, $resume);
			//$me->save();

			/*
	        |--------------------------------------------
	        |Setting social networks
	        |--------------------------------------------	        |
	        */
			$facebook = SocialNetwork::getFacebook('Como.Aprender.A.Programar');
			$twitter = SocialNetwork::getTwitter('JuanDMeGon');
			$linkedin = SocialNetwork::getLinkedIn('juan-david-meza-gonzález/55/558/407');
			$github = SocialNetwork::getGitHub('JuanDMeGon');
			$youtube = SocialNetwork::getYouTube('UC9yijqf0bO1NjIGUQ-dkBvg');
			//$me->socialnetworks()->saveMany(array($facebook, $twitter, $linkedin));
			//$me->socialnetworks()->save($youtube);

			/*
	        |--------------------------------------------
	        |Setting personal skills
	        |--------------------------------------------	        
	        */
			$html5 = new Skill();
			$css3 = new Skill();
			$jquery = new Skill();
			$javascript = new Skill();
			$php = new Skill();
			$seo = new Skill();
			$webservices = new Skill();
			$ee = new Skill();
			$sw = new Skill();
			$android = new Skill();
			$jsp = new Skill();
			$db = new Skill();
			$xml = new Skill();
			$git = new Skill();
			$laravel = new Skill();
			$html5->setAttributes('HTML5', 95, 'Web', '#AD49F0');
			$css3->setAttributes('CSS3', 90, 'CSS', '#F04949');
			$jquery->setAttributes('JQuery', 85, 'JQ', '#49ADF0');
			$javascript->setAttributes('JavaScript', 90, 'JS', '#F0C149');
			$php->setAttributes('PHP', 95, 'PHP', '#85F049');
			$seo->setAttributes('Search Engine Optimization', 95, 'SEO', '#C149F0');
			$webservices->setAttributes('Web Services', 85, 'WS', '#49F0D5');
			$ee->setAttributes('Java EE', 75, 'EE', '#788F1B');
			$sw->setAttributes('Semantic web', 85, 'SW', '#FFA300');
			$android->setAttributes('Android', 80, 'A', '#4950F0');
			$jsp->setAttributes('Java Server Pages', 85, 'JSP', '#F0498C');
			$db->setAttributes('MySQL, Oracle, MongoDB', 95, 'DB', '#E2DA10');
			$xml->setAttributes('XML', 90, 'XML', '#B4001D');
			$git->setAttributes('Git', 80, 'git', '#AD49F0');
			$laravel->setAttributes('Laravel', 85, 'L', '#4950F0');
			//$me->skills()->save($git);
			//$me->skills()->saveMany(array($git, $laravel));
			//$me->skills()->saveMany(array($html5, $css3, $jquery, $javascript, $php, $seo, $webservices, $ee, $sw, $android, $jsp, $db, $xml, $git, $laravel));


			/*
	        |--------------------------------------------
	        |Seting personal works
	        |--------------------------------------------	        
	        */
	        $aap = new Work();
	        $sofing = new Work();
	        $slo4dtv = new Work();
	        $fc = new Work();
	        $pg = new Work();
	        $py = new Work();
	        $aap->setAttributes('AprenderAProgramar.com.co', 'Website for teaching programming. Created using HTML5, CSS3, JQuery and responsive design for the frontend and PHP for the backend; friendly URLs, MVC...', 'img/aap.png');
	        $sofing->setAttributes('SofIng: Learning Object Repository', 'Web application for manage learning objects inside a repository. Created using HTML, CSS and JQuery for the frontend and JSP - MySQL for the backend.', 'img/sofing.png');
	        $slo4dtv->setAttributes('SLO4DTV: Semantic Learning Objects for Digital TV', 'Web application for create and manage semantic learning objects for digital TV. Created using HTML5, CSS3 and JQuery for the frontend and PHP - MySQL - OWL - WS for the backend.', 'img/slo4dtv.png');
	        $fc->setAttributes('Fundación compasión (Proposal)', 'Website prototype created to fundación compasión. Created using HTML5, CSS3.', 'img/fc.png');
	        $pg->setAttributes('Public GYM', 'Website to teach people, how to use public gyms on the city. Created using HTML5, CSS3, jQuery and plugins.', 'img/pg.png');
	        $py->setAttributes('ProgramarYA.com', 'Updated Website to teaching programming to visitors. Created using HTML5, CSS3, JQuery and responsive design for the frontend and PHP for the backend; friendly URLs, MVC...', 'img/progya.png');
	        //$me->works()->saveMany(array($aap, $sofing, $slo4dtv, $fc, $pg, $py));
	        //$me->works()->save($py);



			/*
	        |--------------------------------------------
	        |Obtaining info from database (mongo)
	        |--------------------------------------------	        
	        */
	        $me = Person::remember(60*24*30)->first();//Caching query results for 30 days
	        //$me = Person::first();

	        /*
	        |----------------------------------------------------
	        |Assigning all person info to the view (Person.index)
	        |----------------------------------------------------
	        */
	        
	        return View::make('index',array('person' => $me, 'message' => Session::get('message')));
	    }
	}