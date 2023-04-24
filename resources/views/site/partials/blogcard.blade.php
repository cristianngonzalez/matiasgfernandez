<li class="wow fadeInUp" data-wow-duration="1s">
    <div class="list_inner">
        <div class="image">
            <div class="card-blog-picture" style="background: {{env('ASSETS_URL')}}storage/{{$blog->picture}}; background-repeat: no-repeat;"></div>
            <div class="main" data-img-url="{{env('ASSETS_URL')}}storage/{{$blog->picture}}"></div>
            <div class="date">
                <h3>{{$blog->created_at->format('d')}}</h3>
                <!--Print mont-->
                @switch($blog->created_at->format('m'))
                    @case('01')<span>Ene</span> @break
                    @case('02')<span>Feb</span> @break
                    @case('03')<span>Mar</span> @break
                    @case('04')<span>Abr</span> @break
                    @case('05')<span>May</span> @break
                    @case('06')<span>Jun</span> @break
                    @case('07')<span>Jul</span> @break
                    @case('08')<span>Ago</span> @break
                    @case('09')<span>Sep</span> @break
                    @case('10')<span>Oct</span> @break
                    @case('11')<span>Nov</span> @break
                    @case('12')<span>Dic</span> @break
                @endswitch
            </div>
        </div>
        
        <div class="details-home-blog">
            <!--Relacion entre tablas blog y categorias-->
            <span class="category"><a href="{{route('site.blog')}}?id={{$blog->id}}">{{$blog->categories->name}}</a></span>
            <h3 class="title"><a href="{{route('site.blog')}}?id={{$blog->id}}">{{$blog->title}}</a></h3>
        </div>
        
    </div>
</li>