<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "zsł<br>";
    echo "zsł<br>";

    $name="Stanisław";
    echo "Moje imię to $name <br>";
    echo 'Moje imię to $name <br>';
    
    echo "Stanislaw"." Przybył<br>";

    //typy danych
    //całkowity
    $calkowita=10;
    $bin=0b101;//5
    $oct=011;//9
    $hex=0x11;//17
    echo $hex."<br>";

    //zmiennoprzecinkowe
    $v=10.5;

    //logiczny
    $prawda=true;
    $fałsz=false;//w zmiennych nie dajemy polskich znaków
    echo $prawda;
    echo $fałsz;
    //składnia heredox
    echo <<< E
        <br>Twoje imie to: $name<br>
    E;

    $text = <<< E
        <br>tekst<br>
    E;
    echo $text;

    echo <<< "E"
        <br>Twoje imie to: $name<br>
    E;

    $costam="Nowak";
    echo "\$name $costam";
    ?>
</body>
</html>