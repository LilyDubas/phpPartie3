<?php
$score = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP</title>
</head>
<body>
  <div class="jumbotron m-auto text-center">
    <h1>Your score</h1>
    <?php
    while ($score <= 10) {
    echo 'Votre score est: ' . $score . '<br>';
    $score++;
    }
     ?>
  </div>
</body>
</html>
