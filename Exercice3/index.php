<?php
$first = 100;
$second = 22;
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
    <?php
    while ($first >= 10) {
    echo 'your score:' . $first * $second . '<br>';
    $first--;
    }
     ?>
  </div>
</body>
</html>
