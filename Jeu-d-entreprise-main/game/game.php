<?php 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrés Blancs</title>
    <link rel="stylesheet" href="game.css"></head>
<body> 
    <div class="wrapper">
    <div class="header">
        <div class="header-left">
        <h3><?php 
        if($loggedin) {
            $name = $_SESSION['user'];
            echo 'Current User: ' . $name;
        } else { 
            echo 'Current User: Guest';
        }  
        ?></h3>
        <h3>Score: <span id="score">0</span></h3>
        </div>
        <div class="header-right">
            <a class="active" href="game.php">Game</a>
            <a href="../Source/staarr.html">Source</a>
            <?php
            if(!$loggedin){
                echo '<a href="login.php">Login</a>
                <a href="Signup.php">Signup</a>';
            }
            if($loggedin){
                echo '<a href="logout.php" onclick="ResetBoard()">Logout</a>';
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="square" id="11" style="grid-column: 4; grid-row: 6;">11</div>
        <div class="square" id="12" style="grid-column: 5; grid-row: 6;">12</div>
        <div class="square" id="13" style="grid-column: 6; grid-row: 6;">13</div>
        
        <div class="square" id="5" style="grid-column: 1; grid-row: 2;">5</div>
        <div class="square" id="6" style="grid-column: 2; grid-row: 2;">6</div>
        <div class="square" id="7" style="grid-column: 3; grid-row: 2;">7</div>
        <div class="square" id="4" style="grid-column: 1; grid-row: 3;">4</div>
        <div style="grid-column: 3; grid-row: 3;" ><img src="img1.svg" alt="Image1" width="70px" height="70px"></div>
        <div style="grid-column: 7; grid-row: 6;" ><img src="img2.svg" alt="Image2" width="70px" height="70px"></div>
        <div style="grid-column: 8; grid-row: 5;" ><img src="img3.svg" alt="Image3" width="70px" height="70px"></div>
        <div style="grid-column: 10; grid-row: 5;" ><img src="photo.svg" alt="Image4" width="80px" height="70px"></div>
        <div id="cube" class="cube" style="grid-column: 5 / span 4; grid-row: 3 / span 3;">
        <div class="face front">1</div>
        <div class="face back">6</div>
        <div class="face left">4</div>
        <div class="face right">3</div>
        <div class="face top">5</div>
        <div class="face bottom">2</div>

        </div>
		
        <div style="grid-column: 12; grid-row:1;" ><img src="img9.svg"  alt="img9" width="70px" height="70px"></div>
        <div class="square" id="16" style="grid-column: 8; grid-row: 6;">16</div>
        <div class="square" id="22" style="grid-column: 11; grid-row: 7;">22</div>
        
        <div class="square" id="3" style="grid-column: 1; grid-row: 4;">3</div>
        <div class="square" id="14" style="grid-column: 7; grid-row: 7;">14</div>
        <div class="square" id="8" style="grid-column: 3; grid-row: 4;">8</div>
      
        <div class="square" id="2" style="grid-column: 1; grid-row: 5;">2</div>
        <div class="square" id="15" style="grid-column: 8; grid-row: 7;">15</div>
        <div class="square" id="9" style="grid-column: 3; grid-row: 5;">9</div>
        
        <div class="square" id="1" style="grid-column: 1; grid-row: 6;">1</div>
        <div class="square" id="20" style="grid-column: 10; grid-row: 6;">20</div>
        <div class="square" id="10" style="grid-column: 3; grid-row: 6;">10</div>
       
        <div class="square" id="17" style="grid-column: 8; grid-row: 4;">17</div>
        <div class="square" id="18" style="grid-column: 9; grid-row: 4;">18</div>
        <div class="square" id="19" style="grid-column: 10; grid-row: 4;">19</div>
        <div class="square" id="21" style="grid-column: 10; grid-row: 7;">21</div>

        <div class="square" id="23" style="grid-column: 12; grid-row: 4;">23</div>
        <div class="square" id="24" style="grid-column: 12; grid-row: 3;">24</div>
        <div class="square" id="25" style="grid-column: 12; grid-row: 2;">25</div>
        
        <div class="square" id="26" style="grid-column: 11; grid-row:2;">26</div>
        <div class="square" id="27" style="grid-column: 10; grid-row:2;">27</div>
        <div class="square" id="28" style="grid-column: 9; grid-row:2;">28</div>
         <div style="grid-column:12; grid-row:5 / span 4;">
         <img src="img.svg" alt="img">
        </div>
        <div style="grid-column:7 / span 3; grid-row:1 / span 2;">
         <img src="img101.svg">
        </div>
        <div style="grid-column:1 / span 3; grid-row:1 ;">
         <img src="img111.svg" alt="img111">
        </div>
        <div style="grid-column:8 / span 3; grid-row: 3;">
         <img src="img11.svg" alt="img11">
        </div>
        <div style="grid-column: 1; grid-row: 7;" ><img src="img8.svg" alt="img8" width="62px" height="60px"></div>
      

    </div>
    </div>
	<div id="message">Click on the die</div>
    <div id="quiz-section" class="quiz-options">
    </div>
	<div id="svg-button-container" style="display: none;">
            <!-- Ajoutez ici le SVG -->
            <img src="HAPPY.svg" id="earth">
            <!-- Ajoutez ici le detail -->
            <h4 id="detail"></h4>
            <!-- Ajoutez ici le bouton -->
            <button onclick="autreAction()">Continue</button>
    </div>
    <div id="success-dialogue-container" style="display: none;">
            <!-- Ajoutez ici le SVG -->
            <img src="HAPPY.svg" id="earth">
            <!-- Ajoutez ici le detail -->
            <p>Congratulations! You've finished the game!</p>
            <p>Final Score:</p>
            <!-- Ajoutez ici la note finale -->
            <h2 id="final-score"></h2>
            <!-- Ajoutez ici la statistique -->
            <p id="statistic"></p>
            <!-- Ajoutez ici le bouton -->
            <button onclick="ResetBoard()">Play again</button>
    </div>
	<script src="game.js"></script>

   
</body>
</html>
