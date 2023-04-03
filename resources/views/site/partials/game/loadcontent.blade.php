<script>

    /////// LOAD IMAGES ////////
    
    // LOAD BG IMAGE
    const BG_IMG = new Image();
    BG_IMG.src = "{{env('ASSETS_URL')}}gameassets/img/bg.png";
    
    const LEVEL_IMG = new Image();
    LEVEL_IMG.src = "{{env('ASSETS_URL')}}gameassets/img/level.png";
    
    const LIFE_IMG = new Image();
    LIFE_IMG.src = "{{env('ASSETS_URL')}}gameassets/img/life.png";
    
    const SCORE_IMG = new Image();
    SCORE_IMG.src = "{{env('ASSETS_URL')}}gameassets/img/score.png";
    
    
    /////// END LOAD IMAGES ////////
    
    // ************************ //
    
    /////// LOAD SOUNDS ////////
    
    const WALL_HIT = new Audio();
    WALL_HIT.src = "{{env('ASSETS_URL')}}gameassets/sounds/wall.mp3";
    
    const LIFE_LOST = new Audio();
    LIFE_LOST.src = "{{env('ASSETS_URL')}}gameassets/sounds/life_lost.mp3";
    
    const PADDLE_HIT = new Audio();
    PADDLE_HIT.src = "{{env('ASSETS_URL')}}gameassets/sounds/paddle_hit.mp3";
    
    const WIN = new Audio();
    WIN.src = "{{env('ASSETS_URL')}}gameassets/sounds/win.mp3";
    
    const BRICK_HIT = new Audio();
    BRICK_HIT.src = "{{env('ASSETS_URL')}}gameassets/sounds/brick_hit.mp3";
    
    
    /////// END LOAD SOUNDS ////////
    
    
    </script>