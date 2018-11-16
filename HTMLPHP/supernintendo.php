<?php  
for($i=0; $i<$id; $i++)
{
$file_handle = fopen("../DONNEES/F".$i.".txt", "r");

    while (!feof($file_handle))
    {

    $line_of_text = fgets($file_handle);
    $gamedetail = explode("#", $line_of_text);
    echo"<tr>";
        if($gamedetail[5]==1)
        {    
            for($j=0; $j<(count($gamedetail)-2); $j++)
            {
                echo"<td><a href='detail.php?id=" . $gamedetail[0] . "'>" . $gamedetail[$j] . "</a></td>";
            }
        }

    echo"</tr>";
    }

    fclose($file_handle);
}

?>