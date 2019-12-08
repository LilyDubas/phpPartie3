<?php
$step = [1, 15, 30, 45, 60, 75, 90, 100];
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
    <h1>Step by step</h1>
    <?php
    foreach ($step as $key => $value) {
      echo $value . " On tient le bon bout! <br>";
    }
     ?>
  </div>
</body>
</html>
