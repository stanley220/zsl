<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane</title>
  </head>
  <body>
    <?php
      if (!empty($_GET['name']) && !empty($_GET['nationality']) && !empty($_GET['age'])) {
        $name=ucfirst(strtolower($_GET['name']));
        $nationality=ucfirst(strtolower($_GET['nationality']));
        echo <<< L
          Imię: $name<br>
          Narodowość: $nationality<br>
          Wiek: $_GET[age]lat
L;
      }else{
        echo "Wypełnij wszystkie pola!";
      }
     ?>
  </body>
</html>
