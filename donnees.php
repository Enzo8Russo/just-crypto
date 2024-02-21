<?php

// Déclaration du fichier et de son chemin dans une variable
$fichier = 'datas/crypto.json';

// Lecture du fichier - On stocke le contenu dans une autre variable
$tabFilmsJSON = file_get_contents($fichier);

// Décodage du contenu du fichier et transformation en tablau php (array)
$tabFilmsPHP = json_decode($tabFilmsJSON,true);

?>
<!DOCTYPE html>
<html>
<head>
<title>Données</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css">
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="main_style">
  <h1 class="h1_style_2" style="color: rgba(255, 220, 0, 0.9);">Le top 50 des crypto-monnaies</h1>
<div class="div_style_1">
<table id="myTable" class="display">
  <thead>
    <tr>
      <th>Classement</th>
      <th>Nom</th>
      <th>Nom du créateur</th>
      <th>Année de création</th>
      <th>Offre total</th>
      <th>ATH</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($tabFilmsPHP as $film) {
        echo '<tr>';
        echo '<td>'.$film['place'].'</td>';
        echo '<td>'.$film['nom'].'</td>';
        echo '<td>'.$film['createur'].'</td>';
        echo '<td>'.$film['date_creation'].'</td>';
        echo '<td>'.$film['offre_total'].'</td>';
        echo '<td>'.$film['ath'].'</td>';
        echo '</tr>';
      }
    ?>
  </tbody>
</table>
</div>
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable( {
      dom: 'Bfrtip',
      buttons: [ 'print' ],
      language: {url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'}
    });
} );
</script>

</body>
</html>