<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Portfolio\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $me = new Person;

        $me->picture = 'img/me.jpg';
        $me->resume = 'resources/CV.pdf';

        $me->save();

        $me->translateOrNew('en')->name = 'Juan David Meza González';
        $me->translateOrNew('es')->name = 'Juan David Meza González';

        $me->translateOrNew('en')->title = 'Systems and informatic Engineer';
        $me->translateOrNew('es')->title = 'Ingeniero de Sistemas e Informática';

        $me->translateOrNew('en')->title = 'Lover of programming and web/mobile development. <a href="http://www.programarya.com/" target="_blank">ProgramarYA.com</a> website owner. Addict scholar of technology and web.';
        $me->translateOrNew('es')->title = 'Amante de la programación, y el desarrollo web y móvil. Creador y propietario del sitio <a href="http://www.programarya.com/" target="_blank">ProgramarYA.com</a>. Adicto estudioso de la tecnología y la web.';

        $me->save();


        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
