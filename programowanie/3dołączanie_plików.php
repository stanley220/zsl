<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dołączanie plików</title>
</head>
<body>
    <h3>Początek strony</h3>
        <?php 
            include './3_1.php';
            include_once './3_1.php'; //wyświetla tylko raz 
            include './3_9.php'; //wyświetla "warning" ale kod strony i tak jest wykonywany

            require './3_1.php'; 
            require './3.9.php';
        ?>
    <h3>Koniec strony</h3>
</body>
</html>