<div id="gameContainer">

    <div id="gamecard">
            <div id="gamecard-icon">
                <img src="{{env('ASSETS_URL')}}gameassets/img/score.png" alt="Matias Fernandez Timeline Experiencia Game">
            </div>
            <div id="gamecard-title">
                <h2 style="padding-top: 30px;">¡Juega para conocer mi trayectoria!</h2>
            </div>
    </div>

    <div class="sound">
        <img src="{{env('ASSETS_URL')}}gameassets/img/SOUND_ON.png" alt="" id="sound">
      </div>
      
      <div id="gameover">
        <h2 style="padding-top: 80px;">Game Over</h2>
        <div class="dizme_tm_button" style="padding-top: 40px;">
            <a class="anchor" href="#about" onclick="restart()"><span>Start Game</span></a>
        </div>
        <a href="#timeline" class="gameContainer-link">Ver mi experiencia laboral completa</a>
      </div>
      
      <div id="startGameScreen">
            <h3 style="padding-top: 80px;">Descubre mi trayectoria derribando los bloques</h3>
            <h3>¡Pulsa izquierda y derecha jugar!</h3>
            <div class="dizme_tm_button" id="startGameScreen-startbutton" style="padding-top: 30px; padding-bottom: 30px;">
                <a class="anchor" href="#about" onclick="startGame()"><span>Start Game</span></a>
            </div>
            <h1 id="startGameScreen-text">Preparate!</h1>

            <a href="#timeline" class="gameContainer-link" id="startGameScreen-link">Ver mi experiencia laboral completa</a>
      </div>

      <div id="winGameScreen">
        <h1 style="padding-top: 70px">Has Ganado!</h1>
        <h3 style="padding-top: 20px; padding-bottom: 40px;">Puedes mi trayectoria completa en la timeline</h3>
        <a href="#timeline" class="gameContainer-link">Ver mi experiencia laboral completa</a>
      </div>

      <canvas id="breakout" width="800" height="400"></canvas>
</div>