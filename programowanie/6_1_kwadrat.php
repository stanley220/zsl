<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <form>
        <input type="text" name="sideA">
        <input type="submit" value="oblicz">    
    <from>
        <?php
            if(!empty($_POST["sideA"])) {
            $sideA=$_POST["sideA"];
            $area=pow($sideA, 2);
            $circuit=4*$sideA;
            echo <<< RESULT
                <hr>Pole kwadratu wynosi $area
            RESULT;
            }
            else {
                echo "Wypełnij wszystkie pola";
            }
        ?>
</body>
</html>