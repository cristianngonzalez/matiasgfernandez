<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Timeline;

class timeline_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Timeline::create([
            'title' => 'Administrative/Accounting Assistant',
            'company' => 'Fundacion Andina, Social and Economic Studies',
            'description' => "Fundación de estudios Sociales y Económicos.",
            'icon' => 'timeline-seed-9.png',
            'category' => 'company',
            'date' => '1994 - 1997'
        ]);


        Timeline::create([
            'title' => 'Regional Sr. Brand Manager OTC - GI Category - Arg. & Latam',
            'company' => 'Boehringer Ingelheim',
            'description' => "Responsable del Negocio de Gastro/Antiespasmódicos en Latam (ex Brasil).Lideré el desarrollo del plan de marketing local y coordiné los planes regionales en línea con la estrategia corporativa. Negocié el pipeline de desarrollo de nuevos productos a nivel Regional.",
            'icon' => 'timeline-seed-6.svg',
            'category' => 'company',
            'date' => '2006 - 2008'
        ]);

        Timeline::create([
            'title' => 'Growth Marketing Manager',
            'company' => 'Wimet',
            'description' => "He estado desarrollando y siendo dueño de la estrategia para campañas de marketing de rendimiento en FB, display, redes sociales, plataformas de generación de leads y SEM. He estado desarrollando estrategia de contenido e implementación en canales pagos. Gestione las pérdidas y ganancias del marketing de rendimiento y optimice el gasto diario en medios Impulsar conocimientos cuantitativos y cualitativos, incluidos aportes e informes clave; monitorear las tendencias de crecimiento y medir todas las campañas de marketing Cree campañas de marketing multicanal para impulsar el sentimiento de marca y el crecimiento de los usuarios. Comunicar el desempeño, la estrategia y la visión.",
            'icon' => 'timeline-seed-3.png',
            'category' => 'startup',
            'date' => '2020 - 2021'
        ]);

        Timeline::create([
            'title' => 'Chief Growth Officer',
            'company' => 'TGA',
            'description' => "Como Chief Growth Officer lidero el diseño e implementación de estratregias de crecimiento, adquisición de clientes, y portfolio; alineadas con los valores y visión de la empresa, para lograr resultados medibles y sostenibles.",
            'icon' => 'timeline-seed-1.svg',
            'category' => 'startup',
            'date' => '2021 - Actualidad'
        ]);

        Timeline::create([
            'title' => "Consultoría Estratégica",
            'company' => "Grupo Phronesis",
            'description' => "Evaluación estrátegica sobre posibles rutas de crecimiento en alimentos.",
            'icon' => 'timeline-seed-12.png',
            'category' => "consultancy",
            'date' => "2021"
        ]);

        Timeline::create([
            'title' => "Consultoría",
            'company' => "Amanda Care",
            'description' => "Construcción de posicionamiento, y deck de inversión",
            'icon' => 'timeline-seed-11.jpg',
            'category' => "consultancy",
            'date' => "2021"
        ]);

        Timeline::create([
            'title' => "Consultoría Comercial",
            'company' => "Colmena Digital",
            'description' => "Análisis comercial, posicionamiento y escenarios de expansión en latam",
            'icon' => 'timeline-seed-10.webp',
            'category' => 'consultancy',
            'date' => "2022"
        ]);


    }
}
