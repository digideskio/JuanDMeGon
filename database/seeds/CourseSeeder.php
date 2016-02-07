<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Portfolio\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $javaApi = new Course;
        $javaApi->image = 'img/apijava.png';
        $javaApi->link = 'https://www.udemy.com/servicios-o-api-restful-desde-cero-con-java-apache-tomcat-json-y-xml/?couponCode=portfolio';
        $javaApi->person_id = 1;
        $javaApi->save();
        
        $javaApi->translateOrNew('en')->title = '(Spanish) Servicios Web o API RESTful Desde Cero con Java y Apache Tomcat';
        $javaApi->translateOrNew('es')->title = 'Servicios Web o API RESTful Desde Cero con Java y Apache Tomcat';

        $javaApi->translateOrNew('en')->description = 'Web services development using complex types, JSON, XML and TXT. Using tird party web services (Facebook, Youtube, etc).';
        $javaApi->translateOrNew('es')->description = 'Desarrollo de servicios web con datos complejos, JSON, XML y TXT. Uso de servicios de terceros (Facebook, YouTube, etc).';
        $javaApi->save();

        /**/

        $laravelApi = new Course;
        $laravelApi->image = 'img/laravel.jpg';
        $laravelApi->link = 'https://www.udemy.com/api-restful-con-laravel-5-composer-apache-nginx-mysql-git-y-github/?couponCode=portfolio';
        $laravelApi->person_id = 1;
        $laravelApi->save();
        

        $laravelApi->translateOrNew('en')->title('(Spanish) Sólo $9 USD. Laravel 5. PHP ágil y práctico. Crea tu API RESTful');
        $laravelApi->translateOrNew('es')->title('Sólo $9 USD. Laravel 5. PHP ágil y práctico. Crea tu API RESTful');

        $laravelApi->translateOrNew('en')->description('Develop your API in local (with Apache), publish it in a Linux VPS (with Nginx) using Github, composer, PHP and MySQL.');
        $laravelApi->translateOrNew('es')->description('Desarrolla tu API en local (Apache), llévala a producción en un VPS Linux (Nginx) con Github, Composer, PHP y MySQL');
        $laravelApi->save();

        /**/

        $laravelApiEng = new Course;
            $laravelApiEng->setAttributes('Only $9 USD.  Laravel 5. Agile and practical PHP. Your own RESTful API.',
                array
                (
                    'en' => 'Develop your API in local (with Apache), publish it in a Linux VPS (with Nginx) using Github, composer, PHP and MySQL.',
                    'es' => 'Desarrolla tu API en local (Apache), llévala a producción en un VPS Linux (Nginx) con Github, Composer, PHP y MySQL'
                ), 'img/laravel.jpg', 'https://www.udemy.com/laravel-5-php-framework-agile-and-practical-php-restful-api/?couponCode=portfolio');


        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
