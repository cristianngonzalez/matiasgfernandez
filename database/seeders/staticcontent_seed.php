<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Staticcontent;

class staticcontent_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Staticcontent::create([
            'section' => 'Hero',
            'maintitle' => 'Matías Fernández',
            'subtitle' => 'Durante más de 25 años he liderado <span class="greenText">estrategias de marketing y comerciales<span>',
            'paragraph' => 'Pero mi actual rol como CGO en TGA ha despertado en mí una pasión aún mayor por el Gaming como fenómeno cultural y sus aplicaciones corporativas. Me apasiona la tecnología y me encanta inspirar y ayudar a otros a pensar en nuevos formatos para evolucionar los negocios. Para mí, compartir ideas y liderar la acción es la clave para transformar la realidad. ¡Vamos a hacer cosas increíbles juntos!',
        ]);

        Staticcontent::create([
            'section' => 'Acerca de mi',
            'maintitle' => 'Desafiar paradigmas de creación de valor en la forma en que compramos y consumimos!',
            'subtitle' => 'Matias Fernández',
            'paragraph' => 'Soy Sr Business Executive con 25 años de aprendizajes en las áreas de Negocio, principalmente a través del desarrollo e implementación de Marketing Strategies.',
        ]);

        Staticcontent::create([
            'section' => 'Testimonio',
            'maintitle' => '',
            'subtitle' => 'Recomendaciones',
            'paragraph' => 'He tenido la posibilidad de trabajar con enormes personas y profesionales. <br> Gracias a todos los que me dieron oportunidades, confianza y guía en mi desarrollo profesional.',
        ]);

        Staticcontent::create([
            'section' => 'Mi experiencia Profesional',
            'maintitle' => '',
            'subtitle' => 'Mi experiencia Profesional',
            'paragraph' => 'Me forme en empresas de diferentes culturas y estructuras, con responsabilidad sobre distintos negocios, categorias y marcas que han ampliado mi mirada de consumidores y mercados de Argentina y de Latam.',
        ]);

        Staticcontent::create([
            'section' => 'Mis estudios',
            'maintitle' => 'Mis estudios',
            'subtitle' => '',
            'paragraph' => '',
        ]);

        Staticcontent::create([
            'section' => 'Mi galeria',
            'maintitle' => '',
            'subtitle' => 'Mi galeria',
            'paragraph' => '',
        ]);

        Staticcontent::create([
            'section' => 'Blog',
            'maintitle' => 'Mis mas recientes aportes',
            'subtitle' => 'Mi blog',
            'paragraph' => '',
        ]);

        Staticcontent::create([
            'section' => 'Videos',
            'maintitle' => '',
            'subtitle' => 'Videos',
            'paragraph' => '',
        ]);

        Staticcontent::create([
            'section' => 'Contacto',
            'maintitle' => '',
            'subtitle' => 'Sigamos en contacto',
            'paragraph' => '',
        ]);

    }
}
