<?php
$first = 1;
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
    <h1>Another series of random numbers</h1>
    <p>
    <?php
    while ($first <= 10) {
      echo $first . '<br>';
      $first += $first / 2;
    }
     ?>
   </p>
  </div>
</body>
</html>
