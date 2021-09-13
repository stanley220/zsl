<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo PHP_VERSION;
    echo "<br>";
    echo 2**10;

    $x=10;
    $y=1;

    echo "<br>";

    echo $x<=>$y;

    echo gettype($x);
    echo gettype($y);


    echo "<br>";
    if($x==$y) {
        echo "równe";
    }
    else {
        echo "nie równe";
    }
    echo $x++, '<br>';
    echo ++$x, '<br>';

    $x=1;
    echo $x;


    $x=$x++;
    echo $x;
    $x=++$x;
    echo $x;
    $y=++$x;
    echo $x;
    echo $y;
    $y=$x++;
    echo $x;
    echo $y;

    //Nie mam pojęcia co się dzieje w tym łańcuchu incrementów

    $x=1;
    echo $x; //1
    $x=$x++; 
    echo $x; //1
    $x=++$x;
    echo $x; //2
    $y=++$x; 
    echo $x; //3
    echo $y; //3
    $y=$x++;
    echo $x; //4
    echo "$y<br>"; //3
    ?>
</body>
</html>