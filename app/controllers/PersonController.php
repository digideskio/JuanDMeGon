<?php
	class PersonController extends BaseController
	{
		public function showPerson($lang = null)
	    {
	    	if($lang != null && ($lang === 'es' || $lang === 'en'))
	    	{
	    		App::setLocale($lang);
	    	}
	        /*
	        |--------------------------------------------
	        |Setting personal properties
	        |--------------------------------------------	        
	        */
	        $me = new Person;
	        $name = 'Juan David Meza González';

	        /*
	        |-----------------------------------------------------
	        |Setting title and description ad multilingual values.
	        |-----------------------------------------------------	        
	        */
	        $title = array
	        (
	        	'en' => 'Systems engineer and informatics',
	        	'es' => 'Ingeniero de Sistemas e Informática'
	        );

	        $description = array
	        (
	        	'en' => 'Lover of programming and web/mobile development. <a href="http://www.programarya.com/" target="_blank">ProgramarYA.com</a> website owner. Addict scholar of technology and web.',
	        	'es' => 'Amante de la programación, y el desarrollo web y móvil. Creador y propietario del sitio <a href="http://www.programarya.com/" target="_blank">ProgramarYA.com</a>. Adicto estudioso de la tecnología y la web.'
	        );

			$picture = 'img/me.jpg';
			$resume = 'resources/CV.pdf';
			$me->setAttributes($name, $title, $description, $picture, $resume);
			//$me->save();

			/*
	        |--------------------------------------------
	        |Setting social networks
	        |--------------------------------------------
	        */
			$facebook = SocialNetwork::getFacebook('Como.Aprender.A.Programar');
			$twitter = SocialNetwork::getTwitter('JuanDMeGon');
			$linkedin = SocialNetwork::getLinkedIn('juan-david-meza-gonzález/55/558/407');
			$github = SocialNetwork::getGitHub('JuanDMeGon');
			$youtube = SocialNetwork::getYouTube('UC9yijqf0bO1NjIGUQ-dkBvg');
			//$me->socialnetworks()->saveMany(array($github, $facebook, $twitter, $linkedin, $youtube));
			//$me->socialnetworks()->save($youtube);
			$me->socialnetworks = array($github, $facebook, $twitter, $linkedin, $youtube);

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
			$html5->setAttributes('HTML5', 98, 'Web', '#AD49F0');
			$css3->setAttributes('CSS3', 95, 'CSS', '#F04949');
			$jquery->setAttributes('jQuery', 90, 'JQ', '#49ADF0');
			$javascript->setAttributes('JavaScript', 85, 'JS', '#F0C149');
			$php->setAttributes('PHP', 95, 'PHP', '#85F049');
			$seo->setAttributes('Search Engine Optimization', 95, 'SEO', '#C149F0');
			$webservices->setAttributes('Web Services', 85, 'WS', '#49F0D5');
			$ee->setAttributes('Java EE', 80, 'EE', '#788F1B');
			$sw->setAttributes('Semantic web', 85, 'SW', '#FFA300');
			$android->setAttributes('Android', 80, 'A', '#4950F0');
			$jsp->setAttributes('Java Server Pages', 80, 'JSP', '#F0498C');
			$db->setAttributes('MySQL, Oracle, MongoDB', 95, 'DB', '#E2DA10');
			$xml->setAttributes('XML', 90, 'XML', '#B4001D');
			$git->setAttributes('Git', 90, 'git', '#AD49F0');
			$laravel->setAttributes('Laravel', 85, 'L', '#4950F0');
			//$me->skills()->save($git);
			//$me->skills()->saveMany(array($git, $laravel));
			//$me->skills()->saveMany(array($html5, $css3, $jquery, $javascript, $php, $git, $laravel, $seo, $webservices, $ee, $sw, $android, $jsp, $db, $xml));
			$me->skills = array($html5, $css3, $jquery, $javascript, $php, $git, $laravel, $seo, $webservices, $ee, $sw, $android, $jsp, $db, $xml);


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
	        $aap->setAttributes('AprenderAProgramar.com.co',
	        	array
	        	(
	        		'en' => 'Website for teaching programming. Created using HTML5, CSS3, jQuery and responsive design for the frontend and PHP for the backend; friendly URLs and MVC architecture.',
	        		'es' => 'Sitio web para enseñar a programar. Fue creado usando HTML5, CSS3, jQuery y un diseño adaptativo para la interfaz de usuario y PHP para el lado sel servidor; URLs amigables y arquitectura MVC.'
	        	), 'img/aap.png', 'http://www.aprenderaprogramar.com.co');

	        $sofing->setAttributes('SofIng: Learning Object Repository',
	        	array
	        	(
	        		'en' => 'Web application for manage semantic learning objects inside a repository. Created using HTML, CSS and jQuery for the frontend and JSP - MySQL for the backend.',
	        		'es' => 'Aplicación web para la gestión de objetos de aprendizaje semánticos al interior de un repositorio. Creada usando HTML, CSS y jQuery para la interfaz y JSP con MySQL para el lado del servidor.'
	        	), 'img/sofing.png', '#');

	        $slo4dtv->setAttributes('SLO4DTV: Semantic Learning Objects for Digital TV',
	        	array
	        	(
	        		'en' => 'Web application for create and manage semantic learning objects for digital TV. Created using HTML5, CSS3 and jQuery for the frontend and PHP, MySQL, OWL, Wen Services for the backend.',
	        		'es' => 'Aplicación web para crear y gestionar objetos de aprendizaje semanticos para televisión digital. Creada usando HTML5, CSS3 y jQuery en el lado del cliente y PHP, MySQL, OWL y servicios web para el lado del servidor.'
	        	), 'img/slo4dtv.png', 'http://gruposintelweb.tk/DTVProject/');

	        $fc->setAttributes('Fundación compasión (Proposal)',
	        	array
	        	(
	        		'en' => 'Website prototype created to fundación compasión. Created using HTML5, CSS3.',
	        		'es' => 'Protipo de un sitio web, creado para Fundación Compasión. CReado con HTML5 y CSS3.'
	        	), 'img/fc.png', '#');

	        $pg->setAttributes('Public GYM',
	        	array
	        	(
	        		'en' => 'Website to teach people, how to use public gyms on the city. Created using HTML5, CSS3, jQuery and plugins for the frontend and Laravel on the backend.',
	        		'es' => 'Sitio web para enseñar a las personas cómo utilizar los gimnasios públicos de la ciudad. Creado usando HTML5, CSS3 y jQuery con algunos complementos en el lado del cliente y con Laravel en el lado del servidor.'
	        	), 'img/pg.png', 'http://publicgym.tk');
	        
	        $py->setAttributes('ProgramarYA.com',
	        	array
	        	(
	        		'en' => 'Improved version of aprenderaprogramar.com.co. Implemented in a new domain with a new appearence and new functionalities.',
	        		'es' => 'Versión mejorada de aprenderaprogramar.com.co. Con implementaciones de un nuevo dominio con una nueva imágen, junto con nuevas funcionalidades.'
	        	), 'img/progya.png', 'http://www.programarya.com');
	        //$me->works()->saveMany(array($py, $pg, $slo4dtv, $aap, $sofing, $fc));
	        //$me->works()->save($py);
	        $me->works = array($py, $pg, $slo4dtv, $aap, $sofing, $fc);
	        
	        /*
	        |--------------------------------------------
	        |Seting personal courses
	        |--------------------------------------------	        
	        */
	        $javaApi = new Course();
	        $laravelApi = new Course();
	        $laravelApiEng = new Course();
	        $javaApi->setAttributes('Sólo $9 USD. Servicios Web o API RESTful Desde Cero con Java y Apache Tomcat',
	        	array
	        	(
	        		'en' => 'Web services development using complex types, JSON, XML and TXT. Using tird party web services (Facebook, Youtube, etc).',
	        		'es' => 'Desarrollo de servicios web con datos complejos, JSON, XML y TXT. Uso de servicios de terceros (Facebook, YouTube, etc).'
	        	), 'img/apijava.png', 'https://www.udemy.com/servicios-o-api-restful-desde-cero-con-java-apache-tomcat-json-y-xml/?couponCode=portfolio');

	        $laravelApi->setAttributes('Sólo $9 USD. Laravel 5. PHP ágil y práctico. Crea tu API RESTful',
	        	array
	        	(
	        		'en' => 'Develop your API in local (with Apache), publish it in a Linux VPS (with Nginx) using Github, composer, PHP and MySQL.',
	        		'es' => 'Desarrolla tu API en local (Apache), llévala a producción en un VPS Linux (Nginx) con Github, Composer, PHP y MySQL'
	        	), 'img/laravel.jpg', 'https://www.udemy.com/api-restful-con-laravel-5-composer-apache-nginx-mysql-git-y-github/?couponCode=portfolio');
	        $laravelApiEng->setAttributes('Only $9 USD.  Laravel 5. Agile and practical PHP. Your own RESTful API.',
	        	array
	        	(
	        		'en' => 'Develop your API in local (with Apache), publish it in a Linux VPS (with Nginx) using Github, composer, PHP and MySQL.',
	        		'es' => 'Desarrolla tu API en local (Apache), llévala a producción en un VPS Linux (Nginx) con Github, Composer, PHP y MySQL'
	        	), 'img/laravel.jpg', 'https://www.udemy.com/laravel-5-php-framework-agile-and-practical-php-restful-api/?couponCode=portfolio');
	        //$me->courses()->saveMany(array($laravelApiEng, $javaApi, $laravelApi));
	        //$me->works()->save($py);
	        $me->courses = array($laravelApiEng, $javaApi, $laravelApi);



			/*
	        |--------------------------------------------
	        |Obtaining info from database (mongo)
	        |--------------------------------------------	        
	        */
	        //$me = Person::remember(60*24*30)->first();//Caching query results for 30 days
	        //$me = Person::first();

	        /*
	        |----------------------------------------------------
	        |Assigning all person info to the view (Person.index)
	        |----------------------------------------------------
	        */
	        
	        return View::make('index',array('person' => $me, 'message' => Session::get('message')));
	    }

	    public function change($lang)
	    {
	    	$language = 'en'; //Is stablished the default value

	    	//Obtaining the colon separated lang values (stablished in .env.*.php file)
			$supportedLanguages = strtolower(getenv('languages') ?: $language);//If is not stablished then will be the default
			$supportedLanguages = explode(',', $supportedLanguages); //Exploding by colon the values

			//If the received language is in the supported languages
			//This is good for fake values, and avoid possible risks
			if(in_array($lang, $supportedLanguages))
			{
				//If is stablished
				$language = $lang;
			} 

			return Redirect::to("/$language");//Redirect to root, sending the language
	    }
	}