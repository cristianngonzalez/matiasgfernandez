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
            'logo' => 'https://media.licdn.com/dms/image/C560BAQGnFLB5b0Y82w/company-logo_100_100/0/1638478727843?e=1686182400&v=beta&t=KHNH9cSbZx6FzIP17LkVZbtrE1K-cLzQJOEQlw7JDLo',
        ]);

        Academy::create([
            'institution' => 'Pontificia Universidad Católica Argentina Santa María de los Buenos Aires',
            'degree' => 'Posgrado, Finanzas',
            'date' => '2001 - 2001',
            'logo' => 'https://media.licdn.com/dms/image/C560BAQGsbMBf78pxww/company-logo_100_100/0/1519894313380?e=1686182400&v=beta&t=nNVPYXWunALJpac-4SdGiIPkxlMgezOfxtNUkA00lVI',
        ]);

        Academy::create([
            'institution' => 'IAE Business School',
            'degree' => 'Programa de Formación Gerencial - In company',
            'date' => '2009 - 2010',
            'logo' => 'https://media.licdn.com/dms/image/C4D0BAQEF9liCUFDGxQ/company-logo_200_200/0/1603378764727?e=1686182400&v=beta&t=T5f8yCvI1B7thH7_1bdbY3OPMqDrCMADnv06vwFZv3E',
        ]);

        Academy::create([
            'institution' => 'IAE Business School',
            'degree' => 'Master of Business Administration (M.B.A.)',
            'date' => '2013 - 2014',
            'logo' => 'https://media.licdn.com/dms/image/C4D0BAQEF9liCUFDGxQ/company-logo_200_200/0/1603378764727?e=1686182400&v=beta&t=T5f8yCvI1B7thH7_1bdbY3OPMqDrCMADnv06vwFZv3E',
        ]);

        Academy::create([
            'institution' => "Universidad de 'San Andrés'",
            'degree' => 'Managment Integral de Negocios Digitales',
            'date' => '2016 - 2016',
            'logo' => 'https://media.licdn.com/dms/image/C4E0BAQFszxd7hxCmAw/company-logo_100_100/0/1519856003120?e=1686182400&v=beta&t=K3RK7-YKcufslSnN9O7KS045LMCj6pNcVT4rmlA4enI',
        ]);
    }
}
