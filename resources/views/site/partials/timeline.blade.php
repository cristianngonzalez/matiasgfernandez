<link rel="stylesheet" href="{{asset('timelineassets/css/style.css')}}">




<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">

      <div class="dizme_tm_main_title" data-align="center" style="margin-bottom: 50px;">
        <span>Mi experiencia Profesional</span>
        <p>Me forme en empresas de diferentes culturas y estructuras, con responsabilidad sobre distintos negocios, categorias y marcas que han ampliado mi mirada de consumidores y mercados de Argentina y de Latam.</p>
        <a href="https://www.linkedin.com/in/matías-fernández/" target="_blank" style="text-decoration: none; color:coral;">Conocer mas <i class="icon-linkedin-1"></i> click aquí!</a>
      </div>

      <div class="timeline_filter">
          <ul>
              <li><a onclick="filterExperience('all')" class="current" id="timeline_filter_all">Todas</a></li>
              <li><a onclick="filterExperience('startup')" id="timeline_filter_startup">Startups</a></li>
              <li><a onclick="filterExperience('company')" id="timeline_filter_company">Empresas</a></li>
              <li><a onclick="filterExperience('consultancy')" id="timeline_filter_consultancy">Consultorias</a></li>
          </ul>
      </div>

      <!--Aqui se pintan los -->
      <br>
      <div id="timeline-content"></div>
      
    </div>
</section>


  <script src="{{asset('timelineassets/js/main.js')}}"></script>


  <script>
    let alltimeline = [
      {
        id: 0, title: 'Chief Growth Officer', company: 'TGA' , 
        description: 'Como Chief Growth Officer lidero el diseño e implementación de estratregias de crecimiento, adquisición de clientes, y portfolio; alineadas con los valores y visión de la empresa, para lograr resultados medibles y sostenibles.', 
        category: 'startup' , icon: "{{asset('img/partners/tga.svg')}}",
        date: '2021 - Actualidad',
      },
      {
        id: 1, 
        title: 'Advisory Board Member', 
        company: 'TIGOUT' , 
        description: "As a Board Advisory member I contribute with a strategic perspective to address business challenges and growth opportunities, working together with the company's management. More about my role: - Strategic Marketing initiatives to ensure that the company is effectively positioned for long-term success -External view on the performance and direction of the business strategy.", 
        category: 'company' , 
        icon: "{{asset('img/partners/togout.png')}}",
        date: '2020 - Actualidad',
      },
      {
        id: 2, 
        title: 'Growth Marketing Manager', 
        company: 'Wimet' , 
        description: 'Wimet is the first platform that allows access to an ecosystem of spaces to work under a subscription system. Thanks to Wimet any company or person can access a menu of places prepared for work or meetings, on the most convenient day and place. Developing and owning the strategy for performance marketing campaigns across FB, display, social, lead generation platforms and SEM Developing content strategy and implementation across paid channels Manage performance marketing P&L and optimize daily media spend Drive quantitative and qualitative insights, including key inputs and reporting; monitoring growth trends and measure all marketing campaigns Build multi-channel marketing campaigns to drive brand sentiment and user growth. Communicate performance, strategy, and vision.', 
        category: 'consultancy' , 
        icon: "{{asset('img/partners/wimet.jpeg')}}",
        date: 'Mar 2020 - Sep 2021',
      },
      {
        id: 3, 
        title: 'Sr Business Manager - Food', 
        company: 'Molinos Rio de la Plata' , 
        description: "Responsible for Snacks, Infusions, Dry Mixes and Rice Businesses Lead the design and implementation of the three-year strategic plans to meet the purpose and results of the Company. Directly responsible for Marketing and Trade Mktg, and leading Commercial Planning, Market Research, and R&D. Co-responsible for the Stage & Gate processes, and S&OP of 5 production sites. Member of the Diversity Committee, and of the Molinos Innova Program to promote entrepreneurs. Main brands: Gallo Snacks, Chocoarroz, Cruz de Malta, Nobleza Gaucha, Arlistan, Exqusita and Gallo", 
        category: 'company' , 
        icon: "{{asset('img/partners/molinos.svg')}}",
        date: '',
      },
      {
        id: 4, 
        title: 'Group Brand Manager - Foods', 
        company: 'Molinos Rio de la Plata' , 
        description: 'Responsible for Vienas, Coffee, Confectionery, Dry Mixes, and Rice Businesses Development and implementation of the marketing and communication plan for overseen brands. Main Brands: Vienissima, Arlistan, Exquisita, Gallo, Nugaton & Billiken', 
        category: 'company' , 
        icon: "{{asset('img/partners/molinos.svg')}}",
        date: 'Ene 2008 - Ene 2014',
      },
      {
        id: 5, 
        title: 'Regional Sr. Brand Manager OTC - GI Category - Arg. & Latam', 
        company: 'Boehringer Ingelheim' , 
        description: "Responsible for developing the local marketing plan and aligning regional plans with the corporate strategy. Coordinate the new product development pipeline at the regional level and deploy regional synergies. Main Brands: Buscapina & Buscapina FEM", 
        category: 'startup' , 
        icon: "{{asset('img/partners/boehringer_ingelheim.svg')}}",
        date: 'Jun 2006 - Jun 2008',
      },
      {
        id: 6, 
        title: 'Brand Manager, Oral Care & Batteries', 
        company: 'Gillette Argentina (P&G)' , 
        description: "Main Brands: Oral B & Duracell Developed the marketing and communication strategy for eleven new launches for Oral B and Pro brands. Developed oral care awareness campaign in conjunction with La Serenísima. This campaign was recognized as a regional best practice. Designed and implemented the 1st Oral B Dental Congress, being the first experience of the brand worldwide. Sr. Marketing Assistant, Batteries Implemented the Battery Dura2X Launch, with the objective of competing in the low-price segment.", 
        category: 'startup' , 
        icon: "{{asset('img/partners/p&g.svg')}}",
        date: 'Ene 2008 - Ene 2014',
      },
      {
        id: 7, 
        title: 'Project Manager', 
        company: 'Aguas Argentinas' , 
        description: 'Responsible for the process redesign and SAP integration of key business functions. Implementation of the ISO 25 Quality System, achieving certification in all the laboratories of the Company', 
        category: 'company' , 
        icon: "{{asset('img/partners/aguas-argentinas.svg')}}",
        date: 'Mar 1997 - Jun 2000',
      },
      {
        id: 8, 
        title: 'Administrative/Accounting Assistant', 
        company: 'Fundacion Andina, Social and Economic Studies' , 
        description: 'Fundación de estudios Sociales y Económicos.', 
        category: '' , 
        icon: "{{asset('img/partners/dark/fundacion-andina.svg')}}",
        date: 'Mar 1994 - Jun 1997',
      }
    ];

  
    let div_timeline_content = document.getElementById('timeline-content');
  
    printTimeline(alltimeline);

    function printTimeline(timeline){

      //Esta funcion esta hecha al iniciar y por cada filtro asi que borramos lo que contenga el div
      div_timeline_content.innerHTML = '';

      timeline.forEach(experience => {
        div_timeline_content.innerHTML += `
          <div class="cd-timeline__block">
            <div class="cd-timeline__img">
              <img src="${experience.icon}" alt="Picture">
            </div>
            <div class="cd-timeline__content text-component">
              <h2>${experience.title}</h2>
              <h5>${experience.company}</h5>
              <span onclick="experienceVerMas(${experience.id})" id="span_vermas_experience_${experience.id}">Ver mas</span>
              <p class="color-contrast-medium" id="p_experience_description_${experience.id}"></p>
              <div class="flex justify-between items-center">
                <span class="cd-timeline__date">${experience.date}</span>
              </div>
            </div>
          </div>
        `;
      });
    }

    function experienceVerMas(id){

      //Despintar todos los parrafos
      alltimeline.forEach(experience => {
        document.getElementById(`p_experience_description_${experience.id}`).innerHTML = '';
        document.getElementById(`span_vermas_experience_${experience.id}`).style.display = 'inline';
      });

      //Volver a rellenar el parrafo apropiado
      document.getElementById(`span_vermas_experience_${id}`).style.display = 'none';
      document.getElementById(`p_experience_description_${id}`).innerHTML = alltimeline[id].description;
    }

    function filterExperience(category){
      console.log(category);

      //Quitar las clases a los botones de los filtros
      document.getElementById('timeline_filter_all').className = '';
      document.getElementById('timeline_filter_startup').className = '';
      document.getElementById('timeline_filter_company').className = '';
      document.getElementById('timeline_filter_consultancy').className = '';

      if(category == 'all'){
        printTimeline(alltimeline);
        document.getElementById('timeline_filter_all').className = 'current';
      }else{
        let category_timeline = alltimeline.filter(experience => experience.category == category);
        printTimeline(category_timeline);
        //Aplicar classe al boton de filtro
        document.getElementById(`timeline_filter_${category}`).className = 'current';
      }

      
    }
  </script>