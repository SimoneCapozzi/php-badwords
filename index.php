<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
$motto = "Nel giorno più splendente, nella notte più profonda
nessun malvagio sfugga alla mia ronda,
colui che nel male si perde
si guardi dal mio potere, la luce di Lanterna Verde!";

$parola = $_GET['parola']; //per andare a modificare nell'url
?>

<h1><?php echo $motto?></h1>

<h2>Questo testo è lungo: <?php echo strlen($motto)?></h2>

<h2>parola_modificata: <?php echo $motto = str_replace("$parola", '***', $motto)?></h2>

<h2>Questo testo è lungo: <?php echo strlen($motto)?></h2>






</body>
</html>
