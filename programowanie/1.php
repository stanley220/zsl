<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Średni wiek</title>
</head>
<body>

    <?php
        if (!isset($_POST['person']) && !isset($_POST['buttonAvg'])) {
            echo <<< FORMCOUNTPERSON
            <h3>Ilość osób w rodzinie</h3>
            <form method="post">
                <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
                <input type="submit" value="Zatwierdź">
            </form>
        FORMCOUNTPERSON;
        }
    ?>

    <?php
        if (!empty($_POST['person'])) {
            echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
            echo <<< FORMAGEPERSON
                <form method="post">
        FORMAGEPERSON;

            for ($i=1; $i <= $_POST['person']; $i++) {
                echo "<input type=\"number\" name=\"age$i\" placeholder=\"Podaj wiek osoby $i\"><br><br>";
            }
            echo '<input type="submit" name="buttonAvg" value="Oblicz średni wiek">';

            echo <<< FORMAGEPERSON
                </form>
        FORMAGEPERSON;
        }

        if (isset($_POST['buttonAvg'])) {
            //print_r($_POST);
            $ageAvg=0;
            foreach ($_POST as $key => $value) {
              echo "$key: $value<br>";
              if ($key != 'buttonAvg') {
                $ageAvg=$ageAvg+$value;
              }
            }
            echo "Średni wiek: $ageAvg";
        }
        //Dodać zaokrąglenie wyniku do 2 miejsc po przecinku (number_format)
        //Dodać hiperłącze wyświetlające początkowy formularz (header('location: '))
    ?>
</body>
</html>
