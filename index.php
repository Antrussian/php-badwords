<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<form action="index.php" method="GET">
    <label for="ParolaUtente">Inserisci una parola</label>
    <input type="text" name="parolaUtente" id="parolaUtente">
    <button type="submit"> Invia </button>
</form>


<?php 

$paragrafo = "Sono un paragrafo semplice" ;
$lunghezza = strlen($paragrafo);


  echo "<p> $paragrafo $lunghezza </p>";

  $parolaUtente = $_GET['parolaUtente'] ?? 'valore_di_default';



$nuovoParagrafo = str_replace($parolaUtente, "***", $paragrafo);

  
echo $nuovoParagrafo . $lunghezza;

  ?>



</body>
</html>