

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="stade">

<?php include'./navbar.php';?>
    <section class="mx-5 mt-5 row justify-content-around">
       
        <!-- <div id="4-3-3" class="col-md-9 ">
            <div class="pitch row justify-content-center">
              
                <div class="row">
                    <div class="col d-flex justify-content-evenly">
                        <div class="player-card" onclick="ChooseLW()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </div>
                        <div class="player-card" onclick="ChooseST()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card"  onclick="ChooseRW()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </div>

                    </div>
                    </div>
                    <div class="row">
                    <div class="col d-flex justify-content-around">
                        <div class="player-card" onclick="ChooseCM()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card" onclick="ChooseCM()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card" onclick="ChooseCM()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col d-flex justify-content-around ">
                        <div class="player-card"  onclick="ChooseLB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card" onclick="ChooseCB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card" onclick="ChooseCB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        <div class="player-card" onclick="ChooseRB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col d-flex justify-content-center" >
                    <div class="player-card"  id="GK" onclick="ChooseGK()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                    </div>
                    </div>

            </div> -->
            
         </div>
            <div id="4-4-2" class="col-md-9 ">
                <div class="pitch row justify-content-center">
              
                    <div class="row">
                        <div class="col d-flex justify-content-evenly">
                            <div class="player-card" id="ST" onclick="ChooseST()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </div>
                            <div class="player-card" id="ST1" onclick="ChooseST1()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col d-flex justify-content-around">
                            <div class="player-card"  id="LW" onclick="ChooseLW()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </div>
                            <div class="player-card" id="CM" onclick="ChooseCM()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </div>
                            <div class="player-card" id="CM1" onclick="ChooseCM1()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                            <div class="player-card" id="RW" onclick="ChooseRW()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-around ">
                            <div class="player-card" id="LB" onclick="ChooseLB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                            <div class="player-card" id="CB" onclick="ChooseCB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                            <div class="player-card" id="CB1" onclick="ChooseCB1()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                            <div class="player-card" id="RB" onclick="ChooseRB()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center" >
                            <div class="player-card"  id="GK" onclick="ChooseGK()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></div>
                        </div>
                    </div>

            </div>
            
         </div>
         <div class="col-md-3">
         
            <!-----------------------SIDE BARRE----------------------->
            
            <div class="card side-card">
                <div class="card-body">
                    <h5 class="card-title">Formation</h5>

                    <div class="dropdown">
                        <div class="select">
                            <span class="selected">4-4-2</span>
                            <div class="caret"></div>
                        </div>
                        <ul class="menu">
                            <li onclick="FormSwitch()" >4-3-3</li>
                            <li>3-4-3</li>
                            <li>5-4-1</li>
                            <li class="active" onclick="FormSwitch()">4-4-2</li>
                            <li>4-2-4</li>
                        </ul>
                    </div>
                    <hr>
                    <h5 class="card-title">Build Up Style</h5>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected">Balanced</span>
                            <div class="caret"></div>
                        </div>
                        <ul class="menu">
                            <li>Counter</li>
                            <li>Short Passing</li>
                            
                            <li class="active">Balanced</li>
                            
                        </ul>
                    </div>
                <p class="card-text">Players will come short to support the ball carrier rather than make forward runs. This more cautious approach allows the team to maintain their defensive shape for longer during the transition.</p>
                    <hr>
                    <h5 class="card-title">Defensive Approach</h5>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected">Balanced</span>
                            <div class="caret"></div>
                        </div>
                        <ul class="menu">
                            <li>Deep</li>
                            <li>High</li>
                            
                            <li class="active">Balanced</li>
                            <li>Agressive</li>
                        </ul>
                    </div>
                    <p class="card-text">This approach gives the defence flexibility on how deep they drop, and which runs they track.</p>

                    <hr>
                    <h5 class="card-title">Add Player</h5>
                    
                        <!------------------------------------------------------------------------------------------------------------------------------------------->

                        <div class="d-flex flex-row justify-content-center" >
                            <div>
                                <button class="P-card" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span><svg class="" viewBox="0 0 36 42" fill="none" width="36" ><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg></span><div class="position-absolute fs-3 mb-1"><a href="./dashboard.php" style="text-decoration: none;">+</a></div></button>
                            </div>    
                            <!-- <div id="hide-sub-b">
                                <button class="P-card" onclick=""><span><svg class="" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg></span><div class="position-absolute fs-3 mb-1">+</div></button>

                            </div> -->
                         </div>


                            
                           
            </div>

         </div>
        </div>
    </div>
</section>

                    <!-----------------------SUB PLAYERS----------------------->

<section id="players" class="d-flex mt-5" style=" width: 770px;" >
   
      <!-- Modal -->
      <div class="modal fade"  data-bs-theme="dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="m-3 colo text-light" >Substitutions</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="test" class="test d-flex flex-md-row flex-wrap">


                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
  
    
    
    
</section>

<script src="../script.js"></script>
</body>
</html>