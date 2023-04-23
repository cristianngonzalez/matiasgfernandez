
<style>

    #mobileStartGameButton{
        display: none;
    }
    #desktopStartGameButton{
        display: block;
    }

    @media(max-width: 801px){
        #mobileStartGameButton{
            display: block;
        }
        #desktopStartGameButton{
            display: none;
        }
    }
    

    #game-controls-container{
        position: absolute;
        width: 370px;
        height: 450px;
        margin-left: calc(50% - 185px);
        display: none;
    }
        #game-controls-container button{
            border: none;
            border-radius: 5px;
            background: #f75023;
            color: white;    
            position: absolute;
            bottom: 5px;
            zoom: 2.5;
        }
        #game-controls-container button:active{
            color: #f75023;
            background: white; 
        }
        #game-control-left{
            left: 5px;
        }
         #game-control-right{
            right: 5px;
        }

        @media(min-width: 801px){
            #game-controls-container{
                display: none;
            }            
        }

    #gameContainer{
        position: relative;
        display: inline;
        /*font-family: 'Luckiest Guy', cursive !important;*/
    }
        #gameContaine h1 , #gameContaine h2 , #gameContaine h3{
            /* font-family: 'Luckiest Guy', cursive !important; */
        }
        @media(max-width: 801px){
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
        border-radius: 10px;
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
        #startGameScreen-title{
            padding-top: 120px; 
            padding-left: 40px;
            padding-right: 40px;
            /* font-family: 'Luckiest Guy', cursive !important; 
            color: #ff9100; 
            -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255); */
        }
        #startGameScreen-text{
            display: none;
            padding-top: 40px;

            /* font-family: 'Luckiest Guy', cursive !important;
            font-family: 'Luckiest Guy', cursive !important; 
            color: black; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255); */
        }
        @media(max-width: 800px){
            #startGameScreen{
                width: 370px;
                height: 450px;
                margin-left: calc(50% - 185px);
            }
        }

    #gameover{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        text-align: center;
        display: none;
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        border-radius: 10px;
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
        #gameover h2{
            padding-top: 120px;

            /* font-family: 'Luckiest Guy', cursive !important; 
            color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255); */

        }
        @media(max-width: 800px){
            #gameover{
                width: 370px;
                height: 400px;
                margin-left: calc(50% - 185px);
            }
        }
    #winGameScreen{
        width: 800px;
        height: 400px;
        margin-left: calc(50% - 400px);
        background: url("{{env('ASSETS_URL')}}gameassets/img/bg.png");
        display: none;
        text-align: center;
        /* font-family: 'Luckiest Guy', cursive !important; */
        border-radius: 10px;
    }
        #winGameScreen h1{
            padding-top: 50px; font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255);
        }
        #winGameScreen h4{
            /* padding-top: 20px; padding-bottom: 40px;
            font-family: 'Luckiest Guy', cursive !important; color: #ff9100; -webkit-text-stroke: 1px #F8F8F8;
            text-shadow: 0px 2px 4px rgb(0, 204, 255); */
        }
        @media(max-width: 800px){
            #winGameScreen{
                width: 370px;
                height: 450px;
                margin-left: calc(50% - 185px);
            }
        }

    #gamecard{
        margin-left: calc(50% - 400px);
        width: 800px;
        height: 125px;
        padding: 5px;
        border-radius: 10px;
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
        #gamecard-title{
            text-align: center;
            padding-top: 55px; 
            font-size: 30px;
            /* font-family: 'Luckiest Guy', cursive !important; 
            color: #1cbe59;
            -webkit-text-stroke: 1px #fff;
            text-shadow: 0px 2px 4px rgb(0, 204, 255); */
        }
        @media(max-width: 800px){
            #gamecard{
                width: 370px;
                margin-left: calc(50% - 185px);
                height: auto;
            }
                #gamecard-title{
                    font-size: 15px;
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
        }

    #breakout{
        margin-left: calc(50% - 400px);
        border-radius: 10px;
        display: none;
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
        @media(max-width: 800px){
            #breakout{
                margin-left: calc(50% - 185px);
            }
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
        #textOverGame h3{
            font-size: 21px;
        }
        #textOverGame h4{
            font-size: 17px;
        }
        #textOverGame h6{
            font-size: 14px;
        }
        @media(max-width: 800px){
            #textOverGame{
                width: 360px;
                left: calc(50% - 180px);
            }
        }


    .sound{
        width: 800px;
        position: relative;
        margin-left: calc(50% - 400px);
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
    #sound{
        width: 30px;
        height : 30px;
        cursor: pointer;
        position: absolute;
        top : 355px;
        left : 15px;
        /* font-family: 'Luckiest Guy', cursive !important; */
    }
        @media(max-width: 800px){
            #sound{
                display: none;
            }
        }
    
    #restart{
        position: absolute;
        top: 310px;
        left : 155px;
        cursor: pointer;
        font-size: 1.25em;
        color : #FFF;
        /* font-family: 'Luckiest Guy', cursive !important; */
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
