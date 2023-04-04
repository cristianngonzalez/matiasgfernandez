@include('site.partials.game.confeti')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">


<!--Recolectar la timeline-->
<script>
    let gamecards = [];
</script>
@foreach ($timeline as $gamecard)
    <script>
        gamecards.push({
            title: `{{$gamecard->title}}`,
            icon: `{{$gamecard->icon}}`,
            company: `{{$gamecard->company}}`,
            date: `{{$gamecard->date}}`,
        });
    </script>
@endforeach

@include('site.partials.game.style')

@include('site.partials.game.canvas')

@include('site.partials.game.loadcontent')


<script >
    // SELECT CANVAS ELEMENT
const cvs = document.getElementById("breakout");
const ctx = cvs.getContext("2d");
//let gamecard_icon = document.getElementById("gamecard-icon");
let gamecard_div = document.getElementById("gamecard");
let gamecard_title = document.getElementById("gamecard-title");
let startGameScreen = document.getElementById("startGameScreen");
let startGameScreen_text = document.getElementById("startGameScreen-text");
let textOverGame = document.getElementById("textOverGame");

// ADD BORDER TO CANVAS
//cvs.style.border = "1px solid #f75023";

// MAKE LINE THIK WHEN DRAWING TO CANVAS
ctx.lineWidth = 3;

// GAME VARIABLES AND CONSTANTS
const PADDLE_WIDTH = 90;
const PADDLE_MARGIN_BOTTOM = 50;
const PADDLE_HEIGHT = 20;
const BALL_RADIUS = 8;
let LIFE = 3; // PLAYER HAS 3 LIVES
let SCORE = 0;
const SCORE_UNIT = 10;
let LEVEL = 3;
const MAX_LEVEL = 3;
let GAME_OVER = false;
let leftArrow = false;
let rightArrow = false;
let countBreakCollisions = 0;

// CREATE THE PADDLE
const paddle = {
    x : cvs.width/2 - PADDLE_WIDTH/2,
    y : cvs.height - PADDLE_MARGIN_BOTTOM - PADDLE_HEIGHT,
    width : PADDLE_WIDTH,
    height : PADDLE_HEIGHT,
    dx :5
}

// DRAW PADDLE
function drawPaddle(){
    ctx.fillStyle = "#fff";
    ctx.fillRect(paddle.x, paddle.y, paddle.width, paddle.height);
    
    ctx.strokeStyle = "#f75023";
    ctx.strokeRect(paddle.x, paddle.y, paddle.width, paddle.height);
}

// CONTROL THE PADDLE
document.addEventListener("keydown", function(event){
   if(event.keyCode == 37){
       leftArrow = true;
   }else if(event.keyCode == 39){
       rightArrow = true;
   }
});
document.addEventListener("keyup", function(event){
   if(event.keyCode == 37){
       leftArrow = false;
   }else if(event.keyCode == 39){
       rightArrow = false;
   }
});

// MOVE PADDLE
function movePaddle(){
    if(rightArrow && paddle.x + paddle.width < cvs.width){
        paddle.x += paddle.dx;
    }else if(leftArrow && paddle.x > 0){
        paddle.x -= paddle.dx;
    }
}

// CREATE THE BALL
const ball = {
    x : cvs.width/2,
    y : paddle.y - BALL_RADIUS,
    radius : BALL_RADIUS,
    speed : 4,
    dx : 3 * (Math.random() * 2 - 1),
    dy : -3
}

// DRAW THE BALL
function drawBall(){
    ctx.beginPath();
    
    ctx.arc(ball.x, ball.y, ball.radius, 0, Math.PI*2);
    ctx.fillStyle = "#fff";
    ctx.fill();
    
    ctx.strokeStyle = "#f75023";
    ctx.stroke();
    
    ctx.closePath();
}

// MOVE THE BALL
function moveBall(){
    ball.x += ball.dx;
    ball.y += ball.dy;
}

// BALL AND WALL COLLISION DETECTION
function ballWallCollision(){
    if(ball.x + ball.radius > cvs.width || ball.x - ball.radius < 0){
        ball.dx = - ball.dx;
        WALL_HIT.play();
    }
    
    if(ball.y - ball.radius < 0){
        ball.dy = -ball.dy;
        WALL_HIT.play();
    }
    
    if(ball.y + ball.radius > cvs.height){
        LIFE--; // LOSE LIFE
        LIFE_LOST.play();
        resetBall();
    }
}

// RESET THE BALL
function resetBall(){
    ball.x = cvs.width/2;
    ball.y = paddle.y - BALL_RADIUS;
    ball.dx = 3 * (Math.random() * 2 - 1);
    ball.dy = -3;
}

// BALL AND PADDLE COLLISION
function ballPaddleCollision(){
    if(ball.x < paddle.x + paddle.width && ball.x > paddle.x && paddle.y < paddle.y + paddle.height && ball.y > paddle.y){
        
        // PLAY SOUND
        PADDLE_HIT.play();
        
        // CHECK WHERE THE BALL HIT THE PADDLE
        let collidePoint = ball.x - (paddle.x + paddle.width/2);
        
        // NORMALIZE THE VALUES
        collidePoint = collidePoint / (paddle.width/2);
        
        // CALCULATE THE ANGLE OF THE BALL
        let angle = collidePoint * Math.PI/3;
            
            
        ball.dx = ball.speed * Math.sin(angle);
        ball.dy = - ball.speed * Math.cos(angle);
    }
}

// CREATE THE BRICKS
const brick = {
    row : 2,
    column : 6,
    width : 110,
    height : 20,
    offSetLeft : 20,
    offSetTop : 20,
    marginTop : 40,
    fillColor : "#f75023",
    strokeColor : "#f75023"
}

let bricks = [];

function createBricks(){
    let auxBricksCounts = 0;
    for(let r = 0; r < brick.row; r++){
        
            bricks[r] = [];
            for(let c = 0; c < brick.column; c++){
                if(auxBricksCounts < gamecards.length){
                    bricks[r][c] = {
                        x : c * ( brick.offSetLeft + brick.width ) + brick.offSetLeft,
                        y : r * ( brick.offSetTop + brick.height ) + brick.offSetTop + brick.marginTop,
                        status : true
                    }

                    auxBricksCounts++;
                }
            }

    }
}

createBricks();

// draw the bricks
function drawBricks(){

    let auxBricksCounts = 0;

    for(let r = 0; r < brick.row; r++){
        for(let c = 0; c < brick.column; c++){
            let b = bricks[r][c];
            // if the brick isn't broken
            if(auxBricksCounts < gamecards.length){
                if(b.status){
                    ctx.fillStyle = brick.fillColor;
                    ctx.fillRect(b.x, b.y, brick.width, brick.height);
                    
                    ctx.strokeStyle = brick.strokeColor;
                    ctx.strokeRect(b.x, b.y, brick.width, brick.height);
                }

                auxBricksCounts++;
            }
        }
    }
}

// ball brick collision
function ballBrickCollision(){

    let auxBricksCounts = 0;

    for(let r = 0; r < brick.row; r++){
        for(let c = 0; c < brick.column; c++){
            let b = bricks[r][c];
            // if the brick isn't broken
            if(auxBricksCounts < gamecards.length){
                if(b.status){
                    if(ball.x + ball.radius > b.x && ball.x - ball.radius < b.x + brick.width && ball.y + ball.radius > b.y && ball.y - ball.radius < b.y + brick.height){
                        BRICK_HIT.play();
                        ball.dy = - ball.dy;
                        b.status = false; // the brick is broken
                        SCORE += SCORE_UNIT;


                        countBreakCollisions++;
                        //gamecard_icon.innerHTML = `<img src="{{env('ASSETS_URL')}}storage/${gamecards[countBreakCollisions - 1].icon}"/>`;
                        /*
                        gamecard_div.innerHTML = `
                            <div class="animate__animated animate__fadeInUpBig">
                                <h3 
                                    style="color: #1cbe59; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); padding-top: 20px; font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].title}
                                </h3>
                                <h4
                                    style="color: black; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].company}
                                </h4>
                                <h6
                                    style="color: black; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].date}
                                </h6>
                            </div>
                        `;
                        */
                       textOverGame.innerHTML = `
                            <div class="animate__animated animate__fadeInUpBig">
                                <h3 
                                    style="color: black; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); padding-top: 180px; font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].title}
                                </h3>
                                <h4
                                    style="color: black; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].company}
                                </h4>
                                <h6
                                    style="color: black; -webkit-text-stroke: 1px #fff; text-shadow: 0px 2px 4px rgb(0, 204, 255); font-family: 'Luckiest Guy', cursive !important; text-align: center;"
                                >
                                    ${gamecards[countBreakCollisions - 1].date}
                                </h6>
                            </div>
                        `;

                    }
                }

                auxBricksCounts++;
            }
        }
    }
}

// show game stats
function showGameStats(text, textX, textY, img, imgX, imgY){
    // draw text
    ctx.fillStyle = "#000000";
    ctx.font = "25px Luckiest Guy";
    ctx.fillText(text, textX, textY);
    
    // draw image
    ctx.drawImage(img, imgX, imgY, width = 25, height = 25);
}

// DRAW FUNCTION
function draw(){
    drawPaddle();
    
    drawBall();
    
    drawBricks();
    
    // SHOW SCORE
    showGameStats(SCORE, 35, 25, SCORE_IMG, 5, 5);
    // SHOW LIVES
    showGameStats(LIFE, cvs.width - 25, 25, LIFE_IMG, cvs.width-55, 5); 
    // SHOW LEVEL
    //showGameStats(LEVEL, cvs.width/2, 25, LEVEL_IMG, cvs.width/2 - 30, 5);
}

// game over
function gameOver(){
    if(LIFE <= 0){
        showYouLose();
        MUSIC_LOOP.pause();
        GAME_OVER_SOUND.play();
        GAME_OVER = true;
        textOverGame.innerHTML = '';
    }
}

// level up
function levelUp(){
    let isLevelDone = true;
    let auxBricksCounts = 0;
    
    // check if all the bricks are broken
    for(let r = 0; r < brick.row; r++){
        for(let c = 0; c < brick.column; c++){
            if(auxBricksCounts < gamecards.length){
                isLevelDone = isLevelDone && ! bricks[r][c].status;

                auxBricksCounts++;
            }
        }
    }
    
    if(isLevelDone){
        WIN.play();
        
        if(LEVEL >= MAX_LEVEL){
            showYouWin();

            //Dispatch conffetis
            jsConfetti.addConfetti({
                emojis: ['🌈', '⚡️', '💥', '✨', '💫', '👏' , '🥇' , '🏆'],
                confettiRadius: 40,
            }).then(() => jsConfetti.addConfetti())

            GAME_OVER = true;
            return;
        }
        brick.row++;
        createBricks();
        ball.speed += 0.5;
        resetBall();
        LEVEL++;
    }
}

// UPDATE GAME FUNCTION
function update(){
    movePaddle();
    
    moveBall();
    
    ballWallCollision();
    
    ballPaddleCollision();
    
    ballBrickCollision();
    
    gameOver();
    
    levelUp();
}

// GAME LOOP
function loop(){
    // CLEAR THE CANVAS
    ctx.drawImage(BG_IMG, 0, 0);
    
    draw();
    
    update();
    
    if(! GAME_OVER){
        requestAnimationFrame(loop);
    }
}

function startGame(){
    gameover.style.display = "none";
    startGameScreen.style.display = 'block';

    document.getElementById('startGameScreen-startbutton').style.display = 'none';
    startGameScreen_text.style.display = 'inline';

    MUSIC_LOOP.play();

    setTimeout(() => {

        setTimeout(() => {
            startGameScreen_text.innerText = "Ahora!";
            gamecard_title.className = "animate__animated animate__zoomInDown animate_duration_2s";
            gamecard_title.innerText = "Presiona derecha e izquierda para desplazar"
        }, 1000);

        setTimeout(() => {
            startGameScreen.style.display = 'none';
            cvs.style.display = 'block';
            loop();
        }, 1500);

    }, 3000);
    
    
}


// SELECT SOUND ELEMENT
const soundElement  = document.getElementById("sound");

soundElement.addEventListener("click", audioManager);

function audioManager(){
    // CHANGE IMAGE SOUND_ON/OFF
    let imgSrc = soundElement.getAttribute("src");
    let SOUND_IMG = imgSrc == "{{env('ASSETS_URL')}}gameassets/img/SOUND_ON.png" ? "{{env('ASSETS_URL')}}gameassets/img/SOUND_OFF.png" : "{{env('ASSETS_URL')}}gameassets/img/SOUND_ON.png";
    
    soundElement.setAttribute("src", SOUND_IMG);
    
    // MUTE AND UNMUTE SOUNDS
    WALL_HIT.muted = WALL_HIT.muted ? false : true;
    PADDLE_HIT.muted = PADDLE_HIT.muted ? false : true;
    BRICK_HIT.muted = BRICK_HIT.muted ? false : true;
    WIN.muted = WIN.muted ? false : true;
    LIFE_LOST.muted = LIFE_LOST.muted ? false : true;
    MUSIC_LOOP.muted = MUSIC_LOOP.muted ? false : true;
}

// SHOW GAME OVER MESSAGE
/* SELECT ELEMENTS */
let gameover = document.getElementById("gameover");
let winGameScreen = document.getElementById("winGameScreen");


function restart(){
    LIFE = 3; // PLAYER HAS 3 LIVES
    SCORE = 0;
    GAME_OVER = false;
    countBreakCollisions = 0;

    gameover.style.display = "none";

    let bricks = [];
    createBricks();

    startGame();
}

// SHOW YOU WIN
function showYouWin(){
    cvs.style.display = 'none';
    winGameScreen.style.display = "block";
    gamecard_div.innerHTML = "";
}

// SHOW YOU LOSE
function showYouLose(){
    cvs.style.display = 'none';
    gameover.style.display = "block";

    //gamecard_icon.innerHTML = `<img src="{{env('ASSETS_URL')}}gameassets/img/score.png" alt="Matias Fernandez Timeline Experiencia Game">`;
}

</script>


