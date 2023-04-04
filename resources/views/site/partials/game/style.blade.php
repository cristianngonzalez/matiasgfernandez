
<style>
    #gameContainer{
        position: relative;
        display: inline;
        font-family: 'Luckiest Guy', cursive !important;
    }
        #gameContaine h1 , #gameContaine h2 , #gameContaine h3{
            font-family: 'Luckiest Guy', cursive !important;
        }
    @media(max-width: 1200px){
        #gameContainer{
            display: none;
            font-family: 'Luckiest Guy', cursive !important;
        }
    }
    #startGameScreen{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        text-align: center;
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        border-radius: 10px;
        font-family: 'Luckiest Guy', cursive !important;
    }
        #startGameScreen-title{
            padding-top: 80px; font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }
        #startGameScreen-text{
            display: none;
            padding-top: 20px;
            font-family: 'Luckiest Guy', cursive !important;
        }

    #gameover{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        text-align: center;
        display: none;
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        border-radius: 10px;
        font-family: 'Luckiest Guy', cursive !important;
    }
        #gameover h2{
            padding-top: 80px;
            font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }
    #winGameScreen{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        display: none;
        text-align: center;
        font-family: 'Luckiest Guy', cursive !important;
        border-radius: 10px;
    }
        #winGameScreen h1{
            padding-top: 50px; font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }
        #winGameScreen h4{
            padding-top: 20px; padding-bottom: 40px;
            font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }

    #gamecard{
        margin-left: calc(50% - 400px);
        width: 800px;
        height: 125px;
        padding: 5px;
        border-radius: 10px;
        font-family: 'Luckiest Guy', cursive !important;
    }
        #gamecard-title{
            text-align: center;
            padding-top: 30px; font-family: 'Luckiest Guy', cursive !important; 
            color: #1cbe59;
            -webkit-text-stroke: 1px #fff;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }

    #breakout{
        margin-left: calc(50% - 400px);
        border-radius: 10px;
        display: none;
        font-family: 'Luckiest Guy', cursive !important;
    }
    #textOverGame{
        position: absolute;
        width: 700px;
        height: 400px;
        left: calc(50% - 350px);
        z-index: 3;
        text-align: center;
        top: 125px;
        pointer-events: none;
    }
    .sound{
        width: 800px;
        position: relative;
        margin-left: calc(50% - 400px);
        font-family: 'Luckiest Guy', cursive !important;
    }
    #sound{
        width: 30px;
        height : 30px;
        cursor: pointer;
        position: absolute;
        top : 355px;
        left : 15px;
        font-family: 'Luckiest Guy', cursive !important;
    }
    
    #restart{
        position: absolute;
        top: 310px;
        left : 155px;
        cursor: pointer;
        font-size: 1.25em;
        color : #FFF;
        font-family: 'Luckiest Guy', cursive !important;
    }

    .animate_infinite_loop{
        animation-iteration-count: infinite;
    }

    .animate_duration_2s{
        animation-duration: 2s;
    }
    .animate_duration_3s{
        animation-duration: 3s;
    }
</style>
