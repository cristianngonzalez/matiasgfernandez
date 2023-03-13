<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Testimonial;

class testimonial_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Testimonial::create([
            'name' => 'Sergio Wolfsohn',
            'detail' => 'Communication Medical Marketing Manager en RB',
            'testimonial' => 'Matias fue un gran jefe de equipo, siempre transmitiendo objetivos claros y generando herramientas para poder alcanzarlos. Destaco su liderazgo hacia el negocio y principalmente hacia su equipo.',
            'avatar' => 'https://media.licdn.com/dms/image/C4E03AQFkZRrt3cGKfw/profile-displayphoto-shrink_100_100/0/1646940945346?e=1682553600&v=beta&t=sDJcCAFDRbEKyxsbUCMQqZxf9evv55StY-i1_CylFss'
        ]);

        Testimonial::create([
            'name' => 'Marcelo BatipallaMarcelo Batipalla',
            'detail' => 'Senior MKT Executive.',
            'testimonial' => 'Matias es un excelente profesional con una destacable visión estratégica para los negocios, como así también es altamente destacable su empuje emprendedor para afrontar nuevos desafíos y encontrar oportunidades en los diferentes proyectos.',
            'avatar' => 'https://media.licdn.com/dms/image/C4D03AQG2QG3x9F9Mhw/profile-displayphoto-shrink_100_100/0/1516304430809?e=1682553600&v=beta&t=6QWjj_c7MZ1fCyLn0jTPM4e0zT65az6lHu17YqpIFFM'
        ]);
        
        Testimonial::create([
            'name' => 'Eduardo Lopardo BadanoEduardo Lopardo Badano',
            'detail' => 'Director General - Arcos Dorados Argentina',
            'testimonial' => 'Matias es un excelente profesional, con amplia trayectoria y conocimiento en varios mercados de consumo masivo. Ha sido un placer para mi poder trabajar con Matias y disfrutar de su pasión por los negocios, su orientación a resultados, su búsqueda por innovar y pensar distinto y su excelente comunicación y dedicacion al desarrollo de sus equipos.',
            'avatar' => 'https://media.licdn.com/dms/image/C4D03AQF3dp9NbZuvEg/profile-displayphoto-shrink_100_100/0/1615054871700?e=1682553600&v=beta&t=FD-ENw7ZWDwq9ih8tTADMUaHws8kTAutkVvM4dbq_MQ'
        ]);
        
    }
}
