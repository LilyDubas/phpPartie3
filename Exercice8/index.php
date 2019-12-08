<?php
$step = [200, 188, 176, 164, 152, 140, 128, 116, 104, 92, 80, 68, 56, 44, 32, 20, 8, 0];
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
      echo $value . " Enfin! <br>";
    }
     ?>
  </div>
</body>
</html>
