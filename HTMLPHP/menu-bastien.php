<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/catalogue.css">
    <title>Page Title</title>
</head>
<body>
    <?php include("header-lucas.html"); ?>

<table class="tableau">
<?php

$nbFichiers = 0;


                                                                                // Choix du répertoire
$chemin = '../DONNEES';
                                                                                // Ouverture du répertoire
$repertoire = opendir($chemin);

function nb_element($repertoire, $nbFichiers)
{
    $nbFichiers = 0;
    while($fichier = readdir($repertoire))
        {
            if ($fichier != "." && $fichier != "..")
            {
                $nbFichiers++;
            }
        }
    return $nbFichiers;
    }

//fopen("DONNEES/F".nb_element($repertoire, $nbFichiers).".txt", "w");

for($i=0; $i<5; $i++)
{
$file_handle = fopen("../DONNEES/F".$i.".txt", "r");

    while (!feof($file_handle))
    {

    $line_of_text = fgets($file_handle);
    $gamedetail = explode("#", $line_of_text);
    echo"<tr>";

        for($j=0; $j<count($gamedetail); $j++)
        {
            echo"<td>$gamedetail[$j]</td>";
        }

    echo"</tr>";
    }

    fclose($file_handle);
}

echo nb_element($repertoire, $nbFichiers);
?>

</table>

<form method='post'>

    <input type='text' name='ID' value='0'/>
    <input type='text' name='Titre' value='Titre'/>
    <input type='file' name='Image' value='DL_image' accept="image/png, image/jpeg, image/jpg"/>
    <input type='date' name='Date de sortie' value='jj/mm/aaaa'/>
    <input type='text' name='Description' value='Résumé du jeu'/>
    <input type='submit' name='sub1'/>

</form>

</body>
</html>
