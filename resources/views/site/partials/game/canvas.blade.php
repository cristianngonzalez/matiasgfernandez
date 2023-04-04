<div id="gameContainer">

    <div id="gamecard">
        <h2 id="gamecard-title" class="animate__animated animate__bounce animate_infinite_loop animate_duration_3s" >
            ¡Juega para conocer mi experiencia profesional!
        </h2>
    </div>

    <div class="sound">
        <img src="{{env('ASSETS_URL')}}gameassets/img/SOUND_ON.png" alt="" id="sound">
      </div>
      
      <div id="gameover">
        <h2 style="padding-top: 80px;">Game Over</h2>
        <div class="dizme_tm_button" style="padding-top: 40px;">
            <a class="anchor" href="#about" onclick="restart()"><span>Start Game</span></a>
        </div>
      </div>
      
      <div id="startGameScreen">
            <h3 id="startGameScreen-title">Descubre las empresas en las que trabajé derribando los bloques</h3>
            <div class="dizme_tm_button" id="startGameScreen-startbutton" style="padding-top: 30px; padding-bottom: 30px;">
                <a class="anchor" href="#about" onclick="startGame()"><span>Start Game</span></a>
            </div>
            <h1 id="startGameScreen-text">Preparate!</h1>
      </div>

      <div id="winGameScreen">
        <h1 style="padding-top: 70px">Has Ganado!</h1>
        <h3 style="padding-top: 20px; padding-bottom: 40px;">Puedes mi trayectoria completa en la timeline</h3>
      </div>

      <canvas id="breakout" width="800" height="400"></canvas>
</div>