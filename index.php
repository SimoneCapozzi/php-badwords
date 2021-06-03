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

//creo la variabile contente il testo su cui lavorare
$motto = "Nel giorno più splendente, nella notte più profonda
nessun malvagio sfugga alla mia ronda,
colui che nel male si perde
si guardi dal mio potere, la luce di Lanterna Verde!";

$parola = $_GET['parola']; //assegno alla variabile il valore che andro a modificare tramite l'url
?>

<h1><?php echo $motto?></h1> <!-- stampo il testo a video -->
<hr>

<h2>Questo testo è lungo: <?php echo strlen($motto)?></h2> <!-- calcolo la lunghezza della variabile(testo) -->
<hr>

<h2>parola_modificata: <?php echo $motto = str_replace("$parola", '***', $motto)?></h2> <!-- vado a cambiare il valore della parola nell'url stampando **** -->
<hr>

<h2>Ora il testo è lungo: <?php echo strlen($motto)?></h2> <!-- calcolo la lunghezza della variabile dopo la modifica -->
<hr>

</body>
</html>




