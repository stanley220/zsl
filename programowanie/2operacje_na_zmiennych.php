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
    ?>
</body>
</html>