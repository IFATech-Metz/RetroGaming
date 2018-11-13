<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/catalogue.css">
    <title>Page Title</title>
</head>
<body>
    

<table>
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

              

for($i=0; $i<$nbFichiers; $i++)
{
$file_handle = fopen("DONNEES/F".$i.".txt", "r");

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

//echo nb_element($repertoire, $nbFichiers);

?>

</table>

<span>Pour ajouter un jeu remplissez ce formulaire: </span><br><br>
    <form method='post' action='ajout_supp_item.php' enctype="multipart/form-data">
   <!-- <input type='text' name='ID' value='0'/> -->  <!-- A faire AUTOMATIQUEMENT !!!!! -->
    <span>Saisissez le titre du jeu: </span><input type='text' name='titre' value=''/><br>
    <span>Selectionnez une image: </span><input type='file' name='image' value='' accept="image/png, image/jpeg, image/jpg"/><br>
    <span>Indiquez la date de sortie: </span><input type='date' name='date' value=''/><br>
    <span>Faites une description rapide du jeu: </span><input type='text' name='description' value='' size='10'/><br>
    <input type='submit' name='sub1'/>
</form>

<?php

/*
if(isset($_POST["sub1"]))
{
    $destination = "IMAGES/";
    move_uploaded_file ($_POST['image'] , $destination);

    if($_POST['titre']!='' && is_uploaded_file($_FILES['image']=1 && $_POST['date']!='' && $_POST['description']!='')
    {
        $new_item = fopen("DONNEES/F".nb_element($repertoire, $nbFichiers).".txt", "w+");
        $add_text = nb_element($repertoire, $nbFichiers) . '#' . $_POST['titre'] . '#' . '<img src="' . $destination . '"' . $_POST['image'] . '>' . '#' . $_POST['date'] . '#' . $POST['description'];
        fwrite($new_item, $add_text);
        fclose($new_item);
    }
    else
    {
        echo "<p id='champsincorrect'> Un des champs n'est pas saisie correctement, veuillez compléter tout les champs.</p>"
    }

}
*/

?>

</body>
</html>