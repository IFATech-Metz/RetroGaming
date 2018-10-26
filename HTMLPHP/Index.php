<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/miseenpage.css">
    <title>Rétro Gaming</title>
</head>
    <body>
        <header>    
        </header>
            <table id="liste">
                        <tr>
                            <th>
                                    <?php

                                            $files_content = readfile("../DONNEES/colonne.txt");
                                            echo $files_content;

                                    ?>  
                            </th>
                        </tr>
                        <tr>
                            <td>
                                     <?php

                                            $files_content = readfile("../DONNEES/F1.txt");
                                            echo $files_content;
                                
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <?php
            
                                            $files_content = readfile("../DONNEES/F2.txt");
                                            echo $files_content;
                                            
                                    ?>
                                        </td>
                        </tr>
                        <tr>
                            <td>
                                    <?php
            
                                            $files_content = readfile("../DONNEES/F3.txt");
                                            echo $files_content;
                                            
                                    ?>
                                        </td>
                        </tr>
            </table>
    </body>
</html>