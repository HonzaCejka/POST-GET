<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol 1</title>
</head>
    <body>
        <a href="index.php">Ukol1</a>
        <a href="ukol2.php">Ukol2</a> 
        <a href="ukol3.php">Ukol3</a> <br>
        <p>Datum Narození: 3.4.2006</p>
        
        <?php
        $vysledek = 0;
        $cislo = 0;
        for ($i=3; $i <= 8; $i++) { 
            echo("<a href="."?cislo=$i".">číslo $i</a><br>");
        }
        if($_GET)
        {
            $cislo = $_GET["cislo"];
            for ($i=1; $i <= 10; $i++) { 
                $vysledek = $cislo * $i;
                echo("$i * $cislo = $vysledek<br>");
            }    
        }             
        ?>
    </body>
</html>