<?php
    $tekst = <<< T
        ZSŁ - Zespół 
        Szkół 
        Łączności
    T;

    echo "$tekst<br>";
    echo nl2br($tekst)."<br>"; //w każdej nowej lini dodaje wcięcie (<br>)

    $name="janusz";
    //zamiana liter na małe 
    echo strtolower($name)."<br>";
    echo strtoupper($name)."<br>";
    $imnaz = "janusz kowalski";
    echo ucfirst($imnaz)."<br>"; // zmiana pierwszej litery
    echo ucwords($imnaz); // zmiana wszystkich pierwszych liter

    $lorem="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, tempore quisquam enim minus maxime minima sequi, debitis consequatur necessitatibus, hic laboriosam! Obcaecati explicabo sed nisi, ipsa quasi fuga at commodi?";
    $col=wordwrap($lorem, 30, "<br>"); //po 30 znakach dodaje <br>
    echo $col;

    ob_clean();//czyszczenie zawartości bufora
    //czyszczenie białych znaków
    $name1="Janusz";
    $name2=" Janusz ";

    echo "Długość \$name ".strlen($name1)."<br>";
    echo "Długość \$name ".strlen($name2)."<br>";

    echo "Długość \$name ".strlen(ltrim($name2))."<br>";
    echo "Długość \$name ".strlen(rtrim($name2))."<br>";
    echo "Długość \$name ".strlen(trim($name2))."<br>"; 

    echo strstr("janusz@gmail.com", "@")."<br>";
    
    $name="janusz";
    echo substr($name, 2)."<br>";
    echo substr($name, 2, 1)."<br>";
    echo substr($name, -2)."<br>";
    echo substr($name, -2, 1)."<br>";

    echo substr(strstr("janusz@gmail.com", "@"), 1)."<br>";
    

?>