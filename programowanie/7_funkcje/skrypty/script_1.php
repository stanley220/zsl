<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <?php
      require_once '../funkcje/function_1.php';
      echo "<hr>";
      if (!empty($_POST['name']) && !empty($_POST['color']) && !empty($_POST['nationality'])) {
        echo "Imię bez poprawy: ".$_POST['name'].", długość: ".strlen($_POST['name'])."<br>";
        $color=$_POST['color'];
        echo "<div style=\"color: $color\">";
        echo "Imię po poprawie: ".validateName($_POST['name'], 4, $_POST['color']).", długość: ".strlen(validateName($_POST['name'], 4, $_POST['color']))."</div>";
        echo "Narodowość: ".validateNatio($_POST['nationality']);
      }
    ?>
  </body>
</html>
