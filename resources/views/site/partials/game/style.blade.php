
<style>
    #gameContainer{
        position: relative;
        display: inline;
    }
    @media(max-width: 1200px){
        #gameContainer{
            display: none;
        }
    }
    #startGameScreen{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        text-align: center;
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
        #startGameScreen-text{
            display: none;
            padding-top: 20px;
        }

    #gameover{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        text-align: center;
        display: none;
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    #gamecard{
        margin-left: calc(50% - 400px);
        width: 800px;
        height: 125px;
        padding: 5px;
        background: hsl(205deg 38% 89%);
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
        #gamecard-icon{
            padding: 5px;
            float: left;
        }
            #gamecard-icon img{
                width: 100px;
                border-radius: 20px;
            }
        #gamecard-title{
            text-align: center
        }
    #breakout{
        margin-left: calc(50% - 400px);
        font-family: "Germania One";
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        display: none;
    }
    .sound{
        width: 800px;
        position: relative;
        margin-left: calc(50% - 400px);
    }
    #sound{
        width: 30px;
        height : 30px;
        cursor: pointer;
        position: absolute;
        top : 355px;
        left : 15px;
        font-family: "Germania One";
    }
    
    #restart{
        position: absolute;
        top: 310px;
        left : 155px;
        cursor: pointer;
        font-size: 1.25em;
        color : #FFF;
    }
</style>
