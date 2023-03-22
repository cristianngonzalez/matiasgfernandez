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
            'avatar' => 'testimonial-seed-1.jpeg'
        ]);

        Testimonial::create([
            'name' => 'Marcelo BatipallaMarcelo Batipalla',
            'detail' => 'Senior MKT Executive.',
            'testimonial' => 'Matias es un excelente profesional con una destacable visión estratégica para los negocios, como así también es altamente destacable su empuje emprendedor para afrontar nuevos desafíos y encontrar oportunidades en los diferentes proyectos.',
            'avatar' => 'testimonial-seed-2.jpeg'
        ]);
        
        Testimonial::create([
            'name' => 'Eduardo Lopardo BadanoEduardo Lopardo Badano',
            'detail' => 'Director General - Arcos Dorados Argentina',
            'testimonial' => 'Matias es un excelente profesional, con amplia trayectoria y conocimiento en varios mercados de consumo masivo. Ha sido un placer para mi poder trabajar con Matias y disfrutar de su pasión por los negocios, su orientación a resultados, su búsqueda por innovar y pensar distinto y su excelente comunicación y dedicacion al desarrollo de sus equipos.',
            'avatar' => 'testimonial-seed-3.jpeg'
        ]);
        
    }
}
