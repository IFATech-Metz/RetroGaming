<?php         $file_handle = fopen("../DONNEES/F1.txt", "r");

while (!feof($file_handle)) {

$line_of_text = fgets($file_handle);             
$gamedetail = explode("#", $gamedetail);

echo"<tr>";
    for($i=0; $i<count($gamedetail); $i++)
    {
        echo"<td>$gamedetail[$i]</td>";
    }
echo"</tr>";
}

fclose($file_handle); 
?>