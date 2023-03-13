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

        //==========================================================================================
        Timeline::create([
            'title' => 'Administrative/Accounting Assistant',
            'company' => 'Fundacion Andina, Social and Economic Studies',
            'description' => "Fundación de estudios Sociales y Económicos.",
            'icon' => 'timeline-seed-9.png',
            'category' => 'startup',
            'date' => 'Mar 1994 - Jun 1997'
        ]);

        Timeline::create([
            'title' => 'Project Manager',
            'company' => 'Aguas Argentinas',
            'description' => "Responsible for the process redesign and SAP integration of key business functions. Implementation of the ISO 25 Quality System, achieving certification in all the laboratories of the Company",
            'icon' => 'timeline-seed-8.svg',
            'category' => 'company',
            'date' => 'Mar 1997 - Jun 2000'
        ]);

        Timeline::create([
            'title' => 'Brand Manager, Oral Care & Batteries',
            'company' => 'Gillette Argentina (P&G)',
            'description' => "Main Brands: Oral B & Duracell Developed the marketing and communication strategy for eleven new launches for Oral B and Pro brands. Developed oral care awareness campaign in conjunction with La Serenísima. This campaign was recognized as a regional best practice. Designed and implemented the 1st Oral B Dental Congress, being the first experience of the brand worldwide. Sr. Marketing Assistant, Batteries Implemented the Battery Dura2X Launch, with the objective of competing in the low-price segment.",
            'icon' => 'timeline-seed-7.svg',
            'category' => 'startup',
            'date' => 'Ene 2008 - Ene 2014'
        ]);

        Timeline::create([
            'title' => 'Regional Sr. Brand Manager OTC - GI Category - Arg. & Latam',
            'company' => 'Boehringer Ingelheim',
            'description' => "Responsible for developing the local marketing plan and aligning regional plans with the corporate strategy. Coordinate the new product development pipeline at the regional level and deploy regional synergies. Main Brands: Buscapina & Buscapina FEM",
            'icon' => 'timeline-seed-6.svg',
            'category' => 'startup',
            'date' => 'Jun 2006 - Jun 2008'
        ]);

        Timeline::create([
            'title' => 'Group Brand Manager - Foods',
            'company' => 'Molinos Rio de la Plata',
            'description' => "Responsible for Vienas, Coffee, Confectionery, Dry Mixes, and Rice Businesses Development and implementation of the marketing and communication plan for overseen brands. Main Brands: Vienissima, Arlistan, Exquisita, Gallo, Nugaton & Billiken",
            'icon' => 'timeline-seed-5.png',
            'category' => 'company',
            'date' => 'Ene 2008 - Ene 2014'
        ]);

        Timeline::create([
            'title' => 'Sr Business Manager - Food',
            'company' => 'Molinos Rio de la Plata',
            'description' => "Responsible for Snacks, Infusions, Dry Mixes and Rice Businesses Lead the design and implementation of the three-year strategic plans to meet the purpose and results of the Company. Directly responsible for Marketing and Trade Mktg, and leading Commercial Planning, Market Research, and R&D. Co-responsible for the Stage & Gate processes, and S&OP of 5 production sites. Member of the Diversity Committee, and of the Molinos Innova Program to promote entrepreneurs. Main brands: Gallo Snacks, Chocoarroz, Cruz de Malta, Nobleza Gaucha, Arlistan, Exqusita and Gallo",
            'icon' => 'timeline-seed-4.png',
            'category' => 'company',
            'date' => ''
        ]);

        Timeline::create([
            'title' => 'Growth Marketing Manager',
            'company' => 'Wimet',
            'description' => "Wimet is the first platform that allows access to an ecosystem of spaces to work under a subscription system. Thanks to Wimet any company or person can access a menu of places prepared for work or meetings, on the most convenient day and place. Developing and owning the strategy for performance marketing campaigns across FB, display, social, lead generation platforms and SEM Developing content strategy and implementation across paid channels Manage performance marketing P&L and optimize daily media spend Drive quantitative and qualitative insights, including key inputs and reporting; monitoring growth trends and measure all marketing campaigns Build multi-channel marketing campaigns to drive brand sentiment and user growth. Communicate performance, strategy, and vision.",
            'icon' => 'timeline-seed-3.png',
            'category' => '',
            'date' => 'Mar 2020 - Sep 2021'
        ]);

        Timeline::create([
            'title' => 'Advisory Board Member',
            'company' => 'TIGOUT',
            'description' => "As a Board Advisory member I contribute with a strategic perspective to address business challenges and growth opportunities, working together with the company's management. More about my role: - Strategic Marketing initiatives to ensure that the company is effectively positioned for long-term success -External view on the performance and direction of the business strategy.",
            'icon' => 'timeline-seed-2.png',
            'category' => 'company',
            'date' => '2020 - Actualidad'
        ]);

        Timeline::create([
            'title' => 'Chief Growth Officer',
            'company' => 'TGA',
            'description' => "Como Chief Growth Officer lidero el diseño e implementación de estratregias de crecimiento, adquisición de clientes, y portfolio; alineadas con los valores y visión de la empresa, para lograr resultados medibles y sostenibles.",
            'icon' => 'timeline-seed-1.svg',
            'category' => 'startup',
            'date' => '2021 - Actualidad'
        ]);

    }
}
