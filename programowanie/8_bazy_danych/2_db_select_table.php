<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "3pi2t");

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);

    //$user = $result->fetch_assoc();

    echo <<< TABLE
      <table>
        <tr>
          <th>Id</th>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Data utworzenia użytkownika</th>
        </tr>
TABLE;

    while ($user = $result->fetch_assoc()) {
      echo <<< USER
        <tr>
          <td>$user[id]</td>
          <td>$user[name]</td>
          <td>$user[surname]</td>
          <td>$user[birthday]</td>
          <td>$user[create_date]</td>
        </tr>
USER;
    }
    echo "</table>";
    ?>
  </body>
</html>
