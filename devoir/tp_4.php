<!DOCTYPE html>
<html lang="fr">
<head> <meta charset="utf-8"> <title>PHP</title> </head>
<body> <h1>La ballade de la mer salée</h1>
<p style="color: blue; font-style: italic">
<?php
for ($i = 0; $i < 1; $i++) {
  echo "Voici le travail du TP4: " . "<br> \n";
}

echo "Partie 1: \n";
for ($i = 0; $i <= 9; $i++) {
  echo "$i ";
}
echo "<br> \n";

echo "Partie 2: \n";
for ($i = 9; $i >= 0; $i--) {
  echo "$i ";
}
echo "<br> \n";

echo "Partie 3: \n";
for ($i = 100; $i >= 10; $i -= 10) {
  echo "$i ";
}
echo "<br> \n";

?>
</p>
</body>
</html>
