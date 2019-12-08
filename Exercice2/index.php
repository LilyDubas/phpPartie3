<?php
$first = 0;
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
    <h1>some random numbers</h1>
    <?php
    while ($first <= 20) {
    echo $first * $second . '<br>';
    $first++;
    }

     ?>
  </div>
</body>
</html>
