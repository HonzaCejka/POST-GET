<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol 2</title>
</head>
    <body>
        <a href="index.php">Ukol1</a>
        <a href="ukol2.php">Ukol2</a> 
        <a href="ukol3.php">Ukol3</a> <br>
        <form>
        a: <input name="a" type="number" value="0"><br>
        b: <input name="b" type="number" value="0"><br>
        c: <input name="c" type="number" value="0"><br>
        <input type="submit" value="spocitat"/>
        </form>
    <?php
        $D=0;        
        if ($_GET) {
            $A = $_GET["a"];
            $B = $_GET["b"];
            $C = $_GET["c"];
            $D = ($B*$B)-(4*$A*$C);    
            if ($A == 0) {
                echo("A nesmí být nula");
            }     
            else {
                if ($D<0) {
                    echo("D nesmi být nula");
                }else if ($D == 0) {
                    $x = (-$B)/(2*$A);
                    echo("x1,2 = $x");
                }else{
                    $x1 = ((-$B)+sqrt($D))/(2*$A);
                    $x2 = ((-$B)-sqrt($D))/(2*$A);
                    echo("x1 = $x1<br>x2 = $x2");
                }    
            }              
        }
    ?>
        </body>
</html>