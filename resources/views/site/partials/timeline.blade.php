<link rel="stylesheet" href="{{env('ASSETS_URL')}}timelineassets/css/style.css">



<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">

      <div class="dizme_tm_main_title" data-align="center" style="margin-bottom: 50px;">
        <span>{!!$staticcontents[3]->subtitle!!}</span>
        <h3>{!!$staticcontents[3]->maintitle!!}</h3>
        <p>{!!$staticcontents[3]->paragraph!!}</p>
        <a href="{{$socialnetworks[0]->link}}" target="_blank" style="text-decoration: none; color:coral;">Conocer mas <i class="{{$socialnetworks[0]->icon}}"></i> click aquí!</a>
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


  <script src="{{env('ASSETS_URL')}}timelineassets/js/main.js"></script>

  <script>
    let alltimeline = [];
  </script>

  @foreach ($timeline as $event)
      <script>
        alltimeline.push(
          {
            id: '{{$event->id}}',
            title: '{{$event->title}}',
            company: '{{$event->company}}',
            description: '{{$event->description}}',
            category: '{{$event->category}}',
            icon: '{{$event->icon}}',
            date: '{{$event->date}}'
          }
        );
      </script>
  @endforeach

  <script>
    alltimeline = alltimeline.reverse();
  </script>

  <script>
  
    let div_timeline_content = document.getElementById('timeline-content');
  
    printTimeline(alltimeline);

    function printTimeline(timeline){

      //Esta funcion esta hecha al iniciar y por cada filtro asi que borramos lo que contenga el div
      div_timeline_content.innerHTML = '';

      timeline.forEach(experience => {
        div_timeline_content.innerHTML += `
          <div class="cd-timeline__block">
            <div class="cd-timeline__img">
              <img src="{{env('ASSETS_URL')}}storage/${experience.icon}" alt="Picture">
            </div>
            <div class="cd-timeline__content text-component"  onclick="experienceVerMas(${experience.id})" >
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
        if( document.getElementById(`p_experience_description_${experience.id}`) ){
          document.getElementById(`p_experience_description_${experience.id}`).innerHTML = '';
        }
        if(  document.getElementById(`span_vermas_experience_${experience.id}`) ){
          document.getElementById(`span_vermas_experience_${experience.id}`).style.display = 'inline';
        }
      });

      //Volver a rellenar el parrafo apropiado
      document.getElementById(`span_vermas_experience_${id}`).style.display = 'none';

      alltimeline.forEach(experience => {
        if(experience.id == id){
          document.getElementById(`p_experience_description_${id}`).innerHTML = experience.description;
        }
      });

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