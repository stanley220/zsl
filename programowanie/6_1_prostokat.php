<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <form>
        <input type="text" name="sideA">
        <input type="text" name="sideB">
        <input type="submit" value="oblicz">    
    <from>
        <?php
            if(!empty($_POST["sideA"]) $$ (!empty($_POST["sideA"])) { 
            $sideA=$_POST["sideA"];
            $sideB=$_POST["sideB"];
            $area=pow($sideA, $sideB);
            $circuit=2*$sideA+2*$sideB;
            echo <<< RESULT
                <hr>Pole prostokąta wynosi $area
            RESULT;
            }
            else {
                echo "Wypełnij wszystkie pola";
            }
        ?>
</body>
</html>