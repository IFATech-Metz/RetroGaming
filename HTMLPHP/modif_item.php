<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/catalogue.css">
    <title>Page Title</title>
</head>
<body>
Pour ajouter un jeu remplissez ce formulaire: <br><br>
<form method='post' action='ajout_item.php' enctype="multipart/form-data">
    Titre du jeu: <input type='text' name='titre' value='Titre'/><br>
    Date: <input type='date' name='date' value=''/><br>
    Description: <input type='text' name='description' value='Résumé du jeu' size='100'/><br>
    Selectionnez une image: <input type='file' name='Valider'/><br>
    <input type='submit' name='sub1'/>
</form>
<?php

?>

</body>
</html>