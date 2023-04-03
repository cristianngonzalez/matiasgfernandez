<div id="gameContainer">

    <div id="gamecard">
            <div id="gamecard-icon">
                <img src="{{env('ASSETS_URL')}}gameassets/img/score.png" alt="Matias Fernandez Timeline Experiencia Game">
            </div>
            <div id="gamecard-title">
                <h2>Juega para conocer mi trayectoria!</h2>
            </div>
    </div>

    <div class="sound">
        <img src="{{env('ASSETS_URL')}}gameassets/img/SOUND_ON.png" alt="" id="sound">
      </div>
      
      <div id="gameover">
        <h2>Game Over</h2>
        <div class="dizme_tm_button" >
            <a class="anchor" href="#about" onclick="restart()"><span>Start Game</span></a>
        </div>
      </div>
      
      <div id="startGameScreen">
            <h3 style="padding-top: 110px;">Descubre mi trayectoria derribando los bloques</h3>
            <h3>Pulsa izquierda y derecha jugar!</h3>
            <div class="dizme_tm_button" id="startGameScreen-startbutton">
                <a class="anchor" href="#about" onclick="startGame()"><span>Start Game</span></a>
            </div>
            <h1 id="startGameScreen-text">Preparate!</h1>
      </div>

      <canvas id="breakout" width="800" height="400"></canvas>
</div>