<?php

$correctAnswers = isset($_SESSION['correctAnswers']) ? $_SESSION['correctAnswers'] : 0;
$wrongAnswers = isset($_SESSION['wrongAnswers']) ? $_SESSION['wrongAnswers'] : 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Results</title>
</head>
<body>
<div class="ecran">
  <div class="carte" data-tilt>
    <img src="Logo.jpg"/>
    <h2>Kirbeco</h2>
    <div class="form" id="signup-form">
        <h3>Results</h3><br>
    <p>Correct answers: <?php echo $correctAnswers; ?></p><br>
    <p>Wrong answers: <?php echo $wrongAnswers; ?></p>
    </div>
</div>
<script src="vanilla-tilt.js"></script>

</body>
</html>
