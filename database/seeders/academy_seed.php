<?php

namespace Database\Seeders;

use App\Models\Academy;

use Illuminate\Database\Seeder;

class academy_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Academy::create([
            'institution' => 'Universidad de Ciencias Empresariales y Sociales',
            'degree' => 'Licenciatura, Comercializacion',
            'date' => '1994 - 1999',
            'logo' => 'academy-seed-1.jpeg',
        ]);

        Academy::create([
            'institution' => 'Pontificia Universidad Católica Argentina Santa María de los Buenos Aires',
            'degree' => 'Posgrado, Finanzas',
            'date' => '2001 - 2001',
            'logo' => 'academy-seed-2.jpeg',
        ]);

        Academy::create([
            'institution' => 'IAE Business School',
            'degree' => 'Programa de Formación Gerencial - In company',
            'date' => '2009 - 2010',
            'logo' => 'academy-seed-3.jpeg',
        ]);

        Academy::create([
            'institution' => 'IAE Business School',
            'degree' => 'Master of Business Administration (M.B.A.)',
            'date' => '2013 - 2014',
            'logo' => 'academy-seed-4.jpeg',
        ]);

        Academy::create([
            'institution' => "Universidad de 'San Andrés'",
            'degree' => 'Managment Integral de Negocios Digitales',
            'date' => '2016 - 2016',
            'logo' => 'academy-seed-5.jpeg',
        ]);
    }
}
