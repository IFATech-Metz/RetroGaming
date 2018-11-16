<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/catalogue.css">
    <title>Page Title</title>
</head>
<body>
<header>
    <?php include("header-lucas.html"); ?>
</header>
<table class="tableau">
<?php
$id = $_GET['id'];
for($i=0; $i<=$id; $i+=$id)
{
     $file_handle = fopen("../DONNEES/F" . $i . ".txt", "r");

     while (!feof($file_handle))
     {
        $line_of_text = fgets($file_handle);
        $gamedetail = explode("#", $line_of_text);
        echo"<tr>";
            if($gamedetail[5]==1)
            {    
                for($j=0; $j<(count($gamedetail)-1); $j++)
                {
                    if($j!=5)
                    {
                        echo"<td>" . $gamedetail[$j] . "</td>";
                    }
                }
            }
        echo"</tr>";
     }

    fclose($file_handle);
}
?>
</table>

<form method='post' action='modif_item.php'>
    <input id='Modifier' type='submit' name='Modifier' value='Modifier'/>
</form>
<form method='post' action='<?php echo "detail.php?id=".$id;?>'  enctype="multipart/form-data">
    <input id='Supprimer' type='submit' name='Supprimer' value='Supprimer'/>
</form>

<?php
if(isset($_POST['Supprimer']))
{
    echo "<form method='post' action='detail.php?id=".$id."' enctype=\"multipart/form-data\">
    <input id='Supprimer' type='submit' name='Supprimerverif' value='Etes vous sur de bien vouloir supprimer'/>
</form>";
    if(isset($_POST['Supprimerverif']))
    {
        echo 'toto';
                $file_handle = fopen("../DONNEES/F" . $id . ".txt", "r");           
                $line_of_text = fgets($file_handle);
                $new_text = str_replace('#1#','#0#',$line_of_text);
                fclose($file_handle);   
                
                $file_handle2 = fopen("../DONNEES/F" . $id . ".txt", "w+");
                fwrite($file_handle2,$new_text);
                fclose($file_handle2);
    }			

}

?>
</body>
</html>