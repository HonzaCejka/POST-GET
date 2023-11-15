<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol 3</title>
</head>
    <body>
        <a href="index.php">Ukol1</a>
        <a href="ukol2.php">Ukol2</a> 
        <a href="ukol3.php">Ukol3</a> <br>
            <form method="post">
                A:<input type="number" name="strana" value="0"><br>
                Čtverec:<input type="radio" name="tvar" value="ctv" checked>
                Krychle:<input type="radio" name="tvar" value="kry"><br>
                Barva: <input type="checkbox" name="barva" checked><br>
                <input type="submit" value="Spocti">                
            </form>
            <?php
            if ($_POST) {
                $a =$_POST["strana"];                                 
                if ($_POST["tvar"] == "ctv") {
                    $obvod = 4*$a;
                    $obsah = $a * $a;
                    if ($_POST["barva"]) {
                        echo("<p style=background-color:aqua>o = $obvod</p>"); 
                        echo("<p style=background-color:aqua>S = $obsah</p>");                  
                    }else {
                        echo("<p>o = $obvod</p>");
                        echo("<p>S = $obsah</p>"); 
                    }
                }else{
                    $povrch = 6*($a*$a);
                    $objem = $a * $a*$a;
                    if ($_POST["barva"]) {
                        echo("<p style=background-color:orange>P = $povrch</p>"); 
                        echo("<p style=background-color:orange>V = $objem</p>");                  
                    }else {
                        echo("<p>P = $povrch</p>");
                        echo("<p>V = $objem</p>"); 
                    }
                }
            }
            ?>
        </body>
</html>